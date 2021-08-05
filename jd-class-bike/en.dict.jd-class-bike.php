<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(


	// Typology: BikeType
	'Class:BikeType' => 'Biketype',
	'Class:BikeType+' => 'e.g. electrical, normal',
	'Class:BikeType/Attribute:name' => 'Biketype',
	'Class:BikeType/Attribute:bikes_list' => 'Bikes',
	'Class:BikeType/Attribute:bikes_list+' => 'Overview of this type of bikes',
	
	// Typology: BatteryType
	'Class:BatteryType' => 'Batterytype',
	'Class:BatteryType+' => 'e.g. 400Watt Bosch',
	'Class:BatteryType/Attribute:name' => 'Batterytype',
	'Class:BatteryType/Attribute:battery_list' => 'Batteries',
	'Class:BatteryType/Attribute:battery_list+' => 'Overview of types of batteries',
	
	
	// Dictionary entries go here
	'Class:Bike' => 'Bike',
	'Class:Bike+' => '',
	'Class:Bike/Attribute:biketype_id' => 'Type',
	'Class:Bike/Attribute:biketype_id+' => 'e.g. electrical, normal',
	
	'Class:Bike/Attribute:logouptodate' => 'Logo up to date',
	'Class:Bike/Attribute:logouptodate+' => '',
	'Class:Bike/Attribute:logouptodate/Value:no' => 'No',
	'Class:Bike/Attribute:logouptodate/Value:no+' => 'No',
	'Class:Bike/Attribute:logouptodate/Value:yes' => 'Yes',
	'Class:Bike/Attribute:logouptodate/Value:yes+' => 'Yes',
	
	'Class:Bike/Attribute:maintenanceplace_id' => 'Maintenance place',
	'Class:Bike/Attribute:maintenanceplace_id+' => 'The maintenance place for this Bike',
	'Class:Bike/Attribute:bikepicture' => 'Bike picture',
	'Class:Bike/Attribute:bikepicture+' => 'Upload a clear picture of the Bike',
	'Class:Bike/Attribute:bags' => 'Bags',
	'Class:Bike/Attribute:bags+' => '',
	'Class:Bike/Attribute:bags/Value:no' => 'No',
	'Class:Bike/Attribute:bags/Value:no+' => 'No',
	'Class:Bike/Attribute:bags/Value:yes' => 'Yes',
	'Class:Bike/Attribute:bags/Value:yes+' => 'Yes',
	'Class:Bike/Attribute:odometer' => 'Odometer',
	'Class:Bike/Attribute:odometer+' => '',
	'Class:Bike/Attribute:odometer/Value:no' => 'No',
	'Class:Bike/Attribute:odometer/Value:no+' => 'No',
	'Class:Bike/Attribute:odometer/Value:yes' => 'Yes',
	'Class:Bike/Attribute:odometer/Value:yes+' => 'Yes',
	'Class:Bike/Attribute:lock' => 'Lock',
	'Class:Bike/Attribute:lock+' => '',
	
	'Class:Bike/Attribute:chassisnumber' => 'Chassis number',
	'Class:Bike/Attribute:chassisnumber+' => 'Chassis number',
	
	'Class:Bike/Attribute:lastmaintenance' => 'Last maintenance',
	'Class:Bike/Attribute:lastmaintenance+' => 'Date of last maintenance',
	
	'Class:Bike/Attribute:bikemonthrecord_list' => 'Monthly overview',
	'Class:Bike/Attribute:bikemonthrecord_list+' => '',
		
	'BikeMonthRecord:baseinfo' => 'General info',

	'Class:BikeMonthRecord' => 'Monthly record',
	'Class:BikeMonthRecord+' => '',
	
	
	'Class:BikeMonthRecord/Attribute:bike_id' => 'Bike',
	'Class:BikeMonthRecord/Attribute:bike_id+' => '',
	
	'Class:BikeMonthRecord/Attribute:org_id' => 'Organisation',
	'Class:BikeMonthRecord/Attribute:org_id+' => 'Organisation',
	'Class:BikeMonthRecord/Attribute:monthofrecord' => 'Month',
	'Class:BikeMonthRecord/Attribute:monthofrecord+' => 'Month',
	
	'Class:BikeMonthRecord/Attribute:mileage' => 'Mileage',
	'Class:BikeMonthRecord/Attribute:mileage+' => 'Mileage (in km)',
	'Class:BikeMonthRecord/Attribute:remarks' => 'Remarks',
	'Class:BikeMonthRecord/Attribute:remarks+' => '',		

	
	'Menu:SearchBikeMonthRecord' => 'Monthly review bike',
	'Menu:SearchBikeMonthRecord+' => 'Search in the monthly reviews of all bikes',	
	'Menu:TechnicalRequestBike' => 'Bikes',
	'Menu:TechnicalRequestBike+' => '',
	'Menu:BikeOverview' => 'Overview',
	'Menu:BikeOverview+' => '',
	'Menu:NewBike' => 'New Bike',
	'Menu:NewBike+' => 'Add new Bike',
	'Menu:SearchBike' => 'Search Bike',
	'Menu:SearchBike+' => '',

));

 



?>
