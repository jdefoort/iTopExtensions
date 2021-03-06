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
	'Menu:CouncilRequestManagement' => 'Council',
	'Menu:CouncilRequestManagement+' => 'Council',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:CouncilRequest:Provider' => 'Open request transfered to provider',
	'Menu:CouncilRequest:Provider+' => 'Open request transfered to provider',
	'Menu:CouncilRequest:Overview' => 'Council Overview',
	'Menu:CouncilRequest:Overview+' => 'Council Overview',
	'Menu:NewCouncilRequest' => 'New council Request',
	'Menu:NewCouncilRequest+' => 'Create a new council request ticket',
	'Menu:SearchCouncilRequests' => 'Search for council requests',
	'Menu:SearchCouncilRequests+' => 'Search for council request tickets',
	'Menu:CouncilRequest:Shortcuts' => 'Shortcuts',
	'Menu:CouncilRequest:Shortcuts+' => '',
	'Menu:CouncilRequest:MyRequests' => 'council Requests assigned to me',
	'Menu:CouncilRequest:MyRequests+' => 'council Requests assigned to me (as Agent)',
	'Menu:CouncilRequest:MySupportRequests' => "My support calls",
	'Menu:CouncilRequest:MySupportRequests+' => "My support calls",
	'Menu:CouncilRequest:EscalatedRequests' => 'Hot council Requests',
	'Menu:CouncilRequest:EscalatedRequests+' => 'Hot council Requests',
	'Menu:CouncilRequest:OpenRequests' => 'All open council requests',
	'Menu:CouncilRequest:OpenRequests+' => 'All open council requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'council Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer',
	'Class:CouncilRequest:KnownErrorList' => 'Known Errors',
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
// Class: CouncilRequest
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:CouncilRequest' => 'council Request',
	'Class:CouncilRequest+' => '',
	'Class:CouncilRequest/Attribute:status' => 'Status',
	'Class:CouncilRequest/Attribute:status+' => '',
	'Class:CouncilRequest/Attribute:status/Value:new' => 'New',
	'Class:CouncilRequest/Attribute:status/Value:new+' => '',
	'Class:CouncilRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:CouncilRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:CouncilRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:CouncilRequest/Attribute:status/Value:assigned+' => '',
	'Class:CouncilRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:CouncilRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:CouncilRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:CouncilRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:CouncilRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:CouncilRequest/Attribute:status/Value:approved+' => '',
	'Class:CouncilRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:CouncilRequest/Attribute:status/Value:rejected+' => '',
	'Class:CouncilRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:CouncilRequest/Attribute:status/Value:pending+' => '',
	'Class:CouncilRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:CouncilRequest/Attribute:status/Value:resolved+' => '',
	'Class:CouncilRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:CouncilRequest/Attribute:status/Value:closed+' => '',
	'Class:CouncilRequest/Attribute:request_type' => 'Request Type',
	'Class:CouncilRequest/Attribute:request_type+' => '',
	'Class:CouncilRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:CouncilRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:CouncilRequest/Attribute:publishstate' => 'Status publicatie',
	'Class:CouncilRequest/Attribute:publishstate+' => '',
	'Class:CouncilRequest/Attribute:publishstate/Value:1' => 'Unpublished',
	'Class:CouncilRequest/Attribute:publishstate/Value:1+' => '',
	'Class:CouncilRequest/Attribute:publishstate/Value:2' => 'Published',
	'Class:CouncilRequest/Attribute:publishstate/Value:2+' => '',
	'Class:CouncilRequest/Attribute:publishstate/Value:3' => 'Denied publication',
	'Class:CouncilRequest/Attribute:publishstate/Value:3+' => '',
	'Class:CouncilRequest/Attribute:publishstate/Value:4' => 'councilmember informed, not published yet',
	'Class:CouncilRequest/Attribute:publishstate/Value:4+' => '',	
	'Class:CouncilRequest/Attribute:priority' => 'Priority',
	'Class:CouncilRequest/Attribute:priority+' => '',
	'Class:CouncilRequest/Attribute:priority/Value:1' => 'critical',
	'Class:CouncilRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:CouncilRequest/Attribute:priority/Value:2' => 'high',
	'Class:CouncilRequest/Attribute:priority/Value:2+' => 'high',
	'Class:CouncilRequest/Attribute:priority/Value:3' => 'medium',
	'Class:CouncilRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:CouncilRequest/Attribute:priority/Value:4' => 'low',
	'Class:CouncilRequest/Attribute:priority/Value:4+' => 'low',
	'Class:CouncilRequest/Attribute:urgency' => 'Urgency',
	'Class:CouncilRequest/Attribute:urgency+' => '',
	'Class:CouncilRequest/Attribute:urgency/Value:1' => 'critical',
	'Class:CouncilRequest/Attribute:urgency/Value:1+' => 'critical',
	'Class:CouncilRequest/Attribute:urgency/Value:2' => 'high',
	'Class:CouncilRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:CouncilRequest/Attribute:urgency/Value:3' => 'medium',
	'Class:CouncilRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:CouncilRequest/Attribute:urgency/Value:4' => 'low',
	'Class:CouncilRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:CouncilRequest/Attribute:origin' => 'Origin',
	'Class:CouncilRequest/Attribute:origin+' => '',
	'Class:CouncilRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:CouncilRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:CouncilRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:CouncilRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:CouncilRequest/Attribute:origin/Value:phone' => 'phone',
	'Class:CouncilRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:CouncilRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:CouncilRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:CouncilRequest/Attribute:approver_id' => 'Approver',
	'Class:CouncilRequest/Attribute:approver_id+' => '',
	'Class:CouncilRequest/Attribute:approver_email' => 'Approver Email',
	'Class:CouncilRequest/Attribute:approver_email+' => '',
	'Class:CouncilRequest/Attribute:service_id' => 'Service',
	'Class:CouncilRequest/Attribute:service_id+' => '',
	'Class:CouncilRequest/Attribute:service_name' => 'Service name',
	'Class:CouncilRequest/Attribute:service_name+' => '',
	'Class:CouncilRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:CouncilRequest/Attribute:servicesubcategory_id+' => '',
	'Class:CouncilRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:CouncilRequest/Attribute:servicesubcategory_name+' => '',
	'Class:CouncilRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:CouncilRequest/Attribute:escalation_flag+' => '',
	'Class:CouncilRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:CouncilRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:CouncilRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:CouncilRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:CouncilRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:CouncilRequest/Attribute:escalation_reason+' => '',
	'Class:CouncilRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:CouncilRequest/Attribute:assignment_date+' => '',
	'Class:CouncilRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:CouncilRequest/Attribute:resolution_date+' => '',
	'Class:CouncilRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:CouncilRequest/Attribute:last_pending_date+' => '',
	'Class:CouncilRequest/Attribute:cumulatedpending' => 'cumulatedpending',
	'Class:CouncilRequest/Attribute:cumulatedpending+' => '',
	'Class:CouncilRequest/Attribute:tto' => 'TTO',
	'Class:CouncilRequest/Attribute:tto+' => '',
	'Class:CouncilRequest/Attribute:ttr' => 'TTR',
	'Class:CouncilRequest/Attribute:ttr+' => '',
	'Class:CouncilRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:CouncilRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:CouncilRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:CouncilRequest/Attribute:sla_tto_passed+' => '',
	'Class:CouncilRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:CouncilRequest/Attribute:sla_tto_over+' => '',
	'Class:CouncilRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:CouncilRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:CouncilRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:CouncilRequest/Attribute:sla_ttr_passed+' => '',
	'Class:CouncilRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:CouncilRequest/Attribute:sla_ttr_over+' => '',
	'Class:CouncilRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:CouncilRequest/Attribute:time_spent+' => '',
	'Class:CouncilRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:CouncilRequest/Attribute:resolution_code+' => '',
	'Class:CouncilRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:CouncilRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:CouncilRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed',
	'Class:CouncilRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:CouncilRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair',
	'Class:CouncilRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:CouncilRequest/Attribute:resolution_code/Value:other' => 'other',
	'Class:CouncilRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:CouncilRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:CouncilRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:CouncilRequest/Attribute:resolution_code/Value:system update' => 'system update',
	'Class:CouncilRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:CouncilRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:CouncilRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:CouncilRequest/Attribute:solution' => 'Solution',
	'Class:CouncilRequest/Attribute:solution+' => '',
	'Class:CouncilRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:CouncilRequest/Attribute:pending_reason+' => '',
	'Class:CouncilRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:CouncilRequest/Attribute:parent_request_id+' => '',
	'Class:CouncilRequest/Attribute:parent_incident_id' => 'Parent incident',
	'Class:CouncilRequest/Attribute:parent_incident_id+' => '',
	'Class:CouncilRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:CouncilRequest/Attribute:parent_request_ref+' => '',
	'Class:CouncilRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:CouncilRequest/Attribute:parent_problem_id+' => '',
	'Class:CouncilRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:CouncilRequest/Attribute:parent_problem_ref+' => '',
	'Class:CouncilRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:CouncilRequest/Attribute:parent_change_id+' => '',
	'Class:CouncilRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:CouncilRequest/Attribute:parent_change_ref+' => '',
	'Class:CouncilRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:CouncilRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:CouncilRequest/Attribute:public_log' => 'Public log',
	'Class:CouncilRequest/Attribute:public_log+' => '',
	'Class:CouncilRequest/Attribute:publish_log' => 'Publish log',
	'Class:CouncilRequest/Attribute:publish_log+' => '',
	'Class:CouncilRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:CouncilRequest/Attribute:user_satisfaction+' => '',
	'Class:CouncilRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:CouncilRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:CouncilRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied',
	'Class:CouncilRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:CouncilRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified',
	'Class:CouncilRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:CouncilRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:CouncilRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:CouncilRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:CouncilRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:CouncilRequest/Stimulus:ev_assign' => 'Assign',
	'Class:CouncilRequest/Stimulus:ev_assign+' => '',
	'Class:CouncilRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:CouncilRequest/Stimulus:ev_reassign+' => '',
	'Class:CouncilRequest/Stimulus:ev_approve' => 'Approve',
	'Class:CouncilRequest/Stimulus:ev_approve+' => '',
	'Class:CouncilRequest/Stimulus:ev_reject' => 'Reject',
	'Class:CouncilRequest/Stimulus:ev_reject+' => '',
	'Class:CouncilRequest/Stimulus:ev_pending' => 'Pending',
	'Class:CouncilRequest/Stimulus:ev_pending+' => '',
	'Class:CouncilRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:CouncilRequest/Stimulus:ev_timeout+' => '',
	'Class:CouncilRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:CouncilRequest/Stimulus:ev_autoresolve+' => '',
	'Class:CouncilRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:CouncilRequest/Stimulus:ev_autoclose+' => '',
	'Class:CouncilRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:CouncilRequest/Stimulus:ev_resolve+' => '',
	'Class:CouncilRequest/Stimulus:ev_close' => 'Close this request',
	'Class:CouncilRequest/Stimulus:ev_close+' => '',
	'Class:CouncilRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:CouncilRequest/Stimulus:ev_reopen+' => '',
	'Class:CouncilRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:CouncilRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:CouncilRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
	'Class:CouncilRequest/Attribute:reminder' => 'Reminder',
	'Class:CouncilRequest/Attribute:reminder+' => '',
	'Class:CouncilRequest/Attribute:councildate' => 'Council date',
	'Class:CouncilRequest/Attribute:councildate+' => '',
	'Class:CouncilRequest/Attribute:council_member_id' => 'Responsible councilmember',	
	'Class:CouncilRequest/Attribute:council_member_id+' => '',		

	'Class:CouncilRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:CouncilRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));
