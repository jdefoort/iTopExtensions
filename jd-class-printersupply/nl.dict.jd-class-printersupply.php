<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	
	// Dictionary entries go here
	'PrinterSupplyStock:dates' => 'Datums',
	'PrinterSupplyStock:in' => 'In',
	'PrinterSupplyStock:out' => 'Uit',

	// Typology: Printer
	'Class:Printer/Attribute:printersupplies_list' => 'Benodigdheden',
	'Class:Printer/Attribute:printersupplies_list+' => 'Benodigdheden voor deze printer',
	
	// Typology: PrinterSupply
	'Class:PrinterSupply' => 'Printerbenodigdheden',
	'Class:PrinterSupply+' => '',
	'Class:PrinterSupply/Attribute:name' => 'Naam',
	'Class:PrinterSupply/Attribute:name+' => 'Geef deze voorraad een naam (bv: Zwart HP A30 / IsoTech CLA776 of Drum Brother DR-2100)',
	'Class:PrinterSupply/Attribute:printers_list' => 'Printers',
	'Class:PrinterSupply/Attribute:printers_list+' => 'Welke printers gebruiken dit',

	// Typology: PrinterSupplyStock
	'Class:PrinterSupplyStock' => 'Printerbenodigdheid',
	'Class:PrinterSupplyStock+' => 'Printerbenodigdheid',
	'Class:PrinterSupplyStock/Attribute:printer_supply_id' => 'Printerbenodigdheid',
	'Class:PrinterSupplyStock/Attribute:printer_supply_id+' => 'Geef deze benodigdheid een naam (bv: Zwart HP A30 / IsoTech CLA776 of Drum Brother DR-2100)',
	'Class:PrinterSupplyStock/Attribute:location_id' => 'Locatie',
	'Class:PrinterSupplyStock/Attribute:location_id+' => 'Locatie van de benodigdheid',	
	'Class:PrinterSupplyStock/Attribute:printer_id' => 'Printer',
	'Class:PrinterSupplyStock/Attribute:printer_id+' => 'Voor welke printer is deze benodigdheid gebruikt',
	'Class:PrinterSupplyStock/Attribute:date_delivery' => 'Datum levering',
	'Class:PrinterSupplyStock/Attribute:date_delivery+' => 'Datum levering door leverancier',	
	'Class:PrinterSupplyStock/Attribute:date_out' => 'Datum uit',
	'Class:PrinterSupplyStock/Attribute:date_out+' => 'Datum waarop de benodigdheid gebruikt is voor een printer',	
	
	// Typology: Menu Config Management
	'Menu:SearchPrinterSupplyStock' => 'Zoek printerbenodigdheden',
	'Menu:SearchPrinterSupplyStock+' => 'Zoek printerbenodigdheden',
	'Menu:NewPrinterSupplyStock' => 'Nieuwe printerbenodigdheid',
	'Menu:NewPrinterSupplyStock+' => 'Registreer nieuwe printerbenodigdheid',
	
	// Typology: lnkPrinterSupplyToPrinter
	'Class:lnkPrinterSupplyToPrinter' => 'Link Printerbenodigdheid / Printer',
	'Class:lnkPrinterSupplyToPrinter/Attribute:printer_supply_id' => 'Benodigdheden',
	'Class:lnkPrinterSupplyToPrinter/Attribute:printer_supply_id+' => 'Benodigdheden voor deze printer',
	'Class:lnkPrinterSupplyToPrinter/Attribute:printer_id' => 'Printer',
	'Class:lnkPrinterSupplyToPrinter/Attribute:printer_id+' => 'Welke printers gebruiken dit',

));

