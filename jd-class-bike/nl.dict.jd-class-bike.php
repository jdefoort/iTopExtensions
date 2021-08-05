<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(


	// Typology: BikeType
	'Class:BikeType' => 'Fietstype',
	'Class:BikeType+' => 'bv: elektrisch, normaal, bakfiets,...',
	'Class:BikeType/Attribute:name' => 'Fietstype',
	'Class:BikeType/Attribute:bikes_list' => 'Fietsen',
	'Class:BikeType/Attribute:bikes_list+' => 'Overzicht van alle types fietsen',
	
	// Typology: BatteryType
	'Class:BatteryType' => 'Batterijtype',
	'Class:BatteryType+' => 'bv: 400Watt Bosch',
	'Class:BatteryType/Attribute:name' => 'Batterijtype',
	'Class:BatteryType/Attribute:battery_list' => 'Batterijen',
	'Class:BatteryType/Attribute:battery_list+' => 'Overzicht van alle types batterijen',

	// Dictionary entries go here
	'Class:Bike' => 'Fiets',
	'Class:Bike+' => '',
	'Class:Bike/Attribute:biketype_id' => 'Type',
	'Class:Bike/Attribute:biketype_id+' => 'bv: elektrisch, normaal, bakfiets,...',
		
	'Class:Bike/Attribute:logouptodate' => 'Logo up-to-date',
	'Class:Bike/Attribute:logouptodate+' => '',
	'Class:Bike/Attribute:logouptodate/Value:no' => 'Nee',
	'Class:Bike/Attribute:logouptodate/Value:no+' => 'Nee',
	'Class:Bike/Attribute:logouptodate/Value:yes' => 'Ja',
	'Class:Bike/Attribute:logouptodate/Value:yes+' => 'Ja',
	
	'Class:Bike/Attribute:maintenanceplace_id' => 'Onderhoudsplaats',
	'Class:Bike/Attribute:maintenanceplace_id+' => 'Naar welke fietswinkel moet deze fiets',
	'Class:Bike/Attribute:bikepicture' => 'Afbeelding fiets',
	'Class:Bike/Attribute:bikepicture+' => 'Plaats hier een duidelijke foto van de fiets',
	'Class:Bike/Attribute:bags' => 'Fietszakken',
	'Class:Bike/Attribute:bags+' => '',
	'Class:Bike/Attribute:bags/Value:no' => 'Nee',
	'Class:Bike/Attribute:bags/Value:no+' => 'Nee',
	'Class:Bike/Attribute:bags/Value:yes' => 'Ja',
	'Class:Bike/Attribute:bags/Value:yes+' => 'Ja',
	'Class:Bike/Attribute:odometer' => 'Kilometerteller',
	'Class:Bike/Attribute:odometer+' => '',
	'Class:Bike/Attribute:odometer/Value:no' => 'Nee',
	'Class:Bike/Attribute:odometer/Value:no+' => 'Nee',
	'Class:Bike/Attribute:odometer/Value:yes' => 'Ja',
	'Class:Bike/Attribute:odometer/Value:yes+' => 'Ja',
	'Class:Bike/Attribute:lock' => 'Slot',
	'Class:Bike/Attribute:lock+' => '',
	
	'Class:Bike/Attribute:chassisnumber' => 'Uniek nummer',
	'Class:Bike/Attribute:chassisnumber+' => 'Wat is het unieke nummer van deze fiets',
	
	'Class:Bike/Attribute:lastmaintenance' => 'Laatste onderhoud',
	'Class:Bike/Attribute:lastmaintenance+' => 'Wanneer was het laatste onderhoud',

	'Class:Bike/Attribute:bikemonthrecord_list' => 'Maandoverzicht',
	'Class:Bike/Attribute:bikemonthrecord_list+' => 'Maandoverzicht',
	
	'BikeMonthRecord:baseinfo' => 'Algemene info',

	'Class:BikeMonthRecord' => 'Maandoverzicht',
	'Class:BikeMonthRecord+' => '',
	
	
	'Class:BikeMonthRecord/Attribute:bike_id' => 'Fiets',
	'Class:BikeMonthRecord/Attribute:bike_id+' => '',
	
	'Class:BikeMonthRecord/Attribute:org_id' => 'Organisatie',
	'Class:BikeMonthRecord/Attribute:org_id+' => '',
	'Class:BikeMonthRecord/Attribute:monthofrecord' => 'Maand',
	'Class:BikeMonthRecord/Attribute:monthofrecord+' => '',
	
	'Class:BikeMonthRecord/Attribute:mileage' => 'Kilometerstand',
	'Class:BikeMonthRecord/Attribute:mileage+' => '',
	'Class:BikeMonthRecord/Attribute:remarks' => 'Opmerkingen',
	'Class:BikeMonthRecord/Attribute:remarks+' => '',		

	
	'Menu:SearchBikeMonthRecord' => 'Maandoverzichten',
	'Menu:SearchBikeMonthRecord+' => 'Zoek in de maandoverzichten van alle fietsen',		
	'Menu:TechnicalRequestBike' => 'Fietsen',
	'Menu:TechnicalRequestBike+' => '',
	'Menu:BikeOverview' => 'Overzicht',
	'Menu:BikeOverview+' => '',
	'Menu:NewBike' => 'Nieuwe fiets',
	'Menu:NewBike+' => 'Voeg nieuwe fiets toe',
	'Menu:SearchBike' => 'Zoek fiets',
	'Menu:SearchBike+' => '',



));

 



?>
