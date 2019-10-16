<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
        __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
        'jd-technicalrequest-readonlyprofile/',
        array(
                // Identification
                //
                'label' => 'Profile: add readonly profile for Technical Request',
                'category' => 'business',

                // Setup
                //
                'dependencies' => array(
                        'itop-config-mgmt/2.4.0',
                        'itop-request-mgmt-itil/2.4.0',
                        'itop-knownerror-mgmt/2.4.0',
						'jd-technicalrequest-mgmt/2.4.0'
                ),
                'mandatory' => false,
                'visible' => true,

                // Components
                //
                'datamodel' => array(
                        'model.jd-technicalrequest-readonlyprofile.php'
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