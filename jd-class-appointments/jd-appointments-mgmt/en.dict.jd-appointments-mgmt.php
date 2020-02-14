<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>


/**
 * Localized data
 *
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Dictionnary conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


Dict::Add('EN US', 'English', 'English', array(
'Menu:AppointmentEnergyMgmt' => 'Appointment - Energy',
'Menu:AppointmentEnergyMgmt+' => '',
'Menu:NewAppointmentEnergy' => 'New appointment',
'Menu:NewAppointmentEnergy+' => '',
'Menu:SearchAppointmentEnergy' => 'Search appointment',
'Menu:SearchAppointmentEnergy+' => '',
'Menu:AppointmentTourMgmt' => 'Appointment - Tour',
'Menu:AppointmentTourMgmt+' => '',
'Menu:NewAppointmentTour' => 'New appointment',
'Menu:NewAppointmentTour+' => '',
'Menu:SearchAppointmentTour' => 'Search appointment',
'Menu:SearchAppointmentTour+' => '',


));

//
// Class: Appointment
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Appointment' => 'Appointment',
	'Class:Appointment+' => '',
	'Class:Appointment/Attribute:finalclass' => 'Final class',
	'Class:Appointment/Attribute:finalclass+' => '',	
	'Class:Appointment/Attribute:name' => 'Name',
	'Class:Appointment/Attribute:name+' => '',
	'Class:Appointment/Attribute:org_id' => 'Organization',
	'Class:Appointment/Attribute:org_id+' => '',
	'Class:Appointment/Attribute:org_name' => 'Organization',
	'Class:Appointment/Attribute:org_name+' => '',	
	'Class:Appointment/Attribute:person_id' => 'Person',
	'Class:Appointment/Attribute:person_id+' => '',		
	'Class:Appointment/Attribute:start_date' => 'Start',
	'Class:Appointment/Attribute:start_date+' => 'Date and hour of appointment',		
	'Class:Appointment/Attribute:last_update' => 'Last update',
	'Class:Appointment/Attribute:last_update+' => '',	
	'Class:Appointment/Attribute:comments' => 'Comments',
	'Class:Appointment/Attribute:comments+' => '',		
	'Class:Appointment/Attribute:status' => 'Status',
	'Class:Appointment/Attribute:status+' => '',			
	'Class:Appointment/Attribute:status/Value:0' => 'In queue',
	'Class:Appointment/Attribute:status/Value:0+' => '',	
	'Class:Appointment/Attribute:status/Value:1' => 'Called',
	'Class:Appointment/Attribute:status/Value:1+' => '',	
	'Class:Appointment/Attribute:status/Value:2' => 'At booth',
	'Class:Appointment/Attribute:status/Value:2+' => '',		
	'Class:Appointment/Attribute:status/Value:3' => 'Finished',
	'Class:Appointment/Attribute:status/Value:3+' => '',	
	'Class:Appointment/Attribute:available' => 'Available',
	'Class:Appointment/Attribute:available+' => '',			
	'Class:Appointment/Attribute:available/Value:0' => 'Available',
	'Class:Appointment/Attribute:available/Value:0+' => '',		
	'Class:Appointment/Attribute:available/Value:1' => 'Reserved',
	'Class:Appointment/Attribute:available/Value:1+' => '',		
	'Class:Appointment/Attribute:available/Value:2' => 'Locked',
	'Class:Appointment/Attribute:available/Value:2+' => '',
	'Class:Appointment/Attribute:booth' => 'Boothnumber',
	'Class:Appointment/Attribute:booth+' => '',	
	'Class:Appointment/Attribute:ip' => 'IP Address',
	'Class:Appointment/Attribute:ip+' => '',			
	'Class:Appointment/Attribute:code' => 'Unique code',
	'Class:Appointment/Attribute:code+' => '',		
));


//
// Class: AppointmentEnergy
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:AppointmentEnergy' => 'Appointment - Energy',
	'Class:AppointmentEnergy+' => '',
	
	'Appointment:moreinfo' => 'More info',
	'Appointment:baseinfo' => 'Basic info',
	'Appointment:status' => 'Booth information',
	'Appointment:details' => 'Subscriber information',	
));

//
// Class: AppointmentTour
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:AppointmentTour' => 'Appointment - Tour',
	'Class:AppointmentTour+' => '',
));
