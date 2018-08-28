<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	
	// Dictionary entries go here
	'Locks/otherinfo' => 'Andere informatie',
	'Locks/baseinfo' => 'Basis informatie',


	// Typology: LockType
	'Class:LockType' => 'Type sleutel',
	'Class:LockType+' => 'Welke type sleutel is het',
	'Class:LockType/Attribute:name' => 'Type sleutel',
	'Class:LockType/Attribute:lock_list' => 'Sleutel per type',
	'Class:LockType/Attribute:lock_list+' => 'Overzicht van de sleutels volgens type',
	

		
	'Class:Lock' => 'Sleutel',
	'Class:Lock+' => 'Sleutels zoals fysieke sleutels en badges',
	'Class:Lock/Attribute:locktype_id' => 'Type sleutel',
	'Class:Lock/Attribute:locktype_id+' => 'Welke type is dit: voorbeeld badge, fysieke sleutel',
	'Class:Lock/Attribute:locksort' => 'Sleutelsoort',
	'Class:Lock/Attribute:locksort+' => 'Analoog (fysiek) of digitaal (badge)',
	


));

 



?>
