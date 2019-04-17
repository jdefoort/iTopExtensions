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

Dict::Add('EN US', 'English', 'English', array(
	'Menu:ComRequestManagement' => 'Communication',
	'Menu:ComRequestManagement+' => 'Communication',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:ComRequest:Provider' => 'Open request transfered to provider',
	'Menu:ComRequest:Provider+' => 'Open request transfered to provider',
	'Menu:ComRequest:Overview' => 'Communication Overview',
	'Menu:ComRequest:Overview+' => 'Communication Overview',
	'Menu:NewComRequest' => 'New Communication Request',
	'Menu:NewComRequest+' => 'Create a new communication request ticket',
	'Menu:SearchComRequests' => 'Search for communication requests',
	'Menu:SearchComRequests+' => 'Search for communication request tickets',
	'Menu:ComRequest:Shortcuts' => 'Shortcuts',
	'Menu:ComRequest:Shortcuts+' => 'Shortcuts',
	'Menu:ComRequest:Participation' => 'Participation',
	'Menu:ComRequest:Participation+' => 'Participation',
	'Menu:ComRequest:MyRequests' => 'Communication Requests assigned to me',
	'Menu:ComRequest:MyRequests+' => 'Communication Requests assigned to me (as Agent)',
	'Menu:ComRequest:MySupportRequests' => "My support calls",
	'Menu:ComRequest:MySupportRequests+' => "My support calls",
	'Menu:ComRequest:EscalatedRequests' => 'Hot communication Requests',
	'Menu:ComRequest:EscalatedRequests+' => 'Hot communication Requests',
	'Menu:ComRequest:OpenRequests' => 'All open communication requests',
	'Menu:ComRequest:OpenRequests+' => 'All open communication requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Rcx Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer',
	'Class:ComRequest:KnownErrorList' => 'Known Errors',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: ComRequest
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ComRequest' => 'Communication Request',
	'Class:ComRequest+' => '',
	'Class:ComRequest/Attribute:status' => 'Status',
	'Class:ComRequest/Attribute:status+' => '',
	'Class:ComRequest/Attribute:status/Value:new' => 'New',
	'Class:ComRequest/Attribute:status/Value:new+' => '',
	'Class:ComRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:ComRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:ComRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:ComRequest/Attribute:status/Value:assigned+' => '',
	'Class:ComRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:ComRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:ComRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:ComRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:ComRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:ComRequest/Attribute:status/Value:approved+' => '',
	'Class:ComRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:ComRequest/Attribute:status/Value:rejected+' => '',
	'Class:ComRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:ComRequest/Attribute:status/Value:pending+' => '',
	'Class:ComRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:ComRequest/Attribute:status/Value:resolved+' => '',
	'Class:ComRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:ComRequest/Attribute:status/Value:closed+' => '',
	'Class:ComRequest/Attribute:request_type' => 'Request Type',
	'Class:ComRequest/Attribute:request_type+' => '',
	'Class:ComRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:ComRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:ComRequest/Attribute:impact' => 'Impact',
	'Class:ComRequest/Attribute:impact+' => '',
	'Class:ComRequest/Attribute:impact/Value:1' => 'A department',
	'Class:ComRequest/Attribute:impact/Value:1+' => '',
	'Class:ComRequest/Attribute:impact/Value:2' => 'A service',
	'Class:ComRequest/Attribute:impact/Value:2+' => '',
	'Class:ComRequest/Attribute:impact/Value:3' => 'A person',
	'Class:ComRequest/Attribute:impact/Value:3+' => '',
	'Class:ComRequest/Attribute:priority' => 'Priority',
	'Class:ComRequest/Attribute:priority+' => '',
	'Class:ComRequest/Attribute:priority/Value:1' => 'critical',
	'Class:ComRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:ComRequest/Attribute:priority/Value:2' => 'high',
	'Class:ComRequest/Attribute:priority/Value:2+' => 'high',
	'Class:ComRequest/Attribute:priority/Value:3' => 'medium',
	'Class:ComRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:ComRequest/Attribute:priority/Value:4' => 'low',
	'Class:ComRequest/Attribute:priority/Value:4+' => 'low',
	'Class:ComRequest/Attribute:urgency' => 'Urgency',
	'Class:ComRequest/Attribute:urgency+' => '',
	'Class:ComRequest/Attribute:urgency/Value:1' => 'critical',
	'Class:ComRequest/Attribute:urgency/Value:1+' => 'critical',
	'Class:ComRequest/Attribute:urgency/Value:2' => 'high',
	'Class:ComRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:ComRequest/Attribute:urgency/Value:3' => 'medium',
	'Class:ComRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:ComRequest/Attribute:urgency/Value:4' => 'low',
	'Class:ComRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:ComRequest/Attribute:origin' => 'Origin',
	'Class:ComRequest/Attribute:origin+' => '',
	'Class:ComRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:ComRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:ComRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:ComRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:ComRequest/Attribute:origin/Value:phone' => 'phone',
	'Class:ComRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:ComRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:ComRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:ComRequest/Attribute:approver_id' => 'Approver',
	'Class:ComRequest/Attribute:approver_id+' => '',
	'Class:ComRequest/Attribute:approver_email' => 'Approver Email',
	'Class:ComRequest/Attribute:approver_email+' => '',
	'Class:ComRequest/Attribute:service_id' => 'Service',
	'Class:ComRequest/Attribute:service_id+' => '',
	'Class:ComRequest/Attribute:service_name' => 'Service name',
	'Class:ComRequest/Attribute:service_name+' => '',
	'Class:ComRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:ComRequest/Attribute:servicesubcategory_id+' => '',
	'Class:ComRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:ComRequest/Attribute:servicesubcategory_name+' => '',
	'Class:ComRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:ComRequest/Attribute:escalation_flag+' => '',
	'Class:ComRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:ComRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:ComRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:ComRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:ComRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:ComRequest/Attribute:escalation_reason+' => '',
	'Class:ComRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:ComRequest/Attribute:assignment_date+' => '',
	'Class:ComRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:ComRequest/Attribute:resolution_date+' => '',
	'Class:ComRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:ComRequest/Attribute:last_pending_date+' => '',
	'Class:ComRequest/Attribute:cumulatedpending' => 'cumulatedpending',
	'Class:ComRequest/Attribute:cumulatedpending+' => '',
	'Class:ComRequest/Attribute:tto' => 'TTO',
	'Class:ComRequest/Attribute:tto+' => '',
	'Class:ComRequest/Attribute:ttr' => 'TTR',
	'Class:ComRequest/Attribute:ttr+' => '',
	'Class:ComRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:ComRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:ComRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:ComRequest/Attribute:sla_tto_passed+' => '',
	'Class:ComRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:ComRequest/Attribute:sla_tto_over+' => '',
	'Class:ComRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:ComRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:ComRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:ComRequest/Attribute:sla_ttr_passed+' => '',
	'Class:ComRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:ComRequest/Attribute:sla_ttr_over+' => '',
	'Class:ComRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:ComRequest/Attribute:time_spent+' => '',
	'Class:ComRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:ComRequest/Attribute:resolution_code+' => '',
	'Class:ComRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:ComRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:ComRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed',
	'Class:ComRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:ComRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair',
	'Class:ComRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:ComRequest/Attribute:resolution_code/Value:other' => 'other',
	'Class:ComRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:ComRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:ComRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:ComRequest/Attribute:resolution_code/Value:system update' => 'system update',
	'Class:ComRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:ComRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:ComRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:ComRequest/Attribute:solution' => 'Solution',
	'Class:ComRequest/Attribute:solution+' => '',
	'Class:ComRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:ComRequest/Attribute:pending_reason+' => '',
	'Class:ComRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:ComRequest/Attribute:parent_request_id+' => '',
	'Class:ComRequest/Attribute:parent_incident_id' => 'Parent incident',
	'Class:ComRequest/Attribute:parent_incident_id+' => '',
	'Class:ComRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:ComRequest/Attribute:parent_request_ref+' => '',
	'Class:ComRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:ComRequest/Attribute:parent_problem_id+' => '',
	'Class:ComRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:ComRequest/Attribute:parent_problem_ref+' => '',
	'Class:ComRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:ComRequest/Attribute:parent_change_id+' => '',
	'Class:ComRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:ComRequest/Attribute:parent_change_ref+' => '',
	'Class:ComRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:ComRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:ComRequest/Attribute:public_log' => 'Public log',
	'Class:ComRequest/Attribute:public_log+' => '',
	'Class:ComRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:ComRequest/Attribute:user_satisfaction+' => '',
	'Class:ComRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:ComRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:ComRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied',
	'Class:ComRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:ComRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified',
	'Class:ComRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:ComRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:ComRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:ComRequest/Attribute:user_comment' => 'User comment',
	'Class:ComRequest/Attribute:user_comment+' => '',
	'Class:ComRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:ComRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:ComRequest/Stimulus:ev_assign' => 'Assign',
	'Class:ComRequest/Stimulus:ev_assign+' => '',
	'Class:ComRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:ComRequest/Stimulus:ev_reassign+' => '',
	'Class:ComRequest/Stimulus:ev_approve' => 'Approve',
	'Class:ComRequest/Stimulus:ev_approve+' => '',
	'Class:ComRequest/Stimulus:ev_reject' => 'Reject',
	'Class:ComRequest/Stimulus:ev_reject+' => '',
	'Class:ComRequest/Stimulus:ev_pending' => 'Pending',
	'Class:ComRequest/Stimulus:ev_pending+' => '',
	'Class:ComRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:ComRequest/Stimulus:ev_timeout+' => '',
	'Class:ComRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:ComRequest/Stimulus:ev_autoresolve+' => '',
	'Class:ComRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:ComRequest/Stimulus:ev_autoclose+' => '',
	'Class:ComRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:ComRequest/Stimulus:ev_resolve+' => '',
	'Class:ComRequest/Stimulus:ev_close' => 'Close this request',
	'Class:ComRequest/Stimulus:ev_close+' => '',
	'Class:ComRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:ComRequest/Stimulus:ev_reopen+' => '',
	'Class:ComRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:ComRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:ComRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
		
	
	'Class:ComRequest/Attribute:deadline' => 'Deadline',
	'Class:ComRequest/Attribute:deadline+' => 'Deadline',
	'Class:ComRequest/Attribute:eventdate' => 'Eventdate',
	'Class:ComRequest/Attribute:eventdate+' => 'Date of the event',
	'Class:ComRequest/Attribute:poster_A3' => 'Poster A3',
	'Class:ComRequest/Attribute:poster_A3+' => 'Poster A3',	
	'Class:ComRequest/Attribute:pennon' => 'Flag',
	'Class:ComRequest/Attribute:pennon+' => 'Flag',	
	'Class:ComRequest/Attribute:invitation' => 'Invitation',
	'Class:ComRequest/Attribute:invitation+' => 'Invitation',	
	'Class:ComRequest/Attribute:sticker' => 'Sticker',
	'Class:ComRequest/Attribute:sticker+' => 'Sticker',	
	'Class:ComRequest/Attribute:poster_A2' => 'Poster A2',
	'Class:ComRequest/Attribute:poster_A2+' => 'Poster A2',
	'Class:ComRequest/Attribute:flyer' => 'Flyer',
	'Class:ComRequest/Attribute:flyer+' => 'Flyer',
	'Class:ComRequest/Attribute:triptych' => 'Triptych',
	'Class:ComRequest/Attribute:triptych+' => 'Triptych',
	'Class:ComRequest/Attribute:four_panel' => 'Four panel',
	'Class:ComRequest/Attribute:four_panel+' => 'Four panel',
	'Class:ComRequest/Attribute:brochure' => 'Brochure',
	'Class:ComRequest/Attribute:brochure+' => 'Brochure',
	'Class:ComRequest/Attribute:cover_facebook' => 'Facebookcover',
	'Class:ComRequest/Attribute:cover_facebook+' => 'Facebook coverpicture',
	'Class:ComRequest/Attribute:cover_event' => 'Eventcover',
	'Class:ComRequest/Attribute:cover_event+' => 'Event coverpicture',
	'Class:ComRequest/Attribute:notice_board' => 'Noticeboard',
	'Class:ComRequest/Attribute:notice_board+' => 'Noticeboard',
	'Class:ComRequest/Attribute:graphic_ledwall' => 'Ledwall',
	'Class:ComRequest/Attribute:graphic_ledwall+' => 'Ledwall',
	'Class:ComRequest/Attribute:graphic_screen' => 'Screens',
	'Class:ComRequest/Attribute:graphic_screen+' => 'Screens',
	'Class:ComRequest/Attribute:graphic_other' => 'Other',
	'Class:ComRequest/Attribute:graphic_other+' => 'Other',
	'ComRequest:graphical_work' => 'Graphical work',
	'ComRequest:graphical_work+' => '',
	'ComRequest:internal_channels' => 'Internal channels',
	'ComRequest:internal_channels+' => '',
	'ComRequest:external_channels' => 'External channels',
	'ComRequest:external_channels+' => '',
	
	'Class:ComRequest/Attribute:graphic_work_needed' => 'Graphic work needed',
	'Class:ComRequest/Attribute:graphic_work_needed+' => 'Graphic work needed',
	'Class:ComRequest/Attribute:graphic_work_needed/Value:needed' => 'Needed',
	'Class:ComRequest/Attribute:graphic_work_needed/Value:needed+' => 'Needed',
	'Class:ComRequest/Attribute:graphic_work_needed/Value:not_needed' => 'Not needed',
	'Class:ComRequest/Attribute:graphic_work_needed/Value:not_needed+' => 'Not needed',
	'Class:ComRequest/Attribute:graphic_work_needed/Value:done' => 'Done',
	'Class:ComRequest/Attribute:graphic_work_needed/Value:done+' => 'It is done',
	'Class:ComRequest/Attribute:graphic_work_needed/Value:wip' => 'In progress',
	'Class:ComRequest/Attribute:graphic_work_needed/Value:wip+' => 'It is in progress',



	

	'Class:ComRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:ComRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));
