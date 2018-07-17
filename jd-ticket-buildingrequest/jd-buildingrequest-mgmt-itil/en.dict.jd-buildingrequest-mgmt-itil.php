https://formulieren.izegem.be/educatief-aanbod/<?php
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
	'Menu:BuildingRequestManagement' => 'Building Request',
	'Menu:BuildingRequestManagement+' => 'Building Request',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:BuildingRequest:Provider' => 'Open request transfered to provider',
	'Menu:BuildingRequest:Provider+' => 'Open request transfered to provider',
	'Menu:BuildingRequest:Overview' => 'Building Overview',
	'Menu:BuildingRequest:Overview+' => 'Building Overview',
	'Menu:NewBuildingRequest' => 'New Building Request',
	'Menu:NewBuildingRequest+' => 'Create a new building request ticket',
	'Menu:SearchBuildingRequests' => 'Search for building requests',
	'Menu:SearchBuildingRequests+' => 'Search for building request tickets',
	'Menu:BuildingRequest:Shortcuts' => 'Shortcuts',
	'Menu:BuildingRequest:Shortcuts+' => '',
	'Menu:BuildingRequest:MyRequests' => 'Building Requests assigned to me',
	'Menu:BuildingRequest:MyRequests+' => 'Building Requests assigned to me (as Agent)',
	'Menu:BuildingRequest:MySupportRequests' => "My support calls",
	'Menu:BuildingRequest:MySupportRequests+' => "My support calls",
	'Menu:BuildingRequest:EscalatedRequests' => 'Hot Building Requests',
	'Menu:BuildingRequest:EscalatedRequests+' => 'Hot Building Requests',
	'Menu:BuildingRequest:OpenRequests' => 'All open building requests',
	'Menu:BuildingRequest:OpenRequests+' => 'All open building requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Building Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer',
	'Class:BuildingRequest:KnownErrorList' => 'Known Errors',
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
// Class: BuildingRequest
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:BuildingRequest' => 'Building Request',
	'Class:BuildingRequest+' => '',
	'Class:BuildingRequest/Attribute:status' => 'Status',
	'Class:BuildingRequest/Attribute:status+' => '',
	'Class:BuildingRequest/Attribute:address_allotment' => 'Address of the allotment',
	'Class:BuildingRequest/Attribute:address_allotment+' => 'Address of the allotment',
	'Class:BuildingRequest/Attribute:status/Value:new' => 'New',
	'Class:BuildingRequest/Attribute:status/Value:new+' => '',
	'Class:BuildingRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:BuildingRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:BuildingRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:BuildingRequest/Attribute:status/Value:assigned+' => '',
	'Class:BuildingRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:BuildingRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:BuildingRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:BuildingRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:BuildingRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:BuildingRequest/Attribute:status/Value:approved+' => '',
	'Class:BuildingRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:BuildingRequest/Attribute:status/Value:rejected+' => '',
	'Class:BuildingRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:BuildingRequest/Attribute:status/Value:pending+' => '',
	'Class:BuildingRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:BuildingRequest/Attribute:status/Value:resolved+' => '',
	'Class:BuildingRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:BuildingRequest/Attribute:status/Value:closed+' => '',
	'Class:BuildingRequest/Attribute:request_type' => 'Request Type',
	'Class:BuildingRequest/Attribute:request_type+' => '',
	'Class:BuildingRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:BuildingRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:BuildingRequest/Attribute:impact' => 'Impact',
	'Class:BuildingRequest/Attribute:impact+' => '',
	'Class:BuildingRequest/Attribute:impact/Value:1' => 'A department',
	'Class:BuildingRequest/Attribute:impact/Value:1+' => '',
	'Class:BuildingRequest/Attribute:impact/Value:2' => 'A service',
	'Class:BuildingRequest/Attribute:impact/Value:2+' => '',
	'Class:BuildingRequest/Attribute:impact/Value:3' => 'A person',
	'Class:BuildingRequest/Attribute:impact/Value:3+' => '',
	'Class:BuildingRequest/Attribute:priority' => 'Priority',
	'Class:BuildingRequest/Attribute:priority+' => '',
	'Class:BuildingRequest/Attribute:priority/Value:1' => 'critical',
	'Class:BuildingRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:BuildingRequest/Attribute:priority/Value:2' => 'high',
	'Class:BuildingRequest/Attribute:priority/Value:2+' => 'high',
	'Class:BuildingRequest/Attribute:priority/Value:3' => 'medium',
	'Class:BuildingRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:BuildingRequest/Attribute:priority/Value:4' => 'low',
	'Class:BuildingRequest/Attribute:priority/Value:4+' => 'low',
	'Class:BuildingRequest/Attribute:urgency' => 'Urgency',
	'Class:BuildingRequest/Attribute:urgency+' => '',
	'Class:BuildingRequest/Attribute:urgency/Value:1' => 'critical',
	'Class:BuildingRequest/Attribute:urgency/Value:1+' => 'critical',
	'Class:BuildingRequest/Attribute:urgency/Value:2' => 'high',
	'Class:BuildingRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:BuildingRequest/Attribute:urgency/Value:3' => 'medium',
	'Class:BuildingRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:BuildingRequest/Attribute:urgency/Value:4' => 'low',
	'Class:BuildingRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:BuildingRequest/Attribute:origin' => 'Origin',
	'Class:BuildingRequest/Attribute:origin+' => '',
	'Class:BuildingRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:BuildingRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:BuildingRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:BuildingRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:BuildingRequest/Attribute:origin/Value:phone' => 'phone',
	'Class:BuildingRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:BuildingRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:BuildingRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:BuildingRequest/Attribute:origin/Value:letter' => 'letter',
	'Class:BuildingRequest/Attribute:origin/Value:letter+' => 'letter',
	'Class:BuildingRequest/Attribute:origin/Value:ticket_booth' => 'ticket booth',
	'Class:BuildingRequest/Attribute:origin/Value:ticket_booth+' => 'ticket booth',
	'Class:BuildingRequest/Attribute:approver_id' => 'Approver',
	'Class:BuildingRequest/Attribute:approver_id+' => '',
	'Class:BuildingRequest/Attribute:approver_email' => 'Approver Email',
	'Class:BuildingRequest/Attribute:approver_email+' => '',
	'Class:BuildingRequest/Attribute:service_id' => 'Service',
	'Class:BuildingRequest/Attribute:service_id+' => '',
	'Class:BuildingRequest/Attribute:service_name' => 'Service name',
	'Class:BuildingRequest/Attribute:service_name+' => '',
	'Class:BuildingRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:BuildingRequest/Attribute:servicesubcategory_id+' => '',
	'Class:BuildingRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:BuildingRequest/Attribute:servicesubcategory_name+' => '',
	'Class:BuildingRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:BuildingRequest/Attribute:escalation_flag+' => '',
	'Class:BuildingRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:BuildingRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:BuildingRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:BuildingRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:BuildingRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:BuildingRequest/Attribute:escalation_reason+' => '',
	'Class:BuildingRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:BuildingRequest/Attribute:assignment_date+' => '',
	'Class:BuildingRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:BuildingRequest/Attribute:resolution_date+' => '',
	'Class:BuildingRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:BuildingRequest/Attribute:last_pending_date+' => '',
	'Class:BuildingRequest/Attribute:reminder' => 'Reminder',
	'Class:BuildingRequest/Attribute:reminder+' => 'When do I need to be reminded about this',
	'Class:BuildingRequest/Attribute:cumulatedpending' => 'cumulatedpending',
	'Class:BuildingRequest/Attribute:cumulatedpending+' => '',
	'Class:BuildingRequest/Attribute:tto' => 'TTO',
	'Class:BuildingRequest/Attribute:tto+' => '',
	'Class:BuildingRequest/Attribute:ttr' => 'TTR',
	'Class:BuildingRequest/Attribute:ttr+' => '',
	'Class:BuildingRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:BuildingRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:BuildingRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:BuildingRequest/Attribute:sla_tto_passed+' => '',
	'Class:BuildingRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:BuildingRequest/Attribute:sla_tto_over+' => '',
	'Class:BuildingRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:BuildingRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:BuildingRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:BuildingRequest/Attribute:sla_ttr_passed+' => '',
	'Class:BuildingRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:BuildingRequest/Attribute:sla_ttr_over+' => '',
	'Class:BuildingRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:BuildingRequest/Attribute:time_spent+' => '',
	'Class:BuildingRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:BuildingRequest/Attribute:resolution_code+' => '',
	'Class:BuildingRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:BuildingRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:BuildingRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed',
	'Class:BuildingRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:BuildingRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair',
	'Class:BuildingRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:BuildingRequest/Attribute:resolution_code/Value:other' => 'other',
	'Class:BuildingRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:BuildingRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:BuildingRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:BuildingRequest/Attribute:resolution_code/Value:system update' => 'system update',
	'Class:BuildingRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:BuildingRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:BuildingRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:BuildingRequest/Attribute:solution' => 'Solution',
	'Class:BuildingRequest/Attribute:solution+' => '',
	'Class:BuildingRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:BuildingRequest/Attribute:pending_reason+' => '',
	'Class:BuildingRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:BuildingRequest/Attribute:parent_request_id+' => '',
	'Class:BuildingRequest/Attribute:parent_incident_id' => 'Parent incident',
	'Class:BuildingRequest/Attribute:parent_incident_id+' => '',
	'Class:BuildingRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:BuildingRequest/Attribute:parent_request_ref+' => '',
	'Class:BuildingRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:BuildingRequest/Attribute:parent_problem_id+' => '',
	'Class:BuildingRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:BuildingRequest/Attribute:parent_problem_ref+' => '',
	'Class:BuildingRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:BuildingRequest/Attribute:parent_change_id+' => '',
	'Class:BuildingRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:BuildingRequest/Attribute:parent_change_ref+' => '',
	'Class:BuildingRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:BuildingRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:BuildingRequest/Attribute:public_log' => 'Public log',
	'Class:BuildingRequest/Attribute:public_log+' => '',
	'Class:BuildingRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:BuildingRequest/Attribute:user_satisfaction+' => '',
	'Class:BuildingRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:BuildingRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:BuildingRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied',
	'Class:BuildingRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:BuildingRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified',
	'Class:BuildingRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:BuildingRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:BuildingRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:BuildingRequest/Attribute:user_comment' => 'User comment',
	'Class:BuildingRequest/Attribute:user_comment+' => '',
	'Class:BuildingRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:BuildingRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:BuildingRequest/Stimulus:ev_assign' => 'Assign',
	'Class:BuildingRequest/Stimulus:ev_assign+' => '',
	'Class:BuildingRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:BuildingRequest/Stimulus:ev_reassign+' => '',
	'Class:BuildingRequest/Stimulus:ev_approve' => 'Approve',
	'Class:BuildingRequest/Stimulus:ev_approve+' => '',
	'Class:BuildingRequest/Stimulus:ev_reject' => 'Reject',
	'Class:BuildingRequest/Stimulus:ev_reject+' => '',
	'Class:BuildingRequest/Stimulus:ev_pending' => 'Pending',
	'Class:BuildingRequest/Stimulus:ev_pending+' => '',
	'Class:BuildingRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:BuildingRequest/Stimulus:ev_timeout+' => '',
	'Class:BuildingRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:BuildingRequest/Stimulus:ev_autoresolve+' => '',
	'Class:BuildingRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:BuildingRequest/Stimulus:ev_autoclose+' => '',
	'Class:BuildingRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:BuildingRequest/Stimulus:ev_resolve+' => '',
	'Class:BuildingRequest/Stimulus:ev_close' => 'Close this request',
	'Class:BuildingRequest/Stimulus:ev_close+' => '',
	'Class:BuildingRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:BuildingRequest/Stimulus:ev_reopen+' => '',
	'Class:BuildingRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:BuildingRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:BuildingRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',

	'Class:BuildingRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:BuildingRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));

