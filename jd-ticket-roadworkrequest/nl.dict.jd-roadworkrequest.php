<?php
// Copyright (C) 2010-2014 Combodo SARL
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

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Menu:RoadworkRequestManagement' => 'Werken',
	'Menu:RoadworkRequestManagement+' => 'Werken',
	'Menu:RoadworkRequestManagementProvider' => 'Helpdesk leverancier',
	'Menu:RoadworkRequestManagementProvider+' => 'Helpdesk leverancier',
	'Menu:RoadworkRequest:Provider' => 'Open tickets overgebracht naar leverancier',
	'Menu:RoadworkRequest:Provider+' => 'Open tickets overgebracht naar leverancier',
	'Menu:RoadworkRequest:Overview' => 'Overzicht',
	'Menu:RoadworkRequest:Overview+' => 'Werkenoverzicht',
	'Menu:NewRoadworkRequest' => 'Nieuw ticket',
	'Menu:NewRoadworkRequest+' => 'Maak een nieuw ticket aan',
	'Menu:SearchRoadworkRequests' => 'Zoek naar tickets',
	'Menu:SearchRoadworkRequests+' => 'Zoek naar tickets',
	'Menu:RoadworkRequest:Shortcuts' => 'Snelkoppelingen',
	'Menu:RoadworkRequest:Shortcuts+' => '',
	'Menu:RoadworkRequest:MyRequests' => 'Tickets toegewezen aan mij',
	'Menu:RoadworkRequest:MyRequests+' => 'Tickets toegewezen aan mij (als behandelaar)',
	'Menu:RoadworkRequest:MySupportRequests' => 'Tickets van mij',
	'Menu:RoadworkRequest:MySupportRequests+' => 'Tickets van mij',
	'Menu:RoadworkRequest:EscalatedRequests' => 'Dringende tickets',
	'Menu:RoadworkRequest:EscalatedRequests+' => 'Dringende tickets',
	'Menu:RoadworkRequest:OpenRequests' => 'Alle openstaande tickets',
	'Menu:RoadworkRequest:OpenRequests+' => 'Alle openstaande tickets',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Tickets toegewezen aan mij',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Tickets van de afgelopen 14 dagen (per type)',
	'UI-RequestManagementOverview-Last-14-days' => 'Tickets van de afgelopen 14 dagen (per dag)',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open tickets per status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open tickets per medewerker',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open tickets per type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open tickets per organisatie',
	'Class:RoadworkRequest:KnownErrorList' => 'Bekende fouten',
));

// Dictionnary conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: RoadworkRequest
//

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:RoadworkRequest' => 'Gebruikerstickets',
	'Class:RoadworkRequest+' => '',
	'Class:RoadworkRequest/Attribute:crab_address_id' => 'Crab-adres',
	'Class:RoadworkRequest/Attribute:crab_address_id+' => 'Crab-adres', 
	'Class:RoadworkRequest/Attribute:status' => 'Status',
	'Class:RoadworkRequest/Attribute:status+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:new' => 'Nieuw',
	'Class:RoadworkRequest/Attribute:status/Value:new+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:escalated_tto' => 'Geëscalleerd TTO',
	'Class:RoadworkRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:assigned' => 'Toegewezen',
	'Class:RoadworkRequest/Attribute:status/Value:assigned+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:escalated_ttr' => 'Geëscaleerd TTR',
	'Class:RoadworkRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:waiting_for_approval' => 'Wacht op goedkeuring',
	'Class:RoadworkRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:approved' => 'Goedgekeurd',
	'Class:RoadworkRequest/Attribute:status/Value:approved+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:rejected' => 'Afgewezen',
	'Class:RoadworkRequest/Attribute:status/Value:rejected+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:pending' => 'Wachtend',
	'Class:RoadworkRequest/Attribute:status/Value:pending+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:resolved' => 'Opgelost',
	'Class:RoadworkRequest/Attribute:status/Value:resolved+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:closed' => 'Gesloten',
	'Class:RoadworkRequest/Attribute:status/Value:closed+' => '',
	'Class:RoadworkRequest/Attribute:request_type' => 'Type verzoek',
	'Class:RoadworkRequest/Attribute:request_type+' => '',
	'Class:RoadworkRequest/Attribute:request_type/Value:service_request' => 'Vraag om hulp',
	'Class:RoadworkRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:RoadworkRequest/Attribute:impact' => 'Impact',
	'Class:RoadworkRequest/Attribute:impact+' => '',
	'Class:RoadworkRequest/Attribute:impact/Value:1' => 'Een afdeling',
	'Class:RoadworkRequest/Attribute:impact/Value:1+' => '',
	'Class:RoadworkRequest/Attribute:impact/Value:2' => 'Een dienst',
	'Class:RoadworkRequest/Attribute:impact/Value:2+' => '',
	'Class:RoadworkRequest/Attribute:impact/Value:3' => 'Een persoon',
	'Class:RoadworkRequest/Attribute:impact/Value:3+' => '',
	'Class:RoadworkRequest/Attribute:priority' => 'Prioriteit',
	'Class:RoadworkRequest/Attribute:priority+' => '',
	'Class:RoadworkRequest/Attribute:priority/Value:1' => 'kritiek',
	'Class:RoadworkRequest/Attribute:priority/Value:1+' => 'kritisch',
	'Class:RoadworkRequest/Attribute:priority/Value:2' => 'hoog',
	'Class:RoadworkRequest/Attribute:priority/Value:2+' => 'hoog',
	'Class:RoadworkRequest/Attribute:priority/Value:3' => 'gemiddeld',
	'Class:RoadworkRequest/Attribute:priority/Value:3+' => 'normaal',
	'Class:RoadworkRequest/Attribute:priority/Value:4' => 'laag',
	'Class:RoadworkRequest/Attribute:priority/Value:4+' => 'laag',
	'Class:RoadworkRequest/Attribute:urgency' => 'Urgentie',
	'Class:RoadworkRequest/Attribute:urgency+' => '',
	'Class:RoadworkRequest/Attribute:urgency/Value:1' => 'kritiek',
	'Class:RoadworkRequest/Attribute:urgency/Value:1+' => 'kritisch',
	'Class:RoadworkRequest/Attribute:urgency/Value:2' => 'hoog',
	'Class:RoadworkRequest/Attribute:urgency/Value:2+' => 'hoog',
	'Class:RoadworkRequest/Attribute:urgency/Value:3' => 'gemiddeld',
	'Class:RoadworkRequest/Attribute:urgency/Value:3+' => 'normaal',
	'Class:RoadworkRequest/Attribute:urgency/Value:4' => 'laag',
	'Class:RoadworkRequest/Attribute:urgency/Value:4+' => 'laag',
	'Class:RoadworkRequest/Attribute:origin' => 'Oorsprong',
	'Class:RoadworkRequest/Attribute:origin+' => '',
	'Class:RoadworkRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:RoadworkRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:RoadworkRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:RoadworkRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:RoadworkRequest/Attribute:origin/Value:phone' => 'telefoon',
	'Class:RoadworkRequest/Attribute:origin/Value:phone+' => 'telefoon',
	'Class:RoadworkRequest/Attribute:origin/Value:portal' => 'portaal',
	'Class:RoadworkRequest/Attribute:origin/Value:portal+' => 'portaal',
	'Class:RoadworkRequest/Attribute:origin/Value:in_person' => 'in persoon',
    'Class:RoadworkRequest/Attribute:origin/Value:in_person+' => 'in persoon',
	'Class:RoadworkRequest/Attribute:approver_id' => 'Goedkeurder',
	'Class:RoadworkRequest/Attribute:approver_id+' => '',
	'Class:RoadworkRequest/Attribute:approver_email' => 'Goedkeurder Email',
	'Class:RoadworkRequest/Attribute:approver_email+' => '',
	'Class:RoadworkRequest/Attribute:service_id' => 'Dienst',
	'Class:RoadworkRequest/Attribute:service_id+' => '',
	'Class:RoadworkRequest/Attribute:service_name' => 'Dienst naam',
	'Class:RoadworkRequest/Attribute:service_name+' => '',
	'Class:RoadworkRequest/Attribute:servicesubcategory_id' => 'Dienst subcategorie',
	'Class:RoadworkRequest/Attribute:servicesubcategory_id+' => '',
	'Class:RoadworkRequest/Attribute:servicesubcategory_name' => 'Dienst subcategorie naam',
	'Class:RoadworkRequest/Attribute:servicesubcategory_name+' => '',
	'Class:RoadworkRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:RoadworkRequest/Attribute:escalation_flag+' => '',
	'Class:RoadworkRequest/Attribute:escalation_flag/Value:no' => 'Nee',
	'Class:RoadworkRequest/Attribute:escalation_flag/Value:no+' => 'Nee',
	'Class:RoadworkRequest/Attribute:escalation_flag/Value:yes' => 'Ja',
	'Class:RoadworkRequest/Attribute:escalation_flag/Value:yes+' => 'Ja',
	'Class:RoadworkRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:RoadworkRequest/Attribute:escalation_reason+' => '',
	'Class:RoadworkRequest/Attribute:assignment_date' => 'Datum toegewezen',
	'Class:RoadworkRequest/Attribute:assignment_date+' => '',
	'Class:RoadworkRequest/Attribute:resolution_date' => 'Datum opgelost',
	'Class:RoadworkRequest/Attribute:resolution_date+' => '',
	'Class:RoadworkRequest/Attribute:last_pending_date' => 'Laatste wachtend datum',
	'Class:RoadworkRequest/Attribute:last_pending_date+' => '',
	'Class:RoadworkRequest/Attribute:cumulatedpending' => 'samengeteld wachtend',
	'Class:RoadworkRequest/Attribute:cumulatedpending+' => '',
	'Class:RoadworkRequest/Attribute:tto' => 'TTO',
	'Class:RoadworkRequest/Attribute:tto+' => '',
	'Class:RoadworkRequest/Attribute:ttr' => 'TTR',
	'Class:RoadworkRequest/Attribute:ttr+' => '',
	'Class:RoadworkRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:RoadworkRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:RoadworkRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:RoadworkRequest/Attribute:sla_tto_passed+' => '',
	'Class:RoadworkRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:RoadworkRequest/Attribute:sla_tto_over+' => '',
	'Class:RoadworkRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:RoadworkRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:RoadworkRequest/Attribute:sla_ttr_passed' => 'SLA ttr gepasseerd',
	'Class:RoadworkRequest/Attribute:sla_ttr_passed+' => '',
	'Class:RoadworkRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:RoadworkRequest/Attribute:sla_ttr_over+' => '',
	'Class:RoadworkRequest/Attribute:time_spent' => 'Resolutie vertraging',
	'Class:RoadworkRequest/Attribute:time_spent+' => '',
	'Class:RoadworkRequest/Attribute:resolution_code' => 'Resolutie code',
	'Class:RoadworkRequest/Attribute:resolution_code+' => '',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:assistance' => 'assistentie',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:assistance+' => 'assistentie',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:bug fixed' => 'bug opgelost',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug ogelost',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware gerepareerd',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware gerepareerd',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:other' => 'andere',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:other+' => 'andere',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:system update' => 'systeem update',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:system update+' => 'systeem update',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:RoadworkRequest/Attribute:solution' => 'Oplossing',
	'Class:RoadworkRequest/Attribute:solution+' => '',
	'Class:RoadworkRequest/Attribute:pending_reason' => 'Reden waarom het in afwachting staat',
	'Class:RoadworkRequest/Attribute:pending_reason+' => '',
	'Class:RoadworkRequest/Attribute:parent_request_id' => 'Hoofdticket',
	'Class:RoadworkRequest/Attribute:parent_request_id+' => '',
	'Class:RoadworkRequest/Attribute:parent_incident_id' => 'Hoofdincident',
	'Class:RoadworkRequest/Attribute:parent_incident_id+' => '',
	'Class:RoadworkRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:RoadworkRequest/Attribute:parent_request_ref+' => '',
	'Class:RoadworkRequest/Attribute:parent_problem_id' => 'Hoofdprobleem',
	'Class:RoadworkRequest/Attribute:parent_problem_id+' => '',
	'Class:RoadworkRequest/Attribute:parent_problem_ref' => 'Ref probleem',
	'Class:RoadworkRequest/Attribute:parent_problem_ref+' => '',
	'Class:RoadworkRequest/Attribute:parent_change_id' => 'Hoofdchange',
	'Class:RoadworkRequest/Attribute:parent_change_id+' => '',
	'Class:RoadworkRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:RoadworkRequest/Attribute:parent_change_ref+' => '',
	'Class:RoadworkRequest/Attribute:related_request_list' => 'Sub Tickets',
	'Class:RoadworkRequest/Attribute:related_request_list+' => 'Alle tickets die gelinkt zijn aan dit hoofdticket',
	'Class:RoadworkRequest/Attribute:public_log' => 'Publiek commentaar',
	'Class:RoadworkRequest/Attribute:public_log+' => '',
	'Class:RoadworkRequest/Attribute:private_log' => 'Privé commentaar',
	'Class:RoadworkRequest/Attribute:private_log+' => '',
	'Class:RoadworkRequest/Attribute:user_satisfaction' => 'Gebruikerstevredenheid',
	'Class:RoadworkRequest/Attribute:user_satisfaction+' => '',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:1' => 'Zeer tevreden',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:1+' => 'Zeer tevreden',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:2' => 'Tamelijk tevreden',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:2+' => 'Takelijk tevreden',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:3' => 'Tamelijk ontevreden',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:3+' => 'Tamelijk ontevreden',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:4' => 'Zeer ontevreden',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:4+' => 'Zeer ontevreden',
	'Class:RoadworkRequest/Attribute:user_comment' => 'Gebruikersreactie',
	'Class:RoadworkRequest/Attribute:user_comment+' => '',
	'Class:RoadworkRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:RoadworkRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:RoadworkRequest/Stimulus:ev_assign' => 'Wijs toe',
	'Class:RoadworkRequest/Stimulus:ev_assign+' => '',
	'Class:RoadworkRequest/Stimulus:ev_reassign' => 'Wijs opnieuw toe',
	'Class:RoadworkRequest/Stimulus:ev_reassign+' => '',
	'Class:RoadworkRequest/Stimulus:ev_approve' => 'Keur goed',
	'Class:RoadworkRequest/Stimulus:ev_approve+' => '',
	'Class:RoadworkRequest/Stimulus:ev_reject' => 'Keur af',
	'Class:RoadworkRequest/Stimulus:ev_reject+' => '',
	'Class:RoadworkRequest/Stimulus:ev_pending' => 'In afwachting',
	'Class:RoadworkRequest/Stimulus:ev_pending+' => '',
	'Class:RoadworkRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:RoadworkRequest/Stimulus:ev_timeout+' => '',
	'Class:RoadworkRequest/Stimulus:ev_autoresolve' => 'Automatisch oplossen',
	'Class:RoadworkRequest/Stimulus:ev_autoresolve+' => '',
	'Class:RoadworkRequest/Stimulus:ev_autoclose' => 'Automatisch sluiten',
	'Class:RoadworkRequest/Stimulus:ev_autoclose+' => '',
	'Class:RoadworkRequest/Stimulus:ev_resolve' => 'Markeren als opgelost',
	'Class:RoadworkRequest/Stimulus:ev_resolve+' => '',
	'Class:RoadworkRequest/Stimulus:ev_close' => 'Sluit dit verzoek',
	'Class:RoadworkRequest/Stimulus:ev_close+' => '',
	'Class:RoadworkRequest/Stimulus:ev_reopen' => 'Her-open',
	'Class:RoadworkRequest/Stimulus:ev_reopen+' => '',
	'Class:RoadworkRequest/Stimulus:ev_wait_for_approval' => 'Wacht op goedkeuring',
	'Class:RoadworkRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:RoadworkRequest/Error:CannotAssignParentRequestIdToSelf' => 'Kan niet toewijzen aan hoofdverzoek en aan het verzoek zelf',
	'Class:RoadworkRequest/Attribute:reminder' => 'Herinnering',
	'Class:RoadworkRequest/Attribute:reminder+' => 'Herinnering',	

	'Class:RoadworkRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:RoadworkRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));
