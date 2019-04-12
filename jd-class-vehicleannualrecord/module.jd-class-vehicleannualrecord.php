<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'jd-class-vehicleannualrecord/2.5.190412',
	array(
		// Identification
		//
		'label' => 'Class: Vehicle annual record, a system to log annual numbers for each vehicle.',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-request-mgmt-itil/2.5.0' 
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.jd-class-vehicleannualrecord.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
