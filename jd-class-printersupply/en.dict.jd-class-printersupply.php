<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	
	// Dictionary entries go here
	'PrinterSupplyStock:dates' => 'Dates',
	'PrinterSupplyStock:in' => 'In',
	'PrinterSupplyStock:out' => 'Out',

	// Typology: Printer
	'Class:Printer/Attribute:printersupplies_list' => 'Supplies',
	'Class:Printer/Attribute:printersupplies_list+' => 'Supplies for this printer',
	
	// Typology: PrinterSupply
	'Class:PrinterSupply' => 'Supply',
	'Class:PrinterSupply+' => 'Supply',
	'Class:PrinterSupply/Attribute:name' => 'Name',
	'Class:PrinterSupply/Attribute:name+' => 'Give this supply a name (e.g.: Black HP A30 / IsoTech CLA776 or Drum Brother DR-2100)',
	'Class:PrinterSupply/Attribute:printers_list' => 'Printers',
	'Class:PrinterSupply/Attribute:printers_list+' => 'Which printers use this',

	// Typology: PrinterSupplyStock
	'Class:PrinterSupplyStock' => 'PrinterSupply',
	'Class:PrinterSupplyStock+' => 'PrinterSupply',
	'Class:PrinterSupplyStock/Attribute:printer_supply_id' => 'Supply',
	'Class:PrinterSupplyStock/Attribute:printer_supply_id+' => 'Give this supply a name (e.g.: Black HP A30 / IsoTech CLA776 or Drum Brother DR-2100)',
	'Class:PrinterSupplyStock/Attribute:location_id' => 'Location',
	'Class:PrinterSupplyStock/Attribute:location_id+' => 'Location of supply',	
	'Class:PrinterSupplyStock/Attribute:printer_id' => 'Printer',
	'Class:PrinterSupplyStock/Attribute:printer_id+' => 'To which printer did this go',
	'Class:PrinterSupplyStock/Attribute:date_delivery' => 'Date delivery',
	'Class:PrinterSupplyStock/Attribute:date_delivery+' => 'Date delivery',	
	'Class:PrinterSupplyStock/Attribute:date_out' => 'Date out',
	'Class:PrinterSupplyStock/Attribute:date_out+' => 'Date out',	
	
	// Typology: Menu Config Management
	'Menu:SearchPrinterSupplyStock' => 'Search printer supplies',
	'Menu:SearchPrinterSupplyStock+' => 'Search printer supplies',
	'Menu:NewPrinterSupplyStock' => 'New printer supply',
	'Menu:NewPrinterSupplyStock+' => 'Register new printer supply',
	
	// Typology: lnkPrinterSupplyToPrinter
	'Class:lnkPrinterSupplyToPrinter' => 'Link PrinterSupply / Printer',
	'Class:lnkPrinterSupplyToPrinter/Attribute:printer_supply_id' => 'Supplies',
	'Class:lnkPrinterSupplyToPrinter/Attribute:printer_supply_id+' => 'Supplies for this printer',
	'Class:lnkPrinterSupplyToPrinter/Attribute:printer_id' => 'Printer',
	'Class:lnkPrinterSupplyToPrinter/Attribute:printer_id+' => 'Which printers use this',	
	
));

