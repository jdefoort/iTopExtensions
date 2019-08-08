<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	
	// Dictionary entries go here
	'TonerStock:dates' => 'Dates',
	'TonerStock:baseinfo' => 'General information',

	// Typology: Printer
	'Class:Printer/Attribute:toners_list' => 'Toners',
	'Class:Printer/Attribute:toners_list+' => 'Toners for this printer',

	
	// Typology: Toner
	'Class:Toner' => 'Toner',
	'Class:Toner+' => 'Toner',
	'Class:Toner/Attribute:name' => 'Name',
	'Class:Toner/Attribute:name+' => 'Give this toner a name (e.g.: color and original name)',
	'Class:Toner/Attribute:printers_list' => 'Printers',
	'Class:Toner/Attribute:printers_list+' => 'Which printers use this kind of toner',

	// Typology: TonerStock
	'Class:TonerStock' => 'TonerStock',
	'Class:TonerStock+' => 'TonerStock',
	'Class:TonerStock/Attribute:toner_id' => 'Toner',
	'Class:TonerStock/Attribute:toner_id+' => 'Give this toner a name (e.g.: color and original name)',
	'Class:TonerStock/Attribute:location_id' => 'Location',
	'Class:TonerStock/Attribute:location_id+' => 'Location of toner',	
	'Class:TonerStock/Attribute:printer_id' => 'Printer',
	'Class:TonerStock/Attribute:printer_id+' => 'To which printer did the toner go',
	'Class:TonerStock/Attribute:date_delivery' => 'Date delivery',
	'Class:TonerStock/Attribute:date_delivery+' => 'Date delivery',	
	'Class:TonerStock/Attribute:date_out' => 'Date out',
	'Class:TonerStock/Attribute:date_out+' => 'Date out',	
	
	// Typology: Menu Config Management
	'Menu:SearchTonerStock' => 'Search toner stock',
	'Menu:SearchTonerStock+' => 'Search toner stock',
	'Menu:NewTonerStock' => 'New toner stock',
	'Menu:NewTonerStock+' => 'Register new toners',
	
	// Typology: lnkTonerToPrinter
	'Class:lnkTonerToPrinter/Attribute:toner_id' => 'Toner',
	'Class:lnkTonerToPrinter/Attribute:toner_id+' => 'Toners for this printer',
	'Class:lnkTonerToPrinter/Attribute:printer_id' => 'Printer',
	'Class:lnkTonerToPrinter/Attribute:printer_id+' => 'Which printers use this kind of toner',	
	
));

 



?>
