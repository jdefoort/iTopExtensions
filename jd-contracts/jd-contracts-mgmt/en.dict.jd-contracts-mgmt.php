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
'Menu:ContractManagement' => 'Contract Management',
'Menu:ContractManagement+' => 'Contract Management',
'Menu:ContractOverview' => 'Overview',
'Menu:ContractOverview+' => '',
'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contracts by service level',
'UI-ServiceManagementMenu-ContractsByStatus' => 'Contracts by status',
'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contracts ending in less then 30 days',

'Menu:ThirdPartyProviderContract' => 'Contracts',
'Menu:ThirdPartyProviderContract+' => 'Contracts',


));

//
// Class: Organization
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Organization/Attribute:deliverymodel_id' => 'Delivery model',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => 'Delivery model name',

));


//
// Class: ContractType
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ContractType' => 'Contract Type',
	'Class:ContractType+' => '',
));

//
// Class: Contract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ThirdPartyContract' => 'ThirdPartyContract',
	'Class:ThirdPartyContract+' => '',
	'Class:ThirdPartyContract/Attribute:name' => 'Name',
	'Class:ThirdPartyContract/Attribute:name+' => '',
	'Class:ThirdPartyContract/Attribute:org_id' => 'Customer',
	'Class:ThirdPartyContract/Attribute:org_id+' => '',
	'Class:ThirdPartyContract/Attribute:organization_name' => 'Customer Name',
	'Class:ThirdPartyContract/Attribute:organization_name+' => 'Common name',
	'Class:ThirdPartyContract/Attribute:contacts_list' => 'Contacts',
	'Class:ThirdPartyContract/Attribute:contacts_list+' => 'All the contacts for this customer',
	'Class:ThirdPartyContract/Attribute:documents_list' => 'Documents',
	'Class:ThirdPartyContract/Attribute:documents_list+' => 'All the documents for this customer',
	'Class:ThirdPartyContract/Attribute:description' => 'Description',
	'Class:ThirdPartyContract/Attribute:description+' => '',
	'Class:ThirdPartyContract/Attribute:start_date' => 'Start date',
	'Class:ThirdPartyContract/Attribute:start_date+' => '',
	'Class:ThirdPartyContract/Attribute:end_date' => 'End date',
	'Class:ThirdPartyContract/Attribute:end_date+' => '',
	'Class:ThirdPartyContract/Attribute:cost' => 'Cost',
	'Class:ThirdPartyContract/Attribute:cost+' => '',
	'Class:ThirdPartyContract/Attribute:cost_energy' => 'Energycost per year',
	'Class:ThirdPartyContract/Attribute:cost_energy+' => '',
	'Class:ThirdPartyContract/Attribute:ThirdPartyContracttype_id' => 'ThirdPartyContract type',
	'Class:ThirdPartyContract/Attribute:ThirdPartyContracttype_id+' => '',
	'Class:ThirdPartyContract/Attribute:ThirdPartyContracttype_name' => 'ThirdPartyContract type Name',
	'Class:ThirdPartyContract/Attribute:ThirdPartyContracttype_name+' => '',
	'Class:ThirdPartyContract/Attribute:billing_frequency' => 'Billing frequency',
	'Class:ThirdPartyContract/Attribute:billing_frequency+' => '',
	'Class:ThirdPartyContract/Attribute:cost_unit' => 'Cost unit',
	'Class:ThirdPartyContract/Attribute:cost_unit+' => '',
	'Class:ThirdPartyContract/Attribute:provider_id' => 'Provider',
	'Class:ThirdPartyContract/Attribute:provider_id+' => '',
	'Class:ThirdPartyContract/Attribute:providercontact_id' => 'Contactperson',
	'Class:ThirdPartyContract/Attribute:providercontact_id+' => 'Contactperson',
	'Class:ThirdPartyContract/Attribute:provider_name' => 'Provider Name',
	'Class:ThirdPartyContract/Attribute:provider_name+' => 'Common name',
	'Class:ThirdPartyContract/Attribute:status' => 'Status',
	'Class:ThirdPartyContract/Attribute:status+' => '',
	'Class:ThirdPartyContract/Attribute:status/Value:implementation' => 'implementation',
	'Class:ThirdPartyContract/Attribute:status/Value:implementation+' => 'implementation',
	'Class:ThirdPartyContract/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:ThirdPartyContract/Attribute:status/Value:obsolete+' => 'obsolete',
	'Class:ThirdPartyContract/Attribute:status/Value:production' => 'production',
	'Class:ThirdPartyContract/Attribute:status/Value:production+' => 'production',
	'Class:ThirdPartyContract/Attribute:contract_future' => 'Contract future',
	'Class:ThirdPartyContract/Attribute:contract_future+' => '',
	'Class:ThirdPartyContract/Attribute:contract_future/Value:unchanged' => 'Unchanged',
	'Class:ThirdPartyContract/Attribute:contract_future/Value:unchanged+' => 'Unchanged',
	'Class:ThirdPartyContract/Attribute:contract_future/Value:to_review' => 'To review',
	'Class:ThirdPartyContract/Attribute:contract_future/Value:to_review+' => 'To review',
	'Class:ThirdPartyContract/Attribute:contract_future/Value:to_cancel' => 'To cancel',
	'Class:ThirdPartyContract/Attribute:contract_future/Value:to_cancel+' => 'To cancel',
	'Class:ThirdPartyContract/Attribute:indexed' => 'Indexed',
	'Class:ThirdPartyContract/Attribute:indexed+' => '',
	'Class:ThirdPartyContract/Attribute:indexed_energy' => 'Indexed',
	'Class:ThirdPartyContract/Attribute:indexed_energy+' => '',
	'Class:ThirdPartyContract/Attribute:start_index' => 'Startyear indexation',
	'Class:ThirdPartyContract/Attribute:start_index+' => '',
	'Class:ThirdPartyContract/Attribute:indexed/Value:yes' => 'Yes',
	'Class:ThirdPartyContract/Attribute:indexed/Value:yes+' => 'Yes',
	'Class:ThirdPartyContract/Attribute:indexed/Value:no' => 'No',
	'Class:ThirdPartyContract/Attribute:indexed/Value:no+' => 'No',
	'Class:ThirdPartyContract/Attribute:indexed_energy/Value:yes' => 'Yes',
	'Class:ThirdPartyContract/Attribute:indexed_energy/Value:yes+' => 'Yes',
	'Class:ThirdPartyContract/Attribute:indexed_energy/Value:no' => 'No',
	'Class:ThirdPartyContract/Attribute:indexed_energy/Value:no+' => 'No',
	'Class:ThirdPartyContract/Attribute:finalclass' => 'ThirdPartyContract sub-class',
	'Class:ThirdPartyContract/Attribute:finalclass+' => 'Name of the final class',
));
//
// Class: CustomerContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:CustomerContract' => 'Customer Contract',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:services_list' => 'Services',
	'Class:CustomerContract/Attribute:services_list+' => 'All the services purchased for this contract',
));

//
// Class: ThirdPartyProviderContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ThirdPartyProviderContract' => 'Provider Contract',
	'Class:ThirdPartyProviderContract+' => '',
	'Class:ThirdPartyProviderContract/Attribute:functionalcis_list' => 'CIs',
	'Class:ThirdPartyProviderContract/Attribute:functionalcis_list+' => 'All the configuration items covered by this provider contract',
	'Class:ThirdPartyProviderContract/Attribute:sla' => 'SLA',
	'Class:ThirdPartyProviderContract/Attribute:sla+' => 'Service Level Agreement',
	'Class:ThirdPartyProviderContract/Attribute:coverage' => 'Service hours',
	'Class:ThirdPartyProviderContract/Attribute:coverage+' => '',
	'Class:ThirdPartyProviderContract/Attribute:cancellation_conditions' => 'Cancellation conditions',
	'Class:ThirdPartyProviderContract/Attribute:cancellation_conditions+' => '',	
	'Class:ThirdPartyProviderContract/Attribute:accountancy_key' => 'Accountancy key',
	'Class:ThirdPartyProviderContract/Attribute:accountancy_key+' => '',
	'Class:ThirdPartyProviderContract/Attribute:comment_enddate' => 'Comment on enddate',
	'Class:ThirdPartyProviderContract/Attribute:comment_enddate+' => '',
	'Class:ThirdPartyProviderContract/Attribute:warranty_period' => 'Warranty period',
	'Class:ThirdPartyProviderContract/Attribute:warranty_period+' => '',
	'Class:ThirdPartyProviderContract/Attribute:payment_date' => 'Payment date',
	'Class:ThirdPartyProviderContract/Attribute:payment_date+' => '',
	'Class:ThirdPartyProviderContract/Attribute:receipts' => 'Receipts',
	'Class:ThirdPartyProviderContract/Attribute:receipts+' => '',
	'Class:ThirdPartyProviderContract/Attribute:deposit' => 'Deposit',
	'Class:ThirdPartyProviderContract/Attribute:deposit+' => '',
	'Class:ThirdPartyProviderContract/Attribute:relevant_office' => 'Relevant Office',
	'Class:ThirdPartyProviderContract/Attribute:relevant_office+' => '',
	'Class:ThirdPartyProviderContract/Attribute:contracttype_id' => 'Contract type',
	'Class:ThirdPartyProviderContract/Attribute:contracttype_id+' => '',
	'Class:ThirdPartyProviderContract/Attribute:contracttype_name' => 'Contract type name',
	'Class:ThirdPartyProviderContract/Attribute:contracttype_name+' => '',
	'Class:ThirdPartyProviderContract/Attribute:cost_currency' => 'Cost Currency',
	'Class:ThirdPartyProviderContract/Attribute:cost_currency+' => '',
	'Class:ThirdPartyProviderContract/Attribute:cost_currency/Value:dollars' => 'Dollars',
	'Class:ThirdPartyProviderContract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:ThirdPartyProviderContract/Attribute:cost_currency/Value:euro' => 'Euro',
	'Class:ThirdPartyProviderContract/Attribute:cost_currency/Value:euro+' => '',
	'Class:ThirdPartyProviderContract/Attribute:budget_manager' => 'Budget manager',
	'Class:ThirdPartyProviderContract/Attribute:budget_manager+' => '',
	'Class:ThirdPartyProviderContract/Attribute:crab_address_id' => 'Address',
	'Class:ThirdPartyProviderContract/Attribute:crab_address_id+' => '',

	
	'Contracts:dates' => 'Dates',
	'Contracts:dates+' => '',
	'Contracts:money' => 'Financially',
	'Contracts:money+' => '',
	'Contracts:baseinfo' => 'General Information',
	'Contracts:baseinfo+' => '',
	'Contracts:moreinfo' => 'Contract Information',
	'Contracts:moreinfo+' => '',
));

//
// Class: lnkContactToContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContactToContract' => 'Link Contact / Contract',
	'Class:lnkContactToContract+' => '',
	'Class:lnkContactToContract/Attribute:contract_id' => 'Contract',
	'Class:lnkContactToContract/Attribute:contract_id+' => '',
	'Class:lnkContactToContract/Attribute:contract_name' => 'Contract Name',
	'Class:lnkContactToContract/Attribute:contract_name+' => '',
	'Class:lnkContactToContract/Attribute:contact_id' => 'Contact',
	'Class:lnkContactToContract/Attribute:contact_id+' => '',
	'Class:lnkContactToContract/Attribute:contact_name' => 'Contact Name',
	'Class:lnkContactToContract/Attribute:contact_name+' => '',
));

//
// Class: lnkContractToDocument
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContractToDocument' => 'Link Contract / Document',
	'Class:lnkContractToDocument+' => '',
	'Class:lnkContractToDocument/Attribute:contract_id' => 'Contract',
	'Class:lnkContractToDocument/Attribute:contract_id+' => '',
	'Class:lnkContractToDocument/Attribute:contract_name' => 'Contract Name',
	'Class:lnkContractToDocument/Attribute:contract_name+' => '',
	'Class:lnkContractToDocument/Attribute:document_id' => 'Document',
	'Class:lnkContractToDocument/Attribute:document_id+' => '',
	'Class:lnkContractToDocument/Attribute:document_name' => 'Document Name',
	'Class:lnkContractToDocument/Attribute:document_name+' => '',
));

//
// Class: lnkFunctionalCIToProviderContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkFunctionalCIToProviderContract' => 'Link FunctionalCI / ProviderContract',
	'Class:lnkFunctionalCIToProviderContract+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id' => 'Provider contract',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name' => 'Provider contract Name',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id' => 'CI',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name' => 'CI Name',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name+' => '',
));

//
// Class: ServiceFamily
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ServiceFamily' => 'Service Family',
	'Class:ServiceFamily+' => '',
	'Class:ServiceFamily/Attribute:name' => 'Name',
	'Class:ServiceFamily/Attribute:name+' => '',
	'Class:ServiceFamily/Attribute:icon' => 'Icon',
	'Class:ServiceFamily/Attribute:icon+' => '',
	'Class:ServiceFamily/Attribute:services_list' => 'Services',
	'Class:ServiceFamily/Attribute:services_list+' => 'All the services in this category',
));

//
// Class: Service
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Service' => 'Service',
	'Class:Service+' => '',
	'Class:Service/Attribute:name' => 'Name',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:org_id' => 'Provider',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:organization_name' => 'Provider Name',
	'Class:Service/Attribute:organization_name+' => '',
	'Class:Service/Attribute:servicefamily_id' => 'Service Family',
	'Class:Service/Attribute:servicefamily_id+' => '',
	'Class:Service/Attribute:servicefamily_name' => 'Service Family Name',
	'Class:Service/Attribute:servicefamily_name+' => '',
	'Class:Service/Attribute:description' => 'Description',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:documents_list' => 'Documents',
	'Class:Service/Attribute:documents_list+' => 'All the documents linked to the service',
	'Class:Service/Attribute:contacts_list' => 'Contacts',
	'Class:Service/Attribute:contacts_list+' => 'All the contacts for this service',
	'Class:Service/Attribute:status' => 'Status',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:implementation' => 'implementation',
	'Class:Service/Attribute:status/Value:implementation+' => 'implementation',
	'Class:Service/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => 'production',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:icon' => 'Icon',
	'Class:Service/Attribute:icon+' => '',
	'Class:Service/Attribute:customercontracts_list' => 'Customer contracts',
	'Class:Service/Attribute:customercontracts_list+' => 'All the customer contracts that have purchased this service',
	'Class:Service/Attribute:providercontracts_list' => 'Provider contracts',
	'Class:Service/Attribute:providercontracts_list+' => 'All the provider contracts to support this service',
	'Class:Service/Attribute:functionalcis_list' => 'Depends on CIs',
	'Class:Service/Attribute:functionalcis_list+' => 'All the configuration items that are used to provide this service',
	'Class:Service/Attribute:servicesubcategories_list' => 'Service sub categories',
	'Class:Service/Attribute:servicesubcategories_list+' => 'All the sub categories for this service',
));

//
// Class: lnkDocumentToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDocumentToService' => 'Link Document / Service',
	'Class:lnkDocumentToService+' => '',
	'Class:lnkDocumentToService/Attribute:service_id' => 'Service',
	'Class:lnkDocumentToService/Attribute:service_id+' => '',
	'Class:lnkDocumentToService/Attribute:service_name' => 'Service Name',
	'Class:lnkDocumentToService/Attribute:service_name+' => '',
	'Class:lnkDocumentToService/Attribute:document_id' => 'Document',
	'Class:lnkDocumentToService/Attribute:document_id+' => '',
	'Class:lnkDocumentToService/Attribute:document_name' => 'Document Name',
	'Class:lnkDocumentToService/Attribute:document_name+' => '',
));

//
// Class: lnkContactToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContactToService' => 'Link Contact / Service',
	'Class:lnkContactToService+' => '',
	'Class:lnkContactToService/Attribute:service_id' => 'Service',
	'Class:lnkContactToService/Attribute:service_id+' => '',
	'Class:lnkContactToService/Attribute:service_name' => 'Service Name',
	'Class:lnkContactToService/Attribute:service_name+' => '',
	'Class:lnkContactToService/Attribute:contact_id' => 'Contact',
	'Class:lnkContactToService/Attribute:contact_id+' => '',
	'Class:lnkContactToService/Attribute:contact_name' => 'Contact Name',
	'Class:lnkContactToService/Attribute:contact_name+' => '',
));

//
// Class: ServiceSubcategory
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ServiceSubcategory' => 'Service Subcategory',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => 'Name',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => 'Description',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => 'Service',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => 'Service name',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:ServiceSubcategory/Attribute:request_type' => 'Request type',
	'Class:ServiceSubcategory/Attribute:request_type+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => 'incident',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => 'incident',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => 'service request',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => 'service request',
	'Class:ServiceSubcategory/Attribute:status' => 'Status',
	'Class:ServiceSubcategory/Attribute:status+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => 'implementation',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => 'implementation',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => 'obsolete',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => 'production',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => 'production',
));

//
// Class: SLA
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SLA' => 'SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => 'Name',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:description' => 'description',
	'Class:SLA/Attribute:description+' => '',
	'Class:SLA/Attribute:org_id' => 'Provider',
	'Class:SLA/Attribute:org_id+' => '',
	'Class:SLA/Attribute:organization_name' => 'Provider Name',
	'Class:SLA/Attribute:organization_name+' => 'Common name',
	'Class:SLA/Attribute:slts_list' => 'SLTs',
	'Class:SLA/Attribute:slts_list+' => 'All the service level targets for this SLA',
	'Class:SLA/Attribute:customercontracts_list' => 'Customer contracts',
	'Class:SLA/Attribute:customercontracts_list+' => 'All the customer contracts using this SLA',
));

//
// Class: SLT
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SLT' => 'SLT',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => 'Name',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:priority' => 'Priority',
	'Class:SLT/Attribute:priority+' => '',
	'Class:SLT/Attribute:priority/Value:1' => 'critical',
	'Class:SLT/Attribute:priority/Value:1+' => 'critical',
	'Class:SLT/Attribute:priority/Value:2' => 'high',
	'Class:SLT/Attribute:priority/Value:2+' => 'high',
	'Class:SLT/Attribute:priority/Value:3' => 'medium',
	'Class:SLT/Attribute:priority/Value:3+' => 'medium',
	'Class:SLT/Attribute:priority/Value:4' => 'low',
	'Class:SLT/Attribute:priority/Value:4+' => 'low',
	'Class:SLT/Attribute:request_type' => 'Request type',
	'Class:SLT/Attribute:request_type+' => '',
	'Class:SLT/Attribute:request_type/Value:incident' => 'incident',
	'Class:SLT/Attribute:request_type/Value:incident+' => 'incident',
	'Class:SLT/Attribute:request_type/Value:service_request' => 'service request',
	'Class:SLT/Attribute:request_type/Value:service_request+' => 'service request',
	'Class:SLT/Attribute:metric' => 'Metric',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:tto' => 'TTO',
	'Class:SLT/Attribute:metric/Value:tto+' => 'TTO',
	'Class:SLT/Attribute:metric/Value:ttr' => 'TTR',
	'Class:SLT/Attribute:metric/Value:ttr+' => 'TTR',
	'Class:SLT/Attribute:value' => 'Value',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:unit' => 'Unit',
	'Class:SLT/Attribute:unit+' => '',
	'Class:SLT/Attribute:unit/Value:hours' => 'hours',
	'Class:SLT/Attribute:unit/Value:hours+' => 'hours',
	'Class:SLT/Attribute:unit/Value:minutes' => 'minutes',
	'Class:SLT/Attribute:unit/Value:minutes+' => 'minutes',
));

//
// Class: lnkSLAToSLT
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSLAToSLT' => 'Link SLA / SLT',
	'Class:lnkSLAToSLT+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_id' => 'SLA',
	'Class:lnkSLAToSLT/Attribute:sla_id+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_name' => 'SLA Name',
	'Class:lnkSLAToSLT/Attribute:sla_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_id' => 'SLT',
	'Class:lnkSLAToSLT/Attribute:slt_id+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_name' => 'SLT Name',
	'Class:lnkSLAToSLT/Attribute:slt_name+' => '',
));

//
// Class: lnkCustomerContractToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkCustomerContractToService' => 'Link Customer Contract / Service',
	'Class:lnkCustomerContractToService+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => 'Customer contract',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => 'Customer contract Name',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_id' => 'Service',
	'Class:lnkCustomerContractToService/Attribute:service_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_name' => 'Service Name',
	'Class:lnkCustomerContractToService/Attribute:service_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => 'SLA',
	'Class:lnkCustomerContractToService/Attribute:sla_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => 'SLA Name',
	'Class:lnkCustomerContractToService/Attribute:sla_name+' => '',
));

//
// Class: lnkProviderContractToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkProviderContractToService' => 'Link Provider Contract / Service',
	'Class:lnkProviderContractToService+' => '',
	'Class:lnkProviderContractToService/Attribute:service_id' => 'Service',
	'Class:lnkProviderContractToService/Attribute:service_id+' => '',
	'Class:lnkProviderContractToService/Attribute:service_name' => 'Service Name',
	'Class:lnkProviderContractToService/Attribute:service_name+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_id' => 'Provider contract',
	'Class:lnkProviderContractToService/Attribute:providercontract_id+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_name' => 'Provider contract Name',
	'Class:lnkProviderContractToService/Attribute:providercontract_name+' => '',
));

//
// Class: lnkFunctionalCIToService
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkFunctionalCIToService' => 'Link FunctionalCI / Service',
	'Class:lnkFunctionalCIToService+' => '',
	'Class:lnkFunctionalCIToService/Attribute:service_id' => 'Service',
	'Class:lnkFunctionalCIToService/Attribute:service_id+' => '',
	'Class:lnkFunctionalCIToService/Attribute:service_name' => 'Service Name',
	'Class:lnkFunctionalCIToService/Attribute:service_name+' => '',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id' => 'CI',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name' => 'CI Name',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name+' => '',
));

//
// Class: DeliveryModel
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:DeliveryModel' => 'Delivery Model',
	'Class:DeliveryModel+' => '',
	'Class:DeliveryModel/Attribute:name' => 'Name',
	'Class:DeliveryModel/Attribute:name+' => '',
	'Class:DeliveryModel/Attribute:org_id' => 'Organization',
	'Class:DeliveryModel/Attribute:org_id+' => '',
	'Class:DeliveryModel/Attribute:organization_name' => 'Organization Name',
	'Class:DeliveryModel/Attribute:organization_name+' => 'Common name',
	'Class:DeliveryModel/Attribute:description' => 'Description',
	'Class:DeliveryModel/Attribute:description+' => '',
	'Class:DeliveryModel/Attribute:contacts_list' => 'Contacts',
	'Class:DeliveryModel/Attribute:contacts_list+' => 'All the contacts (Teams and Person) for this delivery model',
	'Class:DeliveryModel/Attribute:customers_list' => 'Customers',
	'Class:DeliveryModel/Attribute:customers_list+' => 'All the customers having this delivering model',
));

//
// Class: lnkDeliveryModelToContact
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDeliveryModelToContact' => 'Link Delivery Model / Contact',
	'Class:lnkDeliveryModelToContact+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => 'Delivery model',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => 'Delivery model name',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => 'Contact name',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => 'Role',
	'Class:lnkDeliveryModelToContact/Attribute:role_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => 'Role name',
	'Class:lnkDeliveryModelToContact/Attribute:role_name+' => '',
));


?>
