<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
        __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
        'jd-camrequest-profiles/',
        array(
                // Identification
                //
                'label' => 'Profile: add Camera user as profile',
                'category' => 'business',

                // Setup
                //
                'dependencies' => array(
                        'itop-config-mgmt/2.6.0',
                        'itop-request-mgmt-itil/2.6.0',
                        'itop-knownerror-mgmt/2.6.0',
						'jd-camrequest-mgmt-itil/2.6.0'
                ),
                'mandatory' => false,
                'visible' => true,

                // Components
                //
                'datamodel' => array(
                        'model.jd-camrequest-profiles.php'
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