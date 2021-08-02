<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(

	// Dictionary entries go here
	
	
	
	'Errors/LeisurePass/ValueOfChecksTooHigh' => 'The value (category) of a Leisure Pass can not be smaller than the total amount of checks related to it.',
	
	
	// Actual Leisure Pass
	'LeisurePass:info' => 'General information', 
	
			
	'Class:LeisurePass' => 'Leisure Pass',
	'Class:LeisurePass+' => 'A pass determining the total amount of checks which can be created.',
	
	'Class:LeisurePass/Name' => '%1$s - %2$s (%3$s)',
	
	'Class:LeisurePass/Attribute:org_id' => 'Organization',
	'Class:LeisurePass/Attribute:org_id+' => 'Organization the client belongs to',
	
	'Class:LeisurePass/Attribute:person_id' => 'Person',
	'Class:LeisurePass/Attribute:person_id+' => 'Person who owns the pass',
	

	'Class:LeisurePass/Attribute:category_id' => 'Category',
	'Class:LeisurePass/Attribute:category_id+' => 'Category (value)', 
	
	// Plan for legacy categories: from_year_value
		 
	'Class:LeisurePass/Attribute:leisurecheck_list' => 'Leisure Checks',
	'Class:LeisurePass/Attribute:leisurecheck_list+' => 'List of Leisure Checks associated with this',

	'Class:LeisurePass/Attribute:created' => 'Created',
	'Class:LeisurePass/Attribute:created+' => 'Creation date',
	
	'Menu:SearchLeisurePass' => 'Search for leisure passes',
	'Menu:SearchLeisurePass+' => 'Search for leisure passes',
	'Menu:NewLeisurePass' => 'New leisure pass',
	'Menu:NewLeisurePass+' => 'Create leisure pass',
	
	
	
	// Actual Leisure Check
	'LeisureCheck:info' => 'General information', 
	
			
	'Class:LeisureCheck' => 'Leisure Check',
	'Class:LeisureCheck+' => 'A Check determining an amount used from a Leisure Pass.',
	'Class:LeisureCheck/Name' => 'Leisure Check',
	
	
	'Class:LeisureCheck/Attribute:pass_id' => 'Pass',
	'Class:LeisureCheck/Attribute:pass_id+' => 'Pass to bill this on',
	'Class:LeisureCheck/Attribute:unique_number' => 'Unique code',
	'Class:LeisureCheck/Attribute:unique_number+' => 'unique code used for payment',
	'Class:LeisureCheck/Attribute:customer_org_id' => 'Organisation',
	'Class:LeisureCheck/Attribute:customer_org_id+' => 'Organisation where the voucher will be used',
	'Class:LeisureCheck/Attribute:organization_vat' => 'VAT number',
	'Class:LeisureCheck/Attribute:organization_vat+' => 'The organization\'s VAT number',
	'Class:LeisureCheck/Attribute:department_vat' => 'VAT number',
	'Class:LeisureCheck/Attribute:department_vat+' => 'The department\s VAT number',
	'Class:LeisureCheck/Attribute:structured_note' => 'Structured note',
	'Class:LeisureCheck/Attribute:structured_note+' => '',
	'Class:LeisureCheck/Attribute:department_branch_number' => 'Branch number',
	'Class:LeisureCheck/Attribute:department_branch_number+' => '',
	'Class:LeisureCheck/Attribute:department_bank_account_number' => 'Bankaccount number',
	'Class:LeisureCheck/Attribute:department_bank_account_number+' => '',
	'Class:LeisureCheck/Attribute:organization_bank_account_number' => 'Bankaccount number',
	'Class:LeisureCheck/Attribute:organization_bank_account_number+' => '',
	
	'Class:LeisureCheck/Attribute:value' => 'Value',
	'Class:LeisureCheck/Attribute:value+' => 'Value of this check',
	

	'Class:LeisureCheck/Attribute:objective' => 'Objective',
	'Class:LeisureCheck/Attribute:objective+' => 'Objective of this check',
	'Class:LeisureCheck/Attribute:department_id' => 'Department',
	'Class:LeisureCheck/Attribute:department_id+' => '',
	'Class:LeisureCheck/Attribute:objective/Value:art' => 'Art',
	'Class:LeisureCheck/Attribute:objective/Value:culture' => 'Culture',
	'Class:LeisureCheck/Attribute:objective/Value:sports' => 'Sports',
	'Class:LeisureCheck/Attribute:objective/Value:youth' => 'Youth',
	'Class:LeisureCheck/Attribute:payment_status' => 'Payment status',
	'Class:LeisureCheck/Attribute:payment_status/Value:other' => 'Other',
	'Class:LeisureCheck/Attribute:payment_status/Value:paid' => 'Paid',
	'Class:LeisureCheck/Attribute:payment_status/Value:unpaid' => 'Not yet paid',	
	'Class:LeisureCheck/Attribute:payment_status/Value:pending' => 'Pending',	
	'Class:LeisureCheck/Attribute:payment_status/Value:exported_to_newhorizon' => 'Exported to New Horizon',	
	'Class:LeisureCheck/Attribute:remarks' => 'Remarks',	
	'LeisureCheck:finance' => 'Financial',
	'LeisurePass:picture' => 'Picture',
	'Class:LeisurePass/Attribute:picture' => 'Picture',
	
	
	'Class:LeisureCheck/Attribute:reason' => 'Reason',
	'Class:LeisureCheck/Attribute:reason+' => 'Reason for this check',
	
	'Class:LeisureCheck/Attribute:created' => 'Created',
	'Class:LeisureCheck/Attribute:created+' => 'Creation date',
	
	// Typology: Category
	'Class:LeisurePassCategory' => 'Leisure Pass - category',
	'Class:LeisurePassCategory+' => 'Different categories for the Leisure Pass',
	'Class:LeisurePassCategory/name' => 'Name',
	'Class:LeisurePassCategory/from' => 'From',
	'Class:LeisurePassCategory/until' => 'Until',
	'Class:LeisurePassCategory/value' => 'Value',
	
	// Menu
	'Menu:SearchLeisureCheck' => 'Search for leisure checks',
	'Menu:SearchLeisureCheck+' => 'Search for leisure checks',
	'Menu:NewLeisureCheck' => 'New leisure check',
	'Menu:NewLeisureCheck+' => 'Create a new leisure check',
	'Menu:LeisurePass' => 'Leisure Pass',

	'Report:LeisurePass:Print' => 'Print pas',
	'Report:LeisureCheck:Print' => 'Print cheque',
	'Report:LeisureCheck:ExportNewHorizon' => 'Export NH',
	
));

 



?>


