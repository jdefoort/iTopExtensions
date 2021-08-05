<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(



	// Typology: Metertype
	'Class:MeterType' => 'Metertype',
	'Class:MeterType+' => 'e.g. Gas, electricty',
	'Class:MeterType/Attribute:name' => 'Metertype',
	'Class:MeterType/Attribute:meters_list' => 'Meters',
	'Class:MeterType/Attribute:meters_list+' => 'Overview of types of meters',
	
	
	// Dictionary entries go here
	'Class:Meter' => 'Meter',
	'Class:Meter+' => '',
	'Class:Meter/Attribute:metertype_id' => 'Type',
	'Class:Meter/Attribute:metertype_id+' => 'e.g. electrical, gas',
	
	'Class:Meter/Attribute:meterpicture' => 'Picture',
	'Class:Meter/Attribute:Meterpicture+' => 'Upload a clear picture of the meter',
	'Class:Meter/Attribute:more_info' => 'More info',
	'Class:Meter/Attribute:more_info+' => '',
	
	'Class:Meter/Attribute:meterrecord_list' => 'Records overview',
	'Class:Meter/Attribute:meterrecord_list+' => '',
	'Class:Meter/Attribute:meter_dashboard' => 'Graphic view',
	'Class:Meter/Attribute:meter_dashboard+' => '',
	'Class:Meter/Attribute:state_of_connection' => 'State of the connection',		
	'Class:Meter/Attribute:state_of_connection+' => 'State of the connection',		
	'Class:Meter/Attribute:state_of_connection/Value:perfect' => 'Perfect',
	'Class:Meter/Attribute:state_of_connection/Value:perfect+' => 'Perfect',
	'Class:Meter/Attribute:state_of_connection/Value:deteriorating' => 'Deteriorating',
	'Class:Meter/Attribute:state_of_connection/Value:deteriorating+' => 'Deteriorating',
	'Class:Meter/Attribute:state_of_connection/Value:needs_fixing' => 'Needs fixing',
	'Class:Meter/Attribute:state_of_connection/Value:needs_fixing+' => 'Needs fixing',
	'Class:Meter/Attribute:state_of_connection/Value:defect' => 'Defective',
	'Class:Meter/Attribute:state_of_connection/Value:defect+' => 'Defective',
		
	'MeterRecord:baseinfo' => 'General info',

	'Class:MeterRecord' => 'Record',
	'Class:MeterRecord+' => '',
	
	
	'Class:MeterRecord/Attribute:meter_id' => 'Meter',
	'Class:MeterRecord/Attribute:meter_id+' => '',	
	'Class:MeterRecord/Attribute:org_id' => 'Organisation',
	'Class:MeterRecord/Attribute:org_id+' => 'Organisation',
	'Class:MeterRecord/Attribute:date_of_recording' => 'Date of recording',
	'Class:MeterRecord/Attribute:date_of_recording+' => 'Date of recording',	
	'Class:MeterRecord/Attribute:value' => 'Value',
	'Class:MeterRecord/Attribute:value+' => 'Value (2 decimals)',
	'Class:MeterRecord/Attribute:remarks' => 'Remarks',
	'Class:MeterRecord/Attribute:remarks+' => '',				
	
	
	'Menu:SearchMeterRecord' => 'Search Meter records',
	'Menu:SearchMeterRecord+' => 'search in all meter records',	
	'Menu:MeterRecordMenu' => 'Meters',
	'Menu:MeterRecordMenu+' => '',
	'Menu:MeterOverview' => 'Overview',
	'Menu:MeterOverview+' => '',
	'Menu:NewMeter' => 'New Meter',
	'Menu:NewMeter+' => 'Add new Meter',
	'Menu:SearchMeter' => 'Search Meter',
	'Menu:SearchMeter+' => '',

));

 



?>
