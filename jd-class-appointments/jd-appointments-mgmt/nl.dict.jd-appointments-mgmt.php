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


Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
'Menu:AppointmentEnergyMgmt' => 'Afspraak - Groepsaankoop',
'Menu:AppointmentEnergyMgmt+' => '',
'Menu:NewAppointmentEnergy' => 'Nieuwe afspraak',
'Menu:NewAppointmentEnergy+' => '',
'Menu:SearchAppointmentEnergy' => 'Zoek afspraak',
'Menu:SearchAppointmentEnergy+' => '',
'Menu:AppointmentTourMgmt' => 'Afspraak - Rondleiding',
'Menu:AppointmentTourMgmt+' => '',
'Menu:NewAppointmentTour' => 'Nieuwe afspraak',
'Menu:NewAppointmentTour+' => '',
'Menu:SearchAppointmentTour' => 'Zoek afspraak',
'Menu:SearchAppointmentTour+' => '',
'Menu:AppointmentTaxMgmt' => 'Afspraak - Belastingen',
'Menu:AppointmentTaxMgmt+' => '',
'Menu:NewAppointmentTax' => 'Nieuwe afspraak',
'Menu:NewAppointmentTax+' => '',
'Menu:SearchAppointmentTax' => 'Zoek afspraak',
'Menu:SearchAppointmentTax+' => '',

));

//
// Class: Appointment
//

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:Appointment' => 'Afspraak',
	'Class:Appointment+' => '',
	'Class:Appointment/Attribute:finalclass' => 'Eindklasse',
	'Class:Appointment/Attribute:finalclass+' => '',	
	'Class:Appointment/Attribute:name' => 'Naam',
	'Class:Appointment/Attribute:name+' => '',
	'Class:Appointment/Attribute:org_id' => 'Organisatie',
	'Class:Appointment/Attribute:org_id+' => '',
	'Class:Appointment/Attribute:org_name' => 'Organisatie',
	'Class:Appointment/Attribute:org_name+' => '',	
	'Class:Appointment/Attribute:person_id' => 'Persoon',
	'Class:Appointment/Attribute:person_id+' => '',		
	'Class:Appointment/Attribute:start_date' => 'Start',
	'Class:Appointment/Attribute:start_date+' => 'Uur en datum van afspraak',		
	'Class:Appointment/Attribute:last_update' => 'Laatste wijziging',
	'Class:Appointment/Attribute:last_update+' => '',	
	'Class:Appointment/Attribute:comments' => 'Opmerkingen',
	'Class:Appointment/Attribute:comments+' => '',		
	'Class:Appointment/Attribute:status' => 'Oproepstatus',
	'Class:Appointment/Attribute:status+' => '',			
	'Class:Appointment/Attribute:status/Value:0' => 'In wachtrij',
	'Class:Appointment/Attribute:status/Value:0+' => '',	
	'Class:Appointment/Attribute:status/Value:1' => 'Opgeroepen',
	'Class:Appointment/Attribute:status/Value:1+' => '',	
	'Class:Appointment/Attribute:status/Value:2' => 'Aan loket',
	'Class:Appointment/Attribute:status/Value:2+' => '',		
	'Class:Appointment/Attribute:status/Value:3' => 'Afgerond',
	'Class:Appointment/Attribute:status/Value:3+' => '',	
	'Class:Appointment/Attribute:available' => 'Beschikbaarheid',
	'Class:Appointment/Attribute:available+' => '',			
	'Class:Appointment/Attribute:available/Value:0' => 'Beschikbaar',
	'Class:Appointment/Attribute:available/Value:0+' => '',		
	'Class:Appointment/Attribute:available/Value:1' => 'Gereserveerd',
	'Class:Appointment/Attribute:available/Value:1+' => '',		
	'Class:Appointment/Attribute:available/Value:2' => 'Gesloten',
	'Class:Appointment/Attribute:available/Value:2+' => '',
	'Class:Appointment/Attribute:booth' => 'Loketnummer',
	'Class:Appointment/Attribute:booth+' => '',	
	'Class:Appointment/Attribute:ip' => 'IP Adres',
	'Class:Appointment/Attribute:ip+' => '',			
	'Class:Appointment/Attribute:code' => 'Unieke code',
	'Class:Appointment/Attribute:code+' => '',		
));


//
// Class: AppointmentEnergy
//

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:AppointmentEnergy' => 'Afspraak - Groepsaankoop',
	'Class:AppointmentEnergy+' => '',
	
	
	'Appointment:moreinfo' => 'Meer info',
	'Appointment:baseinfo' => 'Algemene info',
	'Appointment:status' => 'Loketinformatie',
	'Appointment:details' => 'Inschrijvingsinformatie',	
));


//
// Class: AppointmentTour
//

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:AppointmentTour' => 'Afspraak - Rondleiding',
	'Class:AppointmentTour+' => '',
));


//
// Class: AppointmentTour
//

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:AppointmentTax' => 'Afspraak - Belastingen',
	'Class:AppointmentTax+' => '',
));