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
	'Menu:SubsidyRequestManagement' => 'Subsidy',
	'Menu:SubsidyRequestManagement+' => 'Subsidy',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:SubsidyRequest:Provider' => 'Open request transfered to provider',
	'Menu:SubsidyRequest:Provider+' => 'Open request transfered to provider',
	'Menu:SubsidyRequest:Overview' => 'Subsidy Overview',
	'Menu:SubsidyRequest:Overview+' => 'Subsidy Overview',
	'Menu:NewSubsidyRequest' => 'New Subsidy Request',
	'Menu:NewSubsidyRequest+' => 'Create a new subsidy request ticket',
	'Menu:SearchSubsidyRequests' => 'Search for subsidy requests',
	'Menu:SearchSubsidyRequests+' => 'Search for subsidy request tickets',
	'Menu:SubsidyRequest:Shortcuts' => 'Shortcuts',
	'Menu:SubsidyRequest:Shortcuts+' => '',
	'Menu:SubsidyRequest:MyRequests' => 'Subsidy Requests assigned to me',
	'Menu:SubsidyRequest:MyRequests+' => 'Subsidy Requests assigned to me (as Agent)',
	'Menu:SubsidyRequest:MySupportRequests' => "My support calls",
	'Menu:SubsidyRequest:MySupportRequests+' => "My support calls",
	'Menu:SubsidyRequest:EscalatedRequests' => 'Hot subsidy Requests',
	'Menu:SubsidyRequest:EscalatedRequests+' => 'Hot subsidy Requests',
	'Menu:SubsidyRequest:OpenRequests' => 'All open subsidy requests',
	'Menu:SubsidyRequest:OpenRequests+' => 'All open subsidy requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Subsidy Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer',
	'Class:SubsidyRequest:KnownErrorList' => 'Known Errors',
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
// Class: SubsidyRequest
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SubsidyRequest' => 'Subsidy Request',
	'Class:SubsidyRequest+' => '',
	'Class:SubsidyRequest/Attribute:status' => 'Status',
	'Class:SubsidyRequest/Attribute:status+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:new' => 'New',
	'Class:SubsidyRequest/Attribute:status/Value:new+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:SubsidyRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:SubsidyRequest/Attribute:status/Value:assigned+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:SubsidyRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:SubsidyRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:SubsidyRequest/Attribute:status/Value:approved+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:SubsidyRequest/Attribute:status/Value:rejected+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:SubsidyRequest/Attribute:status/Value:pending+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:SubsidyRequest/Attribute:status/Value:resolved+' => '',
	'Class:SubsidyRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:SubsidyRequest/Attribute:status/Value:closed+' => '',
	'Class:SubsidyRequest/Attribute:request_type' => 'Request Type',
	'Class:SubsidyRequest/Attribute:request_type+' => '',
	'Class:SubsidyRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:SubsidyRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:SubsidyRequest/Attribute:impact' => 'Impact',
	'Class:SubsidyRequest/Attribute:impact+' => '',
	'Class:SubsidyRequest/Attribute:impact/Value:1' => 'A department',
	'Class:SubsidyRequest/Attribute:impact/Value:1+' => '',
	'Class:SubsidyRequest/Attribute:impact/Value:2' => 'A service',
	'Class:SubsidyRequest/Attribute:impact/Value:2+' => '',
	'Class:SubsidyRequest/Attribute:impact/Value:3' => 'A person',
	'Class:SubsidyRequest/Attribute:impact/Value:3+' => '',
	'Class:SubsidyRequest/Attribute:priority' => 'Priority',
	'Class:SubsidyRequest/Attribute:priority+' => '',
	'Class:SubsidyRequest/Attribute:priority/Value:1' => 'critical',
	'Class:SubsidyRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:SubsidyRequest/Attribute:priority/Value:2' => 'high',
	'Class:SubsidyRequest/Attribute:priority/Value:2+' => 'high',
	'Class:SubsidyRequest/Attribute:priority/Value:3' => 'medium',
	'Class:SubsidyRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:SubsidyRequest/Attribute:priority/Value:4' => 'low',
	'Class:SubsidyRequest/Attribute:priority/Value:4+' => 'low',
	'Class:SubsidyRequest/Attribute:urgency' => 'Urgency',
	'Class:SubsidyRequest/Attribute:urgency+' => '',
	'Class:SubsidyRequest/Attribute:urgency/Value:1' => 'critical',
	'Class:SubsidyRequest/Attribute:urgency/Value:1+' => 'critical',
	'Class:SubsidyRequest/Attribute:urgency/Value:2' => 'high',
	'Class:SubsidyRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:SubsidyRequest/Attribute:urgency/Value:3' => 'medium',
	'Class:SubsidyRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:SubsidyRequest/Attribute:urgency/Value:4' => 'low',
	'Class:SubsidyRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:SubsidyRequest/Attribute:origin' => 'Origin',
	'Class:SubsidyRequest/Attribute:origin+' => '',
	'Class:SubsidyRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:SubsidyRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:SubsidyRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:SubsidyRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:SubsidyRequest/Attribute:origin/Value:phone' => 'phone',
	'Class:SubsidyRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:SubsidyRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:SubsidyRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:SubsidyRequest/Attribute:approver_id' => 'Approver',
	'Class:SubsidyRequest/Attribute:approver_id+' => '',
	'Class:SubsidyRequest/Attribute:approver_email' => 'Approver Email',
	'Class:SubsidyRequest/Attribute:approver_email+' => '',
	'Class:SubsidyRequest/Attribute:service_id' => 'Service',
	'Class:SubsidyRequest/Attribute:service_id+' => '',
	'Class:SubsidyRequest/Attribute:service_name' => 'Service name',
	'Class:SubsidyRequest/Attribute:service_name+' => '',
	'Class:SubsidyRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:SubsidyRequest/Attribute:servicesubcategory_id+' => '',
	'Class:SubsidyRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:SubsidyRequest/Attribute:servicesubcategory_name+' => '',
	'Class:SubsidyRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:SubsidyRequest/Attribute:escalation_flag+' => '',
	'Class:SubsidyRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:SubsidyRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:SubsidyRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:SubsidyRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:SubsidyRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:SubsidyRequest/Attribute:escalation_reason+' => '',
	'Class:SubsidyRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:SubsidyRequest/Attribute:assignment_date+' => '',
	'Class:SubsidyRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:SubsidyRequest/Attribute:resolution_date+' => '',
	'Class:SubsidyRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:SubsidyRequest/Attribute:last_pending_date+' => '',
	'Class:SubsidyRequest/Attribute:cumulatedpending' => 'cumulatedpending',
	'Class:SubsidyRequest/Attribute:cumulatedpending+' => '',
	'Class:SubsidyRequest/Attribute:tto' => 'TTO',
	'Class:SubsidyRequest/Attribute:tto+' => '',
	'Class:SubsidyRequest/Attribute:ttr' => 'TTR',
	'Class:SubsidyRequest/Attribute:ttr+' => '',
	'Class:SubsidyRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:SubsidyRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:SubsidyRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:SubsidyRequest/Attribute:sla_tto_passed+' => '',
	'Class:SubsidyRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:SubsidyRequest/Attribute:sla_tto_over+' => '',
	'Class:SubsidyRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:SubsidyRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:SubsidyRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:SubsidyRequest/Attribute:sla_ttr_passed+' => '',
	'Class:SubsidyRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:SubsidyRequest/Attribute:sla_ttr_over+' => '',
	'Class:SubsidyRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:SubsidyRequest/Attribute:time_spent+' => '',
	'Class:SubsidyRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:SubsidyRequest/Attribute:resolution_code+' => '',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:other' => 'other',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:system update' => 'system update',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:SubsidyRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:SubsidyRequest/Attribute:solution' => 'Solution',
	'Class:SubsidyRequest/Attribute:solution+' => '',
	'Class:SubsidyRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:SubsidyRequest/Attribute:pending_reason+' => '',
	'Class:SubsidyRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:SubsidyRequest/Attribute:parent_request_id+' => '',
	'Class:SubsidyRequest/Attribute:parent_incident_id' => 'Parent incident',
	'Class:SubsidyRequest/Attribute:parent_incident_id+' => '',
	'Class:SubsidyRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:SubsidyRequest/Attribute:parent_request_ref+' => '',
	'Class:SubsidyRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:SubsidyRequest/Attribute:parent_problem_id+' => '',
	'Class:SubsidyRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:SubsidyRequest/Attribute:parent_problem_ref+' => '',
	'Class:SubsidyRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:SubsidyRequest/Attribute:parent_change_id+' => '',
	'Class:SubsidyRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:SubsidyRequest/Attribute:parent_change_ref+' => '',
	'Class:SubsidyRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:SubsidyRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:SubsidyRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:SubsidyRequest/Attribute:user_satisfaction+' => '',
	'Class:SubsidyRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:SubsidyRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:SubsidyRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied',
	'Class:SubsidyRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:SubsidyRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified',
	'Class:SubsidyRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:SubsidyRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:SubsidyRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:SubsidyRequest/Attribute:user_comment' => 'User comment',
	'Class:SubsidyRequest/Attribute:user_comment+' => '',
	'Class:SubsidyRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:SubsidyRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:SubsidyRequest/Attribute:instance_id' => 'Instance',
	'Class:SubsidyRequest/Attribute:instance_id+' => '',
	'Class:SubsidyRequest/Attribute:entity_id' => 'Entity',
	'Class:SubsidyRequest/Attribute:entity_id+' => '',
	'Class:SubsidyRequest/Attribute:manager_id' => 'Manager',
	'Class:SubsidyRequest/Attribute:manager_id+' => '',
	'Class:SubsidyRequest/Attribute:deposit' => 'Deposit',
	'Class:SubsidyRequest/Attribute:deposit+' => '',
	'Class:SubsidyRequest/Attribute:expecteddepositdate' => 'Expected deposit date',
	'Class:SubsidyRequest/Attribute:expecteddepositdate+' => '',
	'Class:SubsidyRequest/Attribute:depositdate' => 'Deposit date',
	'Class:SubsidyRequest/Attribute:depositdate+' => '',
	'Class:SubsidyRequest/Attribute:payment' => 'Payment',
	'Class:SubsidyRequest/Attribute:payment+' => '',
	'Class:SubsidyRequest/Attribute:expectedpaymentdate' => 'Expected payment date',
	'Class:SubsidyRequest/Attribute:expectedpaymentdate+' => '',
	'Class:SubsidyRequest/Attribute:paymentdate' => 'Payment date',
	'Class:SubsidyRequest/Attribute:paymentdate+' => '',
	'Class:SubsidyRequest/Attribute:budgetpost_account' => 'Budgetpost account',
	'Class:SubsidyRequest/Attribute:budgetpost_account+' => '',
	'Class:SubsidyRequest/Attribute:budgetpost_policyitem' => 'Budgetpost policy item',
	'Class:SubsidyRequest/Attribute:budgetpost_policyitem+' => '',
	'Class:SubsidyRequest/Attribute:total' => 'Total',
	'Class:SubsidyRequest/Attribute:total+' => '',
	'Class:SubsidyRequest/Attribute:id_agenda_item' => 'Agenda item',
	'Class:SubsidyRequest/Attribute:id_agenda_item+' => '',
	'Class:SubsidyRequest/Attribute:communicationhistory' => 'Communication history',
	'Class:SubsidyRequest/Attribute:communicationhistory+' => '',
	'Class:SubsidyRequest/Attribute:paymentterms' => 'Payment terms',
	'Class:SubsidyRequest/Attribute:paymentterms+' => '',
	'Class:SubsidyRequest/Attribute:private_log' => 'Terms and conditions',
	'Class:SubsidyRequest/Attribute:private_log+' => '',
	'Class:SubsidyRequest/Attribute:external_ref' => 'External refnumber',
	'Class:SubsidyRequest/Attribute:external_ref+' => 'External referencenumber',
	'Ticket:financial' => 'Financial',
	'Ticket:financial+' => '',
	
	
	'Class:SubsidyRequest/Stimulus:ev_assign' => 'Assign',
	'Class:SubsidyRequest/Stimulus:ev_assign+' => '',
	'Class:SubsidyRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:SubsidyRequest/Stimulus:ev_reassign+' => '',
	'Class:SubsidyRequest/Stimulus:ev_approve' => 'Approve',
	'Class:SubsidyRequest/Stimulus:ev_approve+' => '',
	'Class:SubsidyRequest/Stimulus:ev_reject' => 'Reject',
	'Class:SubsidyRequest/Stimulus:ev_reject+' => '',
	'Class:SubsidyRequest/Stimulus:ev_pending' => 'Pending',
	'Class:SubsidyRequest/Stimulus:ev_pending+' => '',
	'Class:SubsidyRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:SubsidyRequest/Stimulus:ev_timeout+' => '',
	'Class:SubsidyRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:SubsidyRequest/Stimulus:ev_autoresolve+' => '',
	'Class:SubsidyRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:SubsidyRequest/Stimulus:ev_autoclose+' => '',
	'Class:SubsidyRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:SubsidyRequest/Stimulus:ev_resolve+' => '',
	'Class:SubsidyRequest/Stimulus:ev_close' => 'Close this request',
	'Class:SubsidyRequest/Stimulus:ev_close+' => '',
	'Class:SubsidyRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:SubsidyRequest/Stimulus:ev_reopen+' => '',
	'Class:SubsidyRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:SubsidyRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:SubsidyRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
	'Class:SubsidyRequest/Attribute:reminder' => 'Reminder',
	'Class:SubsidyRequest/Attribute:reminder+' => 'Reminder',	

	'Class:SubsidyRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:SubsidyRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));
