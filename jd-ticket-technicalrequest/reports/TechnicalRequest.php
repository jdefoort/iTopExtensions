<?php

/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2020-04-09 16:58:14
 *
 * Definitions of interfaces for the report generator
 */

// Use the same namespace as the report generator
namespace jb_itop_extensions\report_generator;

// jb-itop-extensions
use \jb_itop_extensions\geometry\helpers\GeometryHelper;

// iTop internals
use \DBSearch;
use \DBObjectSet;

/**
 * Class ReportTechnicalRequest_Details. Extends CRAB data.
 */
abstract class RTTechnicalRequest_Details extends RTParent {
	
	/**
	 * @var \Integer $iRank Rank. Lower number = goes first.
	 */
	public static $iRank = 1;
	
	/**
	 * Rendering hook. Can enrich report data (fetching additional info).
	 *
	 * @var \Array $aReportData Report data
	 * @var \CMDBObjectSet[] $oSet_Objects CMDBObjectSet of iTop objects which are being processed
	 *
	 * @return void
	 */
	public static function EnrichData(&$aReportData, $oSet_Objects) {
		
		// Enrich data
		$oRequest = $oSet_Objects->Fetch();
		
		$oAttCode_Request = GeometryHelper::GetPrimaryGeometryAttDefinition(get_class($oRequest));
		$sAttCode_Request = $oAttCode_Request->GetCode();
		$oAttCode_Crab = GeometryHelper::GetPrimaryGeometryAttDefinition('CrabAddress');
		
		if($oRequest !== null) {
			
			$iCrabAddressId = (Int)$oRequest->Get('crab_address_id');
			
			// This situation will probably only happen in legacy tickets.
			// Perhaps those should be updated instead?
			if($iCrabAddressId > 0 && $oRequest->Get($sAttCode_Request) == '') {
				$oSet_Addresses = new DBObjectSet(DBObjectSearch::FromOQL('SELECT CrabAddress WHERE id = '.$oRequest->Get('crab_address_id')));
				
				/** @var \CrabAddress|null $oAddress */
				$oAddress = $oSet_Addresses->Fetch();
				
				if($oAddress !== null) {
					$oRequest->Set($sAttCode_Request, $oAddress->Get($sAttCode_Crab));
				}
				
			}
			
		}
		
	}
	
}

/**
 * Class ReportTechnicalRequest_Details. Specific parameters for a template.
 */
abstract class ReportTechnicalRequest_Details extends DefaultReport implements iReport {
		
	public const sModuleDir = 'jd-ticket-technicalrequest';
	
	/**
	 * Title of the menu item or button
	 *
	 * @return \String
	 *
	 * @details Hint: you can use Dict::S('...')
	 *
	 */
	public static function GetTitle(DBObjectSet $oSet_Objects, $sView) {
		return 'Werkbon';
	}
	
	/**
	 * URL Parameters. Often 'template' or additional parameters for extended iReportTool implementations.
	 *
	 * @return \Array
	 */
	public static function GetURLParameters(DBObjectSet $oSet_Objects, $sView) {
		return [
			'type' => 'details',
			'template' => 'werkbon.html',
			// 'action' => 'show_pdf' -> deliberately commented out. By NOT rendering a PDF, the operator can change view level of the map
		];
	}
	
	
	/**
	 * Whether or not this extension is applicable
	 *
	 * @param \DBObjectSet $oSet_Objects DBObjectSet of iTop objects which are being processed
	 * @param \String $sView View: 'details' or 'list'
	 *
	 * @return \Boolean
	 *
	 */
	public static function IsApplicable(DBObjectSet $oSet_Objects, $sView) {
		return ($sView == 'details' && $oSet_Objects->GetClass() == 'TechnicalRequest');
	}
	
}
