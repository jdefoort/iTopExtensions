<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(


	// Typology: ToolType
	'Class:ToolType' => 'Type gereedschap',
	'Class:ToolType+' => 'Welke soort van gereedschap is dit',
	'Class:ToolType/Attribute:name' => 'Type machine',
	'Class:ToolType/Attribute:tools_list' => 'Gereedschap per type',
	'Class:ToolType/Attribute:tools_list+' => 'Overzicht van alle gereedschap per type',
	
	// Typology: Purpose
	'Class:Purpose' => 'Standplaats / Taak',
	'Class:Purpose+' => 'Waar of door wie wordt dit gereedschap meestal gebruikt',
	'Class:Purpose/Attribute:name' => 'Standplaats / Taak',
	'Class:Purpose/Attribute:tools_list' => 'Gereedschap per standplaats / taak',
	'Class:Purpose/Attribute:tools_list+' => 'Overzicht van alle gereedschap per standplaats / taak',
	
	
	// Dictionary entries go here
	'Class:Tools' => 'Gereedschap',
	'Class:Tools+' => 'Gereedschap zoals boormachines en elektrisch gereedschap',
	'Class:Tools/Attribute:tooltype_id' => 'Type arbeidsmiddel',
	'Class:Tools/Attribute:tooltype_id+' => 'Welk type gereedschap is dit',
	
	'Class:Tools/Attribute:purpose_id' => 'Standplaats / Taak',
	'Class:Tools/Attribute:purpose_id+' => 'Wat is de standaard standplaats / taak van dit gereedschap',

	'Class:Tools/Attribute:buildyear' => 'Bouwjaar',
	'Class:Tools/Attribute:buildyear+' => 'Uit welk jaar komt dit gereedschap',
	'Class:Tools/Attribute:intern_id' => 'Intern volgnummer',
	'Class:Tools/Attribute:intern_id+' => 'Wat is het interne volgnummer',
	'Class:Tools/Attribute:contact_id' => 'Verantwoordelijke',
	'Class:Tools/Attribute:contact_id+' => 'Wie is verantwoordelijk voor dit gereedschap',
	'Class:Tools/Attribute:team_id' => 'Dienst',
	'Class:Tools/Attribute:team_id+' => 'Welke dienst is hiervoor verantwoordelijk',

));

 



?>
