<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(


	// Typology: Vehicle Driver's License
	'Class:VehicleDriversLicense' => 'Driver\'s licenses',
	'Class:VehicleDriversLicense+' => 'Types of driver\'s licenses',
	'Class:VehicleDriversLicense/Attribute:name' => 'Type',
	'Class:VehicleDriversLicense/Attribute:vehicles_list' => 'Vehicles',
	'Class:VehicleDriversLicense/Attribute:vehicles_list+' => 'Overview of vehicles requiring this type of driver\'s license',
	
	// Typology: Vehicle Energy Source
	'Class:VehicleEnergySource' => 'Energy sources',
	'Class:VehicleEnergySource+' => 'Types of energy',
	'Class:VehicleEnergySource/Attribute:name' => 'Type',
	'Class:VehicleEnergySource/Attribute:vehicles_list' => 'Vehicles',
	'Class:VehicleEnergySource/Attribute:vehicles_list+' => 'Overview of vehicles requiring this type of energy source',
	
	
	// Dictionary entries go here
	'Class:Vehicle' => 'Vehicle',
	'Class:Vehicle+' => 'Vehicles such as cars and trucks',
	'Class:Vehicle/Attribute:vehicleenergysource_id' => 'Energy source',
	'Class:Vehicle/Attribute:vehicleenergysource_id+' => 'Fuel or energy source',
	
	'Class:Vehicle/Attribute:vehicledriverslicense_id' => 'Driver\'s license',
	'Class:Vehicle/Attribute:vehicledriverslicense_id+' => 'Required driver\'s license to operate this vehicle',

	'Class:Vehicle/Attribute:logouptodate' => 'Logo up to date',
	'Class:Vehicle/Attribute:logouptodate+' => '',
	'Class:Vehicle/Attribute:logouptodate/Value:no' => 'No',
	'Class:Vehicle/Attribute:logouptodate/Value:no+' => 'No',
	'Class:Vehicle/Attribute:logouptodate/Value:yes' => 'Yes',
	'Class:Vehicle/Attribute:logouptodate/Value:yes+' => 'Yes',
	
	'Class:Vehicle/Attribute:maintenanceplace' => 'Maintenance place',
	'Class:Vehicle/Attribute:maintenanceplace+' => 'The maintenance place for this vehicle',
	'Class:Vehicle/Attribute:payload' => 'Payload',
	'Class:Vehicle/Attribute:payload+' => 'The payload for this vehicle',
	'Class:Vehicle/Attribute:vehiclepicture' => 'Vehicle picture',
	'Class:Vehicle/Attribute:vehiclepicture+' => 'Upload a clear picture of the vehicle',
	
	'Class:Vehicle/Attribute:licenseplate' => 'License plate',
	'Class:Vehicle/Attribute:licenseplate+' => 'License plate',
	'Class:Vehicle/Attribute:chassisnumber' => 'Chassis number',
	'Class:Vehicle/Attribute:chassisnumber+' => 'Chassis number',
	
	'Class:Vehicle/Attribute:nextmaintenance' => 'Next planned maintenance',
	'Class:Vehicle/Attribute:nextmaintenance+' => 'Date of next planned maintenance',
	'Class:Vehicle/Attribute:nextinspection' => 'Next planned inspection',
	'Class:Vehicle/Attribute:nextinspection+' => 'Date of next planned inspection',
	'Class:Vehicle/Attribute:insuredtill' => 'Insured until',
	'Class:Vehicle/Attribute:insuredtill+' => 'Date of insurance renewal/expiration',

));

 



?>
