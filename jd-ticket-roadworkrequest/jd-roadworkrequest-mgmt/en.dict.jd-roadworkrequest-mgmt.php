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
	'Menu:RoadworkRequestManagement' => 'Roadwork',
	'Menu:RoadworkRequestManagement+' => 'Roadwork',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:RoadworkRequest:Provider' => 'Open request transfered to provider',
	'Menu:RoadworkRequest:Provider+' => 'Open request transfered to provider',
	'Menu:RoadworkRequest:Overview' => 'Roadwork Overview',
	'Menu:RoadworkRequest:Overview+' => 'Roadwork Overview',
	'Menu:NewRoadworkRequest' => 'New Roadwork Request',
	'Menu:NewRoadworkRequest+' => 'Create a new Roadwork request ticket',
	'Menu:SearchRoadworkRequests' => 'Search for Roadwork requests',
	'Menu:SearchRoadworkRequests+' => 'Search for Roadwork request tickets',
	'Menu:RoadworkRequest:Shortcuts' => 'Shortcuts',
	'Menu:RoadworkRequest:Shortcuts+' => '',
	'Menu:RoadworkRequest:MyRequests' => 'Roadwork Requests assigned to me',
	'Menu:RoadworkRequest:MyRequests+' => 'Roadwork Requests assigned to me (as Agent)',
	'Menu:RoadworkRequest:MySupportRequests' => "My support calls",
	'Menu:RoadworkRequest:MySupportRequests+' => "My support calls",
	'Menu:RoadworkRequest:EscalatedRequests' => 'Hot Roadwork Requests',
	'Menu:RoadworkRequest:EscalatedRequests+' => 'Hot Roadwork Requests',
	'Menu:RoadworkRequest:OpenRequests' => 'All open Roadwork requests',
	'Menu:RoadworkRequest:OpenRequests+' => 'All open Roadwork requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Roadwork Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer',
	'Class:RoadworkRequest:KnownErrorList' => 'Known Errors',
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
// Class: RoadworkRequest
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:RoadworkRequest' => 'Roadwork Request',
	'Class:RoadworkRequest+' => '',
	'Class:RoadworkRequest/Attribute:crab_address_id' => 'CRAB Address',
	'Class:RoadworkRequest/Attribute:crab_address_id+' => 'CRAB Address', 
	'Class:RoadworkRequest/Attribute:status' => 'Status',
	'Class:RoadworkRequest/Attribute:status+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:new' => 'New',
	'Class:RoadworkRequest/Attribute:status/Value:new+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:RoadworkRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:RoadworkRequest/Attribute:status/Value:assigned+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:RoadworkRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:RoadworkRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:RoadworkRequest/Attribute:status/Value:approved+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:RoadworkRequest/Attribute:status/Value:rejected+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:RoadworkRequest/Attribute:status/Value:pending+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:RoadworkRequest/Attribute:status/Value:resolved+' => '',
	'Class:RoadworkRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:RoadworkRequest/Attribute:status/Value:closed+' => '',
	'Class:RoadworkRequest/Attribute:request_type' => 'Request Type',
	'Class:RoadworkRequest/Attribute:request_type+' => '',
	'Class:RoadworkRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:RoadworkRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:RoadworkRequest/Attribute:impact' => 'Impact',
	'Class:RoadworkRequest/Attribute:impact+' => '',
	'Class:RoadworkRequest/Attribute:impact/Value:1' => 'A department',
	'Class:RoadworkRequest/Attribute:impact/Value:1+' => '',
	'Class:RoadworkRequest/Attribute:impact/Value:2' => 'A service',
	'Class:RoadworkRequest/Attribute:impact/Value:2+' => '',
	'Class:RoadworkRequest/Attribute:impact/Value:3' => 'A person',
	'Class:RoadworkRequest/Attribute:impact/Value:3+' => '',
	'Class:RoadworkRequest/Attribute:priority' => 'Priority',
	'Class:RoadworkRequest/Attribute:priority+' => '',
	'Class:RoadworkRequest/Attribute:priority/Value:1' => 'critical',
	'Class:RoadworkRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:RoadworkRequest/Attribute:priority/Value:2' => 'high',
	'Class:RoadworkRequest/Attribute:priority/Value:2+' => 'high',
	'Class:RoadworkRequest/Attribute:priority/Value:3' => 'medium',
	'Class:RoadworkRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:RoadworkRequest/Attribute:priority/Value:4' => 'low',
	'Class:RoadworkRequest/Attribute:priority/Value:4+' => 'low',
	'Class:RoadworkRequest/Attribute:urgency' => 'Urgency',
	'Class:RoadworkRequest/Attribute:urgency+' => '',
	'Class:RoadworkRequest/Attribute:urgency/Value:1' => 'critical',
	'Class:RoadworkRequest/Attribute:urgency/Value:1+' => 'critical',
	'Class:RoadworkRequest/Attribute:urgency/Value:2' => 'high',
	'Class:RoadworkRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:RoadworkRequest/Attribute:urgency/Value:3' => 'medium',
	'Class:RoadworkRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:RoadworkRequest/Attribute:urgency/Value:4' => 'low',
	'Class:RoadworkRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:RoadworkRequest/Attribute:origin' => 'Origin',
	'Class:RoadworkRequest/Attribute:origin+' => '',
	'Class:RoadworkRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:RoadworkRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:RoadworkRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:RoadworkRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:RoadworkRequest/Attribute:origin/Value:phone' => 'phone',
	'Class:RoadworkRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:RoadworkRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:RoadworkRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:RoadworkRequest/Attribute:approver_id' => 'Approver',
	'Class:RoadworkRequest/Attribute:approver_id+' => '',
	'Class:RoadworkRequest/Attribute:approver_email' => 'Approver Email',
	'Class:RoadworkRequest/Attribute:approver_email+' => '',
	'Class:RoadworkRequest/Attribute:service_id' => 'Service',
	'Class:RoadworkRequest/Attribute:service_id+' => '',
	'Class:RoadworkRequest/Attribute:service_name' => 'Service name',
	'Class:RoadworkRequest/Attribute:service_name+' => '',
	'Class:RoadworkRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:RoadworkRequest/Attribute:servicesubcategory_id+' => '',
	'Class:RoadworkRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:RoadworkRequest/Attribute:servicesubcategory_name+' => '',
	'Class:RoadworkRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:RoadworkRequest/Attribute:escalation_flag+' => '',
	'Class:RoadworkRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:RoadworkRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:RoadworkRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:RoadworkRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:RoadworkRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:RoadworkRequest/Attribute:escalation_reason+' => '',
	'Class:RoadworkRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:RoadworkRequest/Attribute:assignment_date+' => '',
	'Class:RoadworkRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:RoadworkRequest/Attribute:resolution_date+' => '',
	'Class:RoadworkRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:RoadworkRequest/Attribute:last_pending_date+' => '',
	'Class:RoadworkRequest/Attribute:cumulatedpending' => 'cumulatedpending',
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
	'Class:RoadworkRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:RoadworkRequest/Attribute:sla_ttr_passed+' => '',
	'Class:RoadworkRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:RoadworkRequest/Attribute:sla_ttr_over+' => '',
	'Class:RoadworkRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:RoadworkRequest/Attribute:time_spent+' => '',
	'Class:RoadworkRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:RoadworkRequest/Attribute:resolution_code+' => '',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:other' => 'other',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:system update' => 'system update',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:RoadworkRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:RoadworkRequest/Attribute:solution' => 'Solution',
	'Class:RoadworkRequest/Attribute:solution+' => '',
	'Class:RoadworkRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:RoadworkRequest/Attribute:pending_reason+' => '',
	'Class:RoadworkRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:RoadworkRequest/Attribute:parent_request_id+' => '',
	'Class:RoadworkRequest/Attribute:parent_incident_id' => 'Parent incident',
	'Class:RoadworkRequest/Attribute:parent_incident_id+' => '',
	'Class:RoadworkRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:RoadworkRequest/Attribute:parent_request_ref+' => '',
	'Class:RoadworkRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:RoadworkRequest/Attribute:parent_problem_id+' => '',
	'Class:RoadworkRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:RoadworkRequest/Attribute:parent_problem_ref+' => '',
	'Class:RoadworkRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:RoadworkRequest/Attribute:parent_change_id+' => '',
	'Class:RoadworkRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:RoadworkRequest/Attribute:parent_change_ref+' => '',
	'Class:RoadworkRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:RoadworkRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:RoadworkRequest/Attribute:public_log' => 'Public log',
	'Class:RoadworkRequest/Attribute:public_log+' => '',
	'Class:RoadworkRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:RoadworkRequest/Attribute:user_satisfaction+' => '',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:RoadworkRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:RoadworkRequest/Attribute:user_comment' => 'User comment',
	'Class:RoadworkRequest/Attribute:user_comment+' => '',
	'Class:RoadworkRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:RoadworkRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:RoadworkRequest/Stimulus:ev_assign' => 'Assign',
	'Class:RoadworkRequest/Stimulus:ev_assign+' => '',
	'Class:RoadworkRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:RoadworkRequest/Stimulus:ev_reassign+' => '',
	'Class:RoadworkRequest/Stimulus:ev_approve' => 'Approve',
	'Class:RoadworkRequest/Stimulus:ev_approve+' => '',
	'Class:RoadworkRequest/Stimulus:ev_reject' => 'Reject',
	'Class:RoadworkRequest/Stimulus:ev_reject+' => '',
	'Class:RoadworkRequest/Stimulus:ev_pending' => 'Pending',
	'Class:RoadworkRequest/Stimulus:ev_pending+' => '',
	'Class:RoadworkRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:RoadworkRequest/Stimulus:ev_timeout+' => '',
	'Class:RoadworkRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:RoadworkRequest/Stimulus:ev_autoresolve+' => '',
	'Class:RoadworkRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:RoadworkRequest/Stimulus:ev_autoclose+' => '',
	'Class:RoadworkRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:RoadworkRequest/Stimulus:ev_resolve+' => '',
	'Class:RoadworkRequest/Stimulus:ev_close' => 'Close this request',
	'Class:RoadworkRequest/Stimulus:ev_close+' => '',
	'Class:RoadworkRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:RoadworkRequest/Stimulus:ev_reopen+' => '',
	'Class:RoadworkRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:RoadworkRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:RoadworkRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
	'Class:RoadworkRequest/Attribute:reminder' => 'Reminder',
	'Class:RoadworkRequest/Attribute:reminder+' => 'Reminder',	

	'Class:RoadworkRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:RoadworkRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));
