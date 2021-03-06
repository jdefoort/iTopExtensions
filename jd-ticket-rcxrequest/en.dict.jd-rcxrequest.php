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
	'Menu:RcxRequestManagement' => 'Recreatex',
	'Menu:RcxRequestManagement+' => 'Recreatex',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:RcxRequest:Provider' => 'Open request transfered to provider',
	'Menu:RcxRequest:Provider+' => 'Open request transfered to provider',
	'Menu:RcxRequest:Overview' => 'Rcx Overview',
	'Menu:RcxRequest:Overview+' => 'Rcx Overview',
	'Menu:NewRcxRequest' => 'New Rcx Request',
	'Menu:NewRcxRequest+' => 'Create a new rcx request ticket',
	'Menu:SearchRcxRequests' => 'Search for rcx requests',
	'Menu:SearchRcxRequests+' => 'Search for rcx request tickets',
	'Menu:RcxRequest:Shortcuts' => 'Shortcuts',
	'Menu:RcxRequest:Shortcuts+' => '',
	'Menu:RcxRequest:MyRequests' => 'Rcx Requests assigned to me',
	'Menu:RcxRequest:MyRequests+' => 'Rcx Requests assigned to me (as Agent)',
	'Menu:RcxRequest:MySupportRequests' => "My support calls",
	'Menu:RcxRequest:MySupportRequests+' => "My support calls",
	'Menu:RcxRequest:EscalatedRequests' => 'Hot Rcx Requests',
	'Menu:RcxRequest:EscalatedRequests+' => 'Hot Rcx Requests',
	'Menu:RcxRequest:OpenRequests' => 'All open rcx requests',
	'Menu:RcxRequest:OpenRequests+' => 'All open rcx requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Rcx Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer',
	'Class:RcxRequest:KnownErrorList' => 'Known Errors',
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
// Class: RcxRequest
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:RcxRequest' => 'Rcx Request',
	'Class:RcxRequest+' => '',
	'Class:RcxRequest/Attribute:status' => 'Status',
	'Class:RcxRequest/Attribute:status+' => '',
	'Class:RcxRequest/Attribute:status/Value:new' => 'New',
	'Class:RcxRequest/Attribute:status/Value:new+' => '',
	'Class:RcxRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:RcxRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:RcxRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:RcxRequest/Attribute:status/Value:assigned+' => '',
	'Class:RcxRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:RcxRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:RcxRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:RcxRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:RcxRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:RcxRequest/Attribute:status/Value:approved+' => '',
	'Class:RcxRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:RcxRequest/Attribute:status/Value:rejected+' => '',
	'Class:RcxRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:RcxRequest/Attribute:status/Value:pending+' => '',
	'Class:RcxRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:RcxRequest/Attribute:status/Value:resolved+' => '',
	'Class:RcxRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:RcxRequest/Attribute:status/Value:closed+' => '',
	'Class:RcxRequest/Attribute:request_type' => 'Request Type',
	'Class:RcxRequest/Attribute:request_type+' => '',
	'Class:RcxRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:RcxRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:RcxRequest/Attribute:impact' => 'Impact',
	'Class:RcxRequest/Attribute:impact+' => '',
	'Class:RcxRequest/Attribute:impact/Value:1' => 'A department',
	'Class:RcxRequest/Attribute:impact/Value:1+' => '',
	'Class:RcxRequest/Attribute:impact/Value:2' => 'A service',
	'Class:RcxRequest/Attribute:impact/Value:2+' => '',
	'Class:RcxRequest/Attribute:impact/Value:3' => 'A person',
	'Class:RcxRequest/Attribute:impact/Value:3+' => '',
	'Class:RcxRequest/Attribute:priority' => 'Priority',
	'Class:RcxRequest/Attribute:priority+' => '',
	'Class:RcxRequest/Attribute:priority/Value:1' => 'critical',
	'Class:RcxRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:RcxRequest/Attribute:priority/Value:2' => 'high',
	'Class:RcxRequest/Attribute:priority/Value:2+' => 'high',
	'Class:RcxRequest/Attribute:priority/Value:3' => 'medium',
	'Class:RcxRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:RcxRequest/Attribute:priority/Value:4' => 'low',
	'Class:RcxRequest/Attribute:priority/Value:4+' => 'low',
	'Class:RcxRequest/Attribute:urgency' => 'Urgency',
	'Class:RcxRequest/Attribute:urgency+' => '',
	'Class:RcxRequest/Attribute:urgency/Value:1' => 'critical',
	'Class:RcxRequest/Attribute:urgency/Value:1+' => 'critical',
	'Class:RcxRequest/Attribute:urgency/Value:2' => 'high',
	'Class:RcxRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:RcxRequest/Attribute:urgency/Value:3' => 'medium',
	'Class:RcxRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:RcxRequest/Attribute:urgency/Value:4' => 'low',
	'Class:RcxRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:RcxRequest/Attribute:origin' => 'Origin',
	'Class:RcxRequest/Attribute:origin+' => '',
	'Class:RcxRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:RcxRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:RcxRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:RcxRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:RcxRequest/Attribute:origin/Value:phone' => 'phone',
	'Class:RcxRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:RcxRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:RcxRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:RcxRequest/Attribute:approver_id' => 'Approver',
	'Class:RcxRequest/Attribute:approver_id+' => '',
	'Class:RcxRequest/Attribute:approver_email' => 'Approver Email',
	'Class:RcxRequest/Attribute:approver_email+' => '',
	'Class:RcxRequest/Attribute:service_id' => 'Service',
	'Class:RcxRequest/Attribute:service_id+' => '',
	'Class:RcxRequest/Attribute:service_name' => 'Service name',
	'Class:RcxRequest/Attribute:service_name+' => '',
	'Class:RcxRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:RcxRequest/Attribute:servicesubcategory_id+' => '',
	'Class:RcxRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:RcxRequest/Attribute:servicesubcategory_name+' => '',
	'Class:RcxRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:RcxRequest/Attribute:escalation_flag+' => '',
	'Class:RcxRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:RcxRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:RcxRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:RcxRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:RcxRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:RcxRequest/Attribute:escalation_reason+' => '',
	'Class:RcxRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:RcxRequest/Attribute:assignment_date+' => '',
	'Class:RcxRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:RcxRequest/Attribute:resolution_date+' => '',
	'Class:RcxRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:RcxRequest/Attribute:last_pending_date+' => '',
	'Class:RcxRequest/Attribute:cumulatedpending' => 'cumulatedpending',
	'Class:RcxRequest/Attribute:cumulatedpending+' => '',
	'Class:RcxRequest/Attribute:tto' => 'TTO',
	'Class:RcxRequest/Attribute:tto+' => '',
	'Class:RcxRequest/Attribute:ttr' => 'TTR',
	'Class:RcxRequest/Attribute:ttr+' => '',
	'Class:RcxRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:RcxRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:RcxRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:RcxRequest/Attribute:sla_tto_passed+' => '',
	'Class:RcxRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:RcxRequest/Attribute:sla_tto_over+' => '',
	'Class:RcxRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:RcxRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:RcxRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:RcxRequest/Attribute:sla_ttr_passed+' => '',
	'Class:RcxRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:RcxRequest/Attribute:sla_ttr_over+' => '',
	'Class:RcxRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:RcxRequest/Attribute:time_spent+' => '',
	'Class:RcxRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:RcxRequest/Attribute:resolution_code+' => '',
	'Class:RcxRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:RcxRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:RcxRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed',
	'Class:RcxRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:RcxRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair',
	'Class:RcxRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:RcxRequest/Attribute:resolution_code/Value:other' => 'other',
	'Class:RcxRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:RcxRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:RcxRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:RcxRequest/Attribute:resolution_code/Value:system update' => 'system update',
	'Class:RcxRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:RcxRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:RcxRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:RcxRequest/Attribute:solution' => 'Solution',
	'Class:RcxRequest/Attribute:solution+' => '',
	'Class:RcxRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:RcxRequest/Attribute:pending_reason+' => '',
	'Class:RcxRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:RcxRequest/Attribute:parent_request_id+' => '',
	'Class:RcxRequest/Attribute:parent_incident_id' => 'Parent incident',
	'Class:RcxRequest/Attribute:parent_incident_id+' => '',
	'Class:RcxRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:RcxRequest/Attribute:parent_request_ref+' => '',
	'Class:RcxRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:RcxRequest/Attribute:parent_problem_id+' => '',
	'Class:RcxRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:RcxRequest/Attribute:parent_problem_ref+' => '',
	'Class:RcxRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:RcxRequest/Attribute:parent_change_id+' => '',
	'Class:RcxRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:RcxRequest/Attribute:parent_change_ref+' => '',
	'Class:RcxRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:RcxRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:RcxRequest/Attribute:public_log' => 'Public log',
	'Class:RcxRequest/Attribute:public_log+' => '',
	'Class:RcxRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:RcxRequest/Attribute:user_satisfaction+' => '',
	'Class:RcxRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:RcxRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:RcxRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied',
	'Class:RcxRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:RcxRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified',
	'Class:RcxRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:RcxRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:RcxRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:RcxRequest/Attribute:user_comment' => 'User comment',
	'Class:RcxRequest/Attribute:user_comment+' => '',
	'Class:RcxRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:RcxRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:RcxRequest/Stimulus:ev_assign' => 'Assign',
	'Class:RcxRequest/Stimulus:ev_assign+' => '',
	'Class:RcxRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:RcxRequest/Stimulus:ev_reassign+' => '',
	'Class:RcxRequest/Stimulus:ev_approve' => 'Approve',
	'Class:RcxRequest/Stimulus:ev_approve+' => '',
	'Class:RcxRequest/Stimulus:ev_reject' => 'Reject',
	'Class:RcxRequest/Stimulus:ev_reject+' => '',
	'Class:RcxRequest/Stimulus:ev_pending' => 'Pending',
	'Class:RcxRequest/Stimulus:ev_pending+' => '',
	'Class:RcxRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:RcxRequest/Stimulus:ev_timeout+' => '',
	'Class:RcxRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:RcxRequest/Stimulus:ev_autoresolve+' => '',
	'Class:RcxRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:RcxRequest/Stimulus:ev_autoclose+' => '',
	'Class:RcxRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:RcxRequest/Stimulus:ev_resolve+' => '',
	'Class:RcxRequest/Stimulus:ev_close' => 'Close this request',
	'Class:RcxRequest/Stimulus:ev_close+' => '',
	'Class:RcxRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:RcxRequest/Stimulus:ev_reopen+' => '',
	'Class:RcxRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:RcxRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:RcxRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
	'Class:RcxRequest/Attribute:reminder' => 'Reminder',
	'Class:RcxRequest/Attribute:reminder+' => 'Reminder',	

	'Class:RcxRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:RcxRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));
