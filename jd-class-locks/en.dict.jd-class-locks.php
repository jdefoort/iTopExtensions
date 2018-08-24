<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(


	// Typology: LockType
	'Class:LockType' => 'Type of Lock',
	'Class:LockType+' => 'What type of Lock is this',
	'Class:LockType/Attribute:name' => 'Type of Lock',
	'Class:LockType/Attribute:Locks_list' => 'Locks per type',
	'Class:LockType/Attribute:Locks_list+' => 'Overview of Locks of this type',
	
	
	// Dictionary entries go here
	'Locks/otherinfo' => 'General information',
	'Locks/baseinfo' => 'Other information',
	'Locks/moreinfo' => 'More information',
	'Locks/date' => 'Date',
		
	'Class:Locks' => 'Locks',
	'Class:Locks+' => 'Locks such as powerLocks and machinery',
	'Class:Locks/Attribute:Locktype_id' => 'What type of Lock is this',
	'Class:Locks/Attribute:Locktype_id+' => 'What type is this, example: jackhammer, powerdrill',
	
	'Class:Locks/Attribute:purpose_id' => 'Location/ maintask',
	'Class:Locks/Attribute:purpose_id+' => 'What is the default location/task of this Lock',

	
	'Class:Locks/Attribute:buildyear' => 'Building year',
	'Class:Locks/Attribute:buildyear+' => 'In what year is this Lock built',
	'Class:Locks/Attribute:intern_id' => 'Intern number',
	'Class:Locks/Attribute:intern_id+' => 'What is the following number we use in our organisation',
	'Class:Locks/Attribute:contact_id' => 'Responsible person',
	'Class:Locks/Attribute:contact_id+' => 'Who is responsible for this Lock',
	'Class:Locks/Attribute:team_id' => 'Team',
	'Class:Locks/Attribute:team_id+' => 'Which team is responsible',

));

 



?>
