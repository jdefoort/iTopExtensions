<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
        __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
        'jd-hrcomplaint/2.6.0',
        array(
                // Identification
                //
                'label' => 'Class: HR Complaint (ITIL) - Add complaintform',
                'category' => 'business',

                // Setup
                //
                'dependencies' => array(
                        'itop-config-mgmt/2.4.0',
                        'itop-request-mgmt-itil/2.4.0',
						'itop-tickets/2.4.0',
						'jd-class-department/2.5.0',
                ),
                'mandatory' => false,
                'visible' => true,

                // Components
                //
                'datamodel' => array(
                        'model.jd-hrcomplaint.php'
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
