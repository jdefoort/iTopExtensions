<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
        __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
        'jd-menuhide/2.4.0',
        array(
                // Identification
                //
                'label' => 'Menuhide: Don\'t show the left menu-items which aren\'t modifiable for that user-profile',
                'category' => 'business',

                // Setup
                //
                'dependencies' => array(
                        'itop-config-mgmt/2.4.0',
                        'itop-service-mgmt/2.4.0',
                        // we are not using service-mgmt-provider, so we can't depend on it
						// 'itop-service-mgmt-provider/2.4.0',
                        'itop-change-mgmt-itil/2.4.0',
						'jd-rcxrequest-mgmt-itil/2.4.0',
						'jd-hrrequest-mgmt/2.4.0',
						'jd-hrcomplaint-mgmt/2.4.0',
						'jd-buildingrequest-mgmt/2.4.0'
                ),

                'mandatory' => false,
                'visible' => true,

                // Components
                //
                'datamodel' => array(
                        'model.jd-menuhide.php'
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
