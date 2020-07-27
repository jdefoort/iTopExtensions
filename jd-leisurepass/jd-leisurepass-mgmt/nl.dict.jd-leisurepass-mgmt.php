<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Dutch', array(

	// Dictionary entries go here
	
	
	
	'Errors/LeisurePass/ValueOfChecksTooHigh' => 'Fout: de totale waarde van de cheques zou hoger liggen dan de waarde van de pas.',
	'Errors/LeisurePass/OnePassPerYear' => 'Fout: er kan maar 1 pas per jaar per persoon uitgegeven worden.',
	
	// Actual Leisure Pass
	'LeisurePass:info' => 'Algemene info', 
	
			
	'Class:LeisurePass' => 'Vrijetijdspas',
	'Class:LeisurePass+' => 'Pas die bepaalt hoeveel cheques er uitgeschreven kunnen worden.',
	
	'Class:LeisurePass/Name' => '%1$s - %2$s (%3$s)',
	
	'Class:LeisurePass/Attribute:org_id' => 'Organisatie',
	'Class:LeisurePass/Attribute:org_id+' => 'Organisatie waartoe de klant behoort',
	
	'Class:LeisurePass/Attribute:person_id' => 'Persoon',
	'Class:LeisurePass/Attribute:person_id+' => 'Eigenaar van de pas',
	

	'Class:LeisurePass/Attribute:category_id' => 'Categorie',
	'Class:LeisurePass/Attribute:category_id+' => 'Categorie (waarde)', 
	
	// Plan for legacy categories: from_year_value
		 
	'Class:LeisurePass/Attribute:leisurecheck_list' => 'Overzicht cheques',
	'Class:LeisurePass/Attribute:leisurecheck_list+' => 'Overzicht van de gekoppelde vrijetijdscheques',

	'Class:LeisurePass/Attribute:created' => 'Uitgegeven op',
	'Class:LeisurePass/Attribute:created+' => 'Uitgegeven op',
	
	'Menu:SearchLeisurePass' => 'Zoek vrijetijdspassen',
	'Menu:SearchLeisurePass+' => 'Zoek vrijetijdspassen',
	'Menu:NewLeisurePass' => 'Nieuwe vrijetijdspas',
	'Menu:NewLeisurePass+' => 'Nieuwe vrijetijdspas',
	
	
	
	// Actual Leisure Check
	'LeisureCheck:info' => 'Algemene info', 
	
			
	'Class:LeisureCheck' => 'Vrijetijdscheque',
	'Class:LeisureCheck+' => 'Een vrijetijdscheque bevat info over een gebruikt bedrag van een Vrijetijdspas.',
	'Class:LeisureCheck/Name' => '%1$s',
	
	
	
	'Class:LeisureCheck/Attribute:pass_id' => 'Vrijetijdspas',
	'Class:LeisureCheck/Attribute:pass_id+' => 'Boeken op deze vrijetijdspas',
	'Class:LeisureCheck/Attribute:unique_number' => 'Unieke code',
	'Class:LeisureCheck/Attribute:unique_number+' => 'unieke code gebruikt voor de betaling',
	'Class:LeisureCheck/Attribute:customer_org_id' => 'Organisatie',
	'Class:LeisureCheck/Attribute:customer_org_id+' => 'Organisatie waar de bon bij gebruikt zal worden',
	'Class:LeisureCheck/Attribute:department_id' => 'Vestiging',
	'Class:LeisureCheck/Attribute:department_id+' => '',
	'Class:LeisureCheck/Attribute:organization_vat' => 'KBO nummer',
	'Class:LeisureCheck/Attribute:organization_vat+' => 'Het KBO nummer van de organisatie',
	'Class:LeisureCheck/Attribute:department_vat' => 'KBO nummer',
	'Class:LeisureCheck/Attribute:department_vat+' => 'Het KBO nummer van de dienst',
	'Class:LeisureCheck/Attribute:structured_note' => 'Gestructureerde mededeling',
	'Class:LeisureCheck/Attribute:structured_note+' => '+++123/1234/12345+++',
	'Class:LeisureCheck/Attribute:department_branch_number' => 'Vestigingsnummer',
	'Class:LeisureCheck/Attribute:department_branch_number+' => 'Vestigingsnummer (KBO / Vestigingsnummer)',
	'Class:LeisureCheck/Attribute:department_bank_account_number' => 'Rekeningnummer',
	'Class:LeisureCheck/Attribute:department_bank_account_number+' => 'Bankrekeningnummer van de vestiging',
	'Class:LeisureCheck/Attribute:organization_bank_account_number' => 'Rekeningnummer',
	'Class:LeisureCheck/Attribute:organization_bank_account_number+' => 'Bankrekeningnummer van de organisatie',
	
	'Class:LeisureCheck/Attribute:value' => 'Waarde',
	'Class:LeisureCheck/Attribute:value+' => 'Waarde van deze cheque',
	

	'Class:LeisureCheck/Attribute:objective' => 'Doel',
	'Class:LeisureCheck/Attribute:objective+' => 'Doel van deze check',
	'Class:LeisureCheck/Attribute:objective/Value:art' => 'Kunst',
	'Class:LeisureCheck/Attribute:objective/Value:culture' => 'Cultuur',
	'Class:LeisureCheck/Attribute:objective/Value:sports' => 'Sport',
	'Class:LeisureCheck/Attribute:objective/Value:youth' => 'Jeugd',
	'Class:LeisureCheck/Attribute:payment_status' => 'Betalingsstatus',
	'Class:LeisureCheck/Attribute:payment_status/Value:other' => 'Andere',
	'Class:LeisureCheck/Attribute:payment_status/Value:paid' => 'Betaald',
	'Class:LeisureCheck/Attribute:payment_status/Value:unpaid' => 'Nog niet betaald',	
	'Class:LeisureCheck/Attribute:payment_status/Value:pending' => 'Betaling gevraagd',	
	'Class:LeisureCheck/Attribute:payment_status/Value:exported_to_newhorizon' => 'Geëxporteerd naar New Horizon',	
	'Class:LeisureCheck/Attribute:remarks' => 'Opmerkingen',	
	'LeisureCheck:finance' => 'Financieel',
	'LeisurePass:picture' => 'Afbeelding',
	'Class:LeisurePass/Attribute:picture' => 'Afbeelding',
	
	
	'Class:LeisureCheck/Attribute:reason' => 'Reden',
	'Class:LeisureCheck/Attribute:reason+' => 'Reden voor deze cheque',
	
	'Class:LeisureCheck/Attribute:created' => 'Uitgegeven op',
	'Class:LeisureCheck/Attribute:created+' => 'Uitgegeven op',
	
	
	// Typology: Category
	'Class:LeisurePassCategory' => 'Vrijetijdspas - categorie',
	'Class:LeisurePassCategory+' => 'Verschillende categorieën voor de vrijetijdspas',
	'Class:LeisurePassCategory/name' => 'Naam',
	'Class:LeisurePassCategory/from' => 'Vanaf',
	'Class:LeisurePassCategory/until' => 'tot',
	'Class:LeisurePassCategory/value' => 'Waarde',

	
	// Menu
	'Menu:SearchLeisureCheck' => 'Zoek vrijetijdscheques',
	'Menu:SearchLeisureCheck+' => 'Zoek vrijetijdscheques',
	'Menu:NewLeisureCheck' => 'Nieuwe vrijetijdscheque',
	'Menu:NewLeisureCheck+' => 'Nieuwe vrijetijdscheque',
	'Menu:LeisurePass' => 'Vrijetijdspas',
	
));

 



?>


