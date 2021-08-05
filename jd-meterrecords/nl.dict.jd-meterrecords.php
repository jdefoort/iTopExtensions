<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(


	// Typology: Metertype
	'Class:MeterType' => 'Metertype',
	'Class:MeterType+' => 'bv: gas, elektriciteit,...',
	'Class:MeterType/Attribute:name' => 'Metertype',
	'Class:MeterType/Attribute:meters_list' => 'Meters',
	'Class:MeterType/Attribute:meters_list+' => 'Overzicht van de verschillende types meters',
	
	
	// Dictionary entries go here
	'Class:Meter' => 'Meter',
	'Class:Meter+' => '',
	'Class:Meter/Attribute:metertype_id' => 'Type',
	'Class:Meter/Attribute:metertype_id+' => 'bv: gas, elektriciteit,...',
	
	'Class:Meter/Attribute:meterpicture' => 'Foto',
	'Class:Meter/Attribute:Meterpicture+' => 'Laad een foto op',
	'Class:Meter/Attribute:more_info' => 'Meer info',
	'Class:Meter/Attribute:more_info+' => '',
	
	'Class:Meter/Attribute:meterrecord_list' => 'Metingen',
	'Class:Meter/Attribute:Meter_list+' => '',
	'Class:Meter/Attribute:meter_dashboard' => 'Grafiek',
	'Class:Meter/Attribute:meter_dashboard+' => 'Toon de metingen op een grafische manier',
	'Class:Meter/Attribute:state_of_connection' => 'Staat van de meter',		
	'Class:Meter/Attribute:state_of_connection+' => 'In welke staat is de meter',		
	'Class:Meter/Attribute:state_of_connection/Value:perfect' => 'Perfect',
	'Class:Meter/Attribute:state_of_connection/Value:perfect+' => 'Perfect',
	'Class:Meter/Attribute:state_of_connection/Value:deteriorating' => 'Aan het verminderen',
	'Class:Meter/Attribute:state_of_connection/Value:deteriorating+' => 'Aan het verminderen',
	'Class:Meter/Attribute:state_of_connection/Value:needs_fixing' => 'Nood aan herstel',
	'Class:Meter/Attribute:state_of_connection/Value:needs_fixing+' => 'Nood aan herstel',
	'Class:Meter/Attribute:state_of_connection/Value:defect' => 'Defect',
	'Class:Meter/Attribute:state_of_connection/Value:defect+' => 'Defect',
		
	'MeterRecord:baseinfo' => 'Globale informatie',

	'Class:MeterRecord' => 'Record',
	'Class:MeterRecord+' => '',
	
	
	'Class:MeterRecord/Attribute:meter_id' => 'Meter',
	'Class:MeterRecord/Attribute:meter_id+' => 'Van welke meter is dit een meting',	
	'Class:MeterRecord/Attribute:org_id' => 'Organisatie',
	'Class:MeterRecord/Attribute:org_id+' => 'Organisatie',
	'Class:MeterRecord/Attribute:date_of_recording' => 'Dag van meting',
	'Class:MeterRecord/Attribute:date_of_recording+' => '',	
	'Class:MeterRecord/Attribute:value' => 'Waarde',
	'Class:MeterRecord/Attribute:value+' => 'Waarde (tot op 2 decimalen)',
	'Class:MeterRecord/Attribute:remarks' => 'Opmerkingen',
	'Class:MeterRecord/Attribute:remarks+' => '',				
	
	'Menu:SearchMeterRecord' => 'Overzichten metingen',
	'Menu:SearchMeterRecord+' => 'zoek in alle metingen',	
	'Menu:MeterRecordMenu' => 'Meters',
	'Menu:MeterRecordMenu+' => '',
	'Menu:MeterOverview' => 'Overzicht',
	'Menu:MeterOverview+' => '',
	'Menu:NewMeter' => 'Nieuwe meter',
	'Menu:NewMeter+' => 'Voeg een nieuwe meter toe',
	'Menu:SearchMeter' => 'Zoek meter',
	'Menu:SearchMeter+' => '',



));

 



?>
