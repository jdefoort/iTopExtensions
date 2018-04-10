<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(


	// Typology: ToolType
	'Class:ToolType' => 'Type of tool',
	'Class:ToolType+' => 'What type of tool is this',
	'Class:ToolType/Attribute:name' => 'Type of tool',
	'Class:ToolType/Attribute:tools_list' => 'Tools per type',
	'Class:ToolType/Attribute:tools_list+' => 'Overview of tools of this type',
	
	// Typology: Purpose
	'Class:Purpose' => 'Used where',
	'Class:Purpose+' => 'Where do they use this most of the time',
	'Class:Purpose/Attribute:name' => 'Used where',
	'Class:Purpose/Attribute:tools_list' => 'Tools per usage location',
	'Class:Purpose/Attribute:tools_list+' => 'Overview of tools being used on this location/being kept by this car',
	
	
	// Dictionary entries go here
	'Class:Tools' => 'Tools',
	'Class:Tools+' => 'Tools such as powertools and machinery',
	'Class:Tools/Attribute:tooltype_id' => 'What type of tool is this',
	'Class:Tools/Attribute:tooltype_id+' => 'What type is this, example: jackhammer, powerdrill',
	
	'Class:Tools/Attribute:purpose_id' => 'Location/ maintask',
	'Class:Tools/Attribute:purpose_id+' => 'What is the default location/task of this tool',

	
	'Class:Tools/Attribute:buildyear' => 'Building year',
	'Class:Tools/Attribute:buildyear+' => 'In what year is this tool built',
	'Class:Tools/Attribute:intern_id' => 'Intern number',
	'Class:Tools/Attribute:intern_id+' => 'What is the following number we use in our organisation',
	'Class:Tools/Attribute:contact_id' => 'Responsible person',
	'Class:Tools/Attribute:contact_id+' => 'Who is responsible for this tool',

));

 



?>
