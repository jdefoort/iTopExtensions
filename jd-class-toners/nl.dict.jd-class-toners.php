<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	
	// Dictionary entries go here
	'TonerStock:dates' => 'Data',
	'TonerStock:baseinfo' => 'Globale informatie',

	// Typology: Printer
	'Class:Printer/Attribute:toners_list' => 'Toners',
	'Class:Printer/Attribute:toners_list+' => 'Toners voor deze printer',

	
	// Typology: Toner
	'Class:Toner' => 'Toner',
	'Class:Toner+' => 'Toner',
	'Class:Toner/Attribute:name' => 'Naam',
	'Class:Toner/Attribute:name+' => 'Geef deze toner een naam (bv: kleur + type',
	'Class:Toner/Attribute:printers_list' => 'Printers',
	'Class:Toner/Attribute:printers_list+' => 'Welke printers gebruiken deze toner',

	// Typology: TonerStock
	'Class:TonerStock' => 'Tonerstock',
	'Class:TonerStock+' => 'Tonerstock',
	'Class:TonerStock/Attribute:toner_id' => 'Toner',
	'Class:TonerStock/Attribute:toner_id+' => 'Geef deze toner een naam (bv: kleur + type',
	'Class:TonerStock/Attribute:location_id' => 'Locatie',
	'Class:TonerStock/Attribute:location_id+' => 'Locatie van de toner',	
	'Class:TonerStock/Attribute:printer_id' => 'Printer',
	'Class:TonerStock/Attribute:printer_id+' => 'Naar welke printer is deze toner gegaan',
	'Class:TonerStock/Attribute:date_delivery' => 'Datum levering',
	'Class:TonerStock/Attribute:date_delivery+' => 'Datum levering door leverancier',	
	'Class:TonerStock/Attribute:date_out' => 'Datum uit',
	'Class:TonerStock/Attribute:date_out+' => 'Datum wanneer de toner naar een printer ging',	
	
	// Typology: Menu Config Management
	'Menu:SearchTonerStock' => 'Zoek tonerstock',
	'Menu:SearchTonerStock+' => 'Zoek tonerstock',
	'Menu:NewTonerStock' => 'Nieuwe tonerstock',
	'Menu:NewTonerStock+' => 'Registreer nieuwe toners',
	
	// Typology: lnkTonerToPrinter
	'Class:lnkTonerToPrinter/Attribute:toner_id' => 'Toner',
	'Class:lnkTonerToPrinter/Attribute:toner_id+' => 'Toners voor deze printer',
	'Class:lnkTonerToPrinter/Attribute:printer_id' => 'Printer',
	'Class:lnkTonerToPrinter/Attribute:printer_id+' => 'Welke printers gebruiken deze toner',	
));

 



?>
