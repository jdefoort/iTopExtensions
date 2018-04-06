<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(


	// Typology: Vehicle Driver's License
	'Class:VehicleDriversLicense' => 'Rijbewijzen',
	'Class:VehicleDriversLicense+' => 'Soorten rijbewijzen',
	'Class:VehicleDriversLicense/Attribute:name' => 'Type',
	'Class:VehicleDriversLicense/vehicles_list' => 'Voertuigen',
	'Class:VehicleDriversLicense/Attribute:vehicles_list+' => 'Overzicht van de voertuigen waarvoor dit rijbewijs nodig is',
	
	// Typology: Vehicle Energy Source
	'Class:VehicleEnergySource' => 'Energiebronnen',
	'Class:VehicleEnergySource+' => 'Soorten energie',
	'Class:VehicleEnergySource/Attribute:name' => 'Type',
	'Class:VehicleEnergySource/Attribute:vehicles_list' => 'Voertuigen',
	'Class:VehicleEnergySource/Attribute:vehicles_list+' => 'Overzicht van de voertuigen die deze energiebron gebruiken',
	


	// Dictionary entries go here
	'Class:Vehicle' => 'Voertuig',
	'Class:Vehicle+' => 'Voertuigen zoals auto\'s of vrachtwagens',
	
	'Class:Vehicle/Attribute:vehicleenergysource_id' => 'Energiebron',
	'Class:Vehicle/Attribute:vehicleenergysource_id+' => 'Wat wordt gebruikt om het voertuig aan te drijven',

	
	'Class:Vehicle/Attribute:vehicledriverslicense_id' => 'Rijbewijs',
	'Class:Vehicle/Attribute:vehicledriverslicense_id+' => 'Welk rijbewijs is vereist om met dit voertuig te rijden',
	
	'Class:Vehicle/Attribute:maintenanceplace' => 'Onderhoudsplaats',
	'Class:Vehicle/Attribute:maintenanceplace+' => 'Naar welke garage gaat dit voertuig',
	'Class:Vehicle/Attribute:payload' => 'Laadvermogen',
	'Class:Vehicle/Attribute:payload+' => 'Wat is het laadvermogen van dit voertuig',
	'Class:Vehicle/Attribute:vehiclepicture' => 'Afbeelding voertuig',
	'Class:Vehicle/Attribute:vehiclepicture+' => 'Plaats hier een duidelijke foto van het voertuig',
	
	'Class:Vehicle/Attribute:licenseplate' => 'Nummerplaat',
	'Class:Vehicle/Attribute:licenseplate+' => 'Wat is de nummerplaat',
	'Class:Vehicle/Attribute:chassisnumber' => 'Chassisnummer',
	'Class:Vehicle/Attribute:chassisnumber+' => 'Wat is het chassisnummer van het voertuig',
	
	'Class:Vehicle/Attribute:nextmaintenance' => 'Volgend gepland onderhoud',
	'Class:Vehicle/Attribute:nextmaintenance+' => 'Wanneer is het volgend gepland onderhoud',
	'Class:Vehicle/Attribute:nextinspection' => 'Volgende keuring',
	'Class:Vehicle/Attribute:nextinspection+' => 'Wanneer moet het voertuig nog eens naar de keuring',
	'Class:Vehicle/Attribute:insuredtill' => 'Verzekering is geldig tot',
	'Class:Vehicle/Attribute:insuredtill+' => 'Tot wanneer loopt de verzekering op dit voertuig',

));

 



?>
