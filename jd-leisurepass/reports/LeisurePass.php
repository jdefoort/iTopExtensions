<?php

/**
 * @copyright   Copyright (C) 2019-2021 Stad Izegem
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-01-13 16:59:09
 *
 * Definitions of interfaces for the report generator
 */

// Use the same namespace as the report generator
namespace jb_itop_extensions\report_generator;

// Generic
use \Exception;

// iTop internals
use \DBSearch;
use \CMDBObjectSet;
use \DBObjectSet;
use \DBObjectSearch;
use \Dict;
use \iTopWebPage;
use \MetaModel;
use \utils;

/**
 * Class ReportLeisurePass_Details. Specific parameters for a template.
 */
abstract class ReportLeisurePass_Details extends DefaultReport implements iReport {
		
	public const sModuleDir = 'jd-leisurepass';
	
	/**
	 * @inheritDoc
	 *
	 * @return \String
	 *
	 */
	public static function GetTitle($oSet_Objects, $sView) {
		
		switch($oSet_Objects->GetClass()) {
			case 'LeisurePass': return Dict::S('Report:LeisurePass:Print');
			case 'LeisureCheck': return Dict::S('Report:LeisureCheck:Print');
			default: return '';
		}
		
	}
	
	/**
	 * @inheritDoc
	 *
	 * @return \Array
	 */
	public static function GetURLParameters($oSet_Objects, $sView) {
		
		switch($oSet_Objects->GetClass()) {
			case 'LeisurePass':
				$sTemplateName = 'vtp.html';
				break;
			case 'LeisureCheck':
				$sTemplateName = 'vtc.html';
				break;
			default:
				$sTemplateName = '';
				break;
		}
		
		return [
			'type' => $sView,
			'template' => $sTemplateName,
			'action' => 'show_pdf'
		];
	}
	
	
	/**
	 * @inheritDoc
	 *
	 * @return \Boolean
	 *
	 */
	public static function IsApplicable(DBObjectSet $oSet_Objects, $sView) {
		return ($sView == 'details' && in_array($oSet_Objects->GetClass(), ['LeisurePass', 'LeisureCheck']));
	}
	
}

/**
 * Class RTLeisureCheckNH_List. Specific export to CSV to import in New Horizon.
 */
abstract class RTLeisureCheckNH_List extends RTParent implements iReportTool {
	
	/**
	 * @inheritDoc
	 *
	 * @return \Boolean
	 *
	 */
	public static function IsApplicable(DBObjectSet $oSet_Objects, $sView) {
		
		$sAction = utils::ReadParam('action', '', false, 'string');
		return($sView == 'list' && $oSet_Objects->GetClass() == 'LeisureCheck' && $sAction == 'export_new_horizon');
		
	}
	
	/**
	 * @inheritDoc
	 * 
	 * @return void
	 *
	 */
	public static function DoExec($aReportData, $oSet_Objects) {
		
		
		// Actual rendering of CSV.
		// Step 1: Get report from template.
		// Step 2: Save this file to a specified location
		// Step 3: Update payment status from "pending" (payment requested by user) to "export_new_horizon" (just exported).
		// Step 4: List which checks of the selection were included and which were not.
		// -> the Twig rendering of the output file will only include the subset of checks where payment is requested
		
		$sClass = 'LeisureCheck';
		
		$sStatusBeforeExport = 'pending';
		// $sStatusAfterExport = 'exported_to_newhorizon'; // Ideally this becomes something else.
		$sStatusAfterExport = 'pending'; // Ideally this becomes something else.
		$sNewHorizon_Entity = 'OC'; // Not exportable in CSV?
		$sNewHorizon_Account = '614520'; // Account (algemene rekening)
		$sNewHorizon_Item = '09000'; // Sub item (beleidsitem)
		
		// Fields in CSV for New Horizon
		$aHeaders = [
			'ID',
			'Naam',
			'Straat',
			'Post',
			'Gemeente',
			'Banknummer',
			'Bedrag',
			'Omschrijving',
			'Mededeling',
			'IBAN',
			'BIC',
			'AR',
			'Bitem',
			'Kplaats',
			'Actieplan',
			'Actie',
			'InvestProject',
			'SubProject',
			'Sector',
			'Code bel',
			'Ond. nr of BTW'
		];
		
		$sContent = '"'.implode('","', $aHeaders).'"'.PHP_EOL;
		
		$aCachedOrgs = [];
		$aCachedDepartments = [];
		$aExportedObjects = [];
		
		// Step 1: Build the data
			
			$oSet_Objects->Rewind();
			while($oObj = $oSet_Objects->Fetch()) {
				
				if($oObj->Get('payment_status') != $sStatusBeforeExport) {
					continue;
				}
				
				// Already in data: bank account number, company/department number (KBO)
				
				// Assume defaults
				$iOrganizationId = $oObj->Get('customer_org_id');
				$iDepartmentId = (Int)$oObj->Get('department_id');
				
				if(isset($aCachedOrgs['Organization::'.$iDepartmentId]) == false) {
					
					$oFilter_Organization = new DBObjectSearch('Organization');
					$oFilter_Organization->AddCondition('id', $iOrganizationId, '=');
					$oSet_Organizations = new CMDBObjectSet($oFilter_Organization);
					
					// Should be 1.
					$oObjOrganization = $oSet_Organizations->Fetch();
					
					if($oObjOrganization === null) {
						self::OutputError(new Exception('Could not find Organization::'.$iOrganizationId));
					}
					
					$aCachedOrganizations['Organization::'.$iOrganizationId] = $oObjOrganization;
					
				}
				else {
					$oObjOrganization = $aCachedOrganizations['Organization::'.$iOrganizationId];
				}
				
				$sName = $oObjOrganization->Get('name');
				$sAddress = ''; // $oObjOrganization->Get('address');
				$sPostalCode = ''; // $oObjOrganization->Get('postal_code');
				$sCity = ''; // $oObjOrganization->Get('city');
				
				$sVAT = $oObjOrganization->Get('vat');
				$sBankAccount = $oObjOrganization->Get('bank_account_number');
				
				if($iDepartmentId > 0) {
					
					if(isset($aCachedDepartments['Department::'.$iDepartmentId]) == false) {
							
						$oFilter_Department = new DBObjectSearch('Department');
						$oFilter_Department->AddCondition('id', $iDepartmentId, '=');
						$oSet_Departments = new CMDBObjectSet($oFilter_Department);
						
						// Should be 1.
						$oObjDepartment = $oSet_Departments->Fetch();
						
						if($oObjDepartment === null) {
							self::OutputError(new Exception('Could not find Department::'.$iDepartmentId));
						}
						
						$aCachedDepartments['Department::'.$iDepartmentId] = $oObjDepartment;
						
					}
					else {
						$oObjDepartment = $aCachedDepartments['Department::'.$iDepartmentId];
					}
					
					// Build name from parent organization, then append department
					$sName = $oObj->Get('customer_org_id_friendlyname').' / '.$oObjDepartment->Get('friendlyname');
					
					// Retrieve address from department, if complete
					if(trim($oObjDepartment->Get('address')) != '' && trim($oObjDepartment->Get('postal_code')) != '' && trim($oObjDepartment->Get('city')) != '') {
						$sAddress = trim($oObjDepartment->Get('address'));
						$sAddress =  preg_split('/\r\n|\r|\n/', $sAddress)[0];
						$sPostalCode = trim($oObjDepartment->Get('postal_code'));
						$sCity = trim($oObjDepartment->Get('city'));
					}
					
					// VAT
					if(trim($oObjDepartment->Get('vat')) != '') {
						$sVAT = trim($oObjDepartment->Get('vat'));
					}
					
					// Bank account number
					if(trim($oObjDepartment->Get('dep_bank_account_number')) != '') {
						$sBankAccount = trim($oObjDepartment->Get('dep_bank_account_number'));
					}
					
				}
				
				$aRow = [
					// 'ID',
					$oObj->GetKey(),
					// 'Naam',
					$sName,
					// 'Straat',
					$sAddress,
					// 'Post',
					$sPostalCode,
					// 'Gemeente',
					$sCity,
					// 'Banknummer',
					'',
					// 'Bedrag',
					$oObj->Get('value'),
					// 'Omschrijving',
					'Vrijetijdscheque #'.$oObj->GetKey(),
					// 'Mededeling',
					$oObj->Get('structured_note'),
					// 'IBAN',
					$sBankAccount,
					// 'BIC',
					'',
					// 'AR',
					$sNewHorizon_Account,
					// 'Bitem',
					$sNewHorizon_Item,
					// 'Kplaats',
					'',
					// 'Actieplan',
					'',
					//'Actie',
					'',
					// 'InvestProject',
					'',
					// 'SubProject',
					'',
					// 'Sector',
					'',
					// 'Code bel',
					'',
					// 'Ond. nr of BTW',
					$sVAT
				];
				
				$sContent .= '"'.implode('","', $aRow).'"'.PHP_EOL;
				
				$aExportedObjects[] = $oObj;
										
			}
		
		
		// Prepare step 2: save to predefined folder. Setting for flexibility between test and production environment.
			
			$sOutputDir = utils::GetCurrentModuleSetting('export_dir_new_horizon', '');
			if($sOutputDir != '') {
				
				$sOutputFile = $sOutputDir.'/export_'.date('YmdHis').'.csv';
				if(file_exists($sOutputDir) == true) {
					
					if(is_dir($sOutputDir) == false) {
						self::OutputError(new Exception($sOutputDir.' does not seem to be a folder.'));
					}
					elseif(is_writable($sOutputDir) == false) {
						$sUser = exec('whoami');
						file_put_contents($sOutputFile, $sContent);
						self::OutputError(new Exception($sUser.' does not seem to have write permissions in '.$sOutputDir.'. Also check owner/group for share.'));
					}
					
					// Step 2: Save to defined location.
					try {
						if(count($aExportedObjects) > 0) {
							file_put_contents($sOutputFile, $sContent);
						}
					}
					catch(Exception $e) {
						// Most likely file output error
						self::OutputError(new Exception('Can not write file to '.$sOutputFile));
					}
					
					try {
						
						$aNotExportedObjects = [];
						
						// Step 3: Update payment_status from "pending" (payment requested by user) to "paid" (just exported).
							
							$oSet_Objects->Rewind(); // Just making sure
							while($oObj = $oSet_Objects->Fetch()) {
								if($oObj->Get('payment_status') == $sStatusBeforeExport) {
									$oObj->Set('payment_status', $sStatusAfterExport);
									$oObj->DBUpdate();
								}
								else {
									$aNotExportedObjects[] = $oObj;
								}
							}
						
						// Step 4: List which LeisureCheck objects of the selection were included and which were not.
						
						
						// Could be translated
						$oP = new iTopWebPage('Export (Betaallijst voor New Horizon)');
						
						$oP->add('<h1>Overzicht selectie</h1>');
						
						// List what objects were selected AND successfully exported
						$oP->add('<h2>Geëxporteerd</h2>');
						$oP->add('<p>Status veranderd: <b>'.Dict::S('Class:LeisureCheck/Attribute:payment_status/Value:'.$sStatusBeforeExport).'</b> &rarr; <b>'.Dict::S('Class:LeisureCheck/Attribute:payment_status/Value:'.$sStatusAfterExport).'</b>');
						$oP->add('<ul>');
						
						foreach($aExportedObjects as $oObj) {
							$oP->add('<li> #'.str_replace(' ', '&nbsp', str_pad($oObj->GetKey(), 5, ' ')).' '.MetaModel::GetHyperLink($sClass, $oObj->GetKey()).'</li>');
						}
						
						$oP->add('</ul>');
						
						if(count($aExportedObjects) == 0) {
							$oP->add('<p>Geen te exporteren cheques gevonden.</p>');
						}
						else {
							$oP->add('<p>');
							$oP->add('Bestand staat klaar.<br>');
							$oP->add('Achterliggende locatie (voor iTop-server): <b>'.$sOutputFile.'</b>');
							$oP->add('</p>');
						}
						
						$oP->add('<hr>');
						
						// List what objects were selected, but NOT successfully exported (wrong status)
						if(count($aNotExportedObjects) > 0) {
								
							$oP->add('<h2>Overgeslagen</h2>');
							$oP->add('<p>Onderstaande cheques waren opgenomen in de selectie, maar de status stond (nog) niet op <b>'.Dict::S('Class:LeisureCheck/Attribute:payment_status/Value:'.$sStatusBeforeExport).'</b></p>');
							$oP->add('<ul>');
							
							foreach($aNotExportedObjects as $oObj) {
								$oP->add('<li> #'.str_replace(' ', '&nbsp', str_pad($oObj->GetKey(), 5, ' ')).' '.MetaModel::GetHyperLink($sClass, $oObj->GetKey()).' </li>');
							}
							
							$oP->add('</ul>');
							
						}
						
						$oP->add('<button onclick="javascript:window.history.back();">Terug</button>');
						
						$oP->output();
						
					}
					catch(Exception $e) {
						self::OutputError($e);
					}
					
				}
				else {
					self::OutputError(new Exception('Setting '.utils::GetCurrentModuleName().'.output_dir refers to a directory which does not exist'));
				}
				
				// Output
				
			}
			else {
				self::OutputError(new Exception('Setting '.utils::GetCurrentModuleName().'.output_dir is undefined. Define it in iTop config under '.utils::GetCurrentModuleName()));
			}
			
	}
	
}

/**
 * Class ReportLeisurePassNewHorizon_List. Specific parameters for a template.
 */
abstract class ReportLeisurePassNewHorizon_List extends DefaultReport implements iReport {
		
	public const sModuleDir = 'jd-leisurepass';
	
	/**
	 * @inheritDoc
	 *
	 * @return \String
	 *
	 */
	public static function GetTitle($oSet_Objects, $sView) {
		
		return Dict::S('Report:LeisureCheck:ExportNewHorizon');
		
	}
	
	/**
	 * @inheritDoc
	 *
	 * @return \Array
	 */
	public static function GetURLParameters($oSet_Objects, $sView) {
		
		return [
			'type' => $sView,
			'action' => 'export_new_horizon'
		];
	}
	
	
	/**
	 * @inheritDoc
	 *
	 * @return \Boolean
	 *
	 */
	public static function IsApplicable(DBObjectSet $oSet_Objects, $sView) {
		return ($sView == 'list' && $oSet_Objects->GetClass() == 'LeisureCheck');
	}
	
}
