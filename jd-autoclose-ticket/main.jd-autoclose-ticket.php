<?php
// Copyright (C) 2012-2016 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA


/**
 * Module jd-autoclose-ticket
 *
 */


class AutoCloseTicket implements iBackgroundProcess
{
	public function GetPeriodicity()
	{	
		return 86400; // Once a day
	}

	public function Process($iTimeLimit)
	{
		
		$ticketTypes = MetaModel::GetModuleSetting('jd-autoclose-ticket', 'ticket_types', array('Incident', 'UserRequest') );
		$aReport = array();
		
		foreach( $ticketTypes as $ticketType ) {
			
			if (MetaModel::IsValidClass( $ticketType ))
			{
				// Get Resolved user request to be closed automatically according to request_closure_delay set for the customer
				$iAutoCloseDelay = MetaModel::GetModuleSetting('jd-autoclose-ticket', strtolower($ticketType).'_autoclose_delay', '');
				$oSetTicket = new DBObjectSet(DBObjectSearch::FromOQL("SELECT ".$ticketType." AS t WHERE t.status = 'resolved' AND t.resolution_date <= DATE_SUB(NOW(), INTERVAL ".$iAutoCloseDelay." DAY)"));
				$oSetTicket->OptimizeColumnLoad(array()); // Optimize the query, we'll do a reload for each ticket to actually process but it's peanuts
				while ((time() < $iTimeLimit) && $oToClose = $oSetTicket->Fetch())
				{
					$oToClose->ApplyStimulus('ev_close');
					//$oToEscalate->Set('tto_escalation_deadline', null);
					$oToClose->DBUpdate();
					$aReport['reached Auto close deadline'][] = $oToClose->Get('ref');
				}
			}
			
		}
		
	
		// Report back

		$aStringReport = array();
		foreach ($aReport as $sOperation => $aTicketRefs)
		{
			if (count($aTicketRefs) > 0)
			{
				$aStringReport[] = $sOperation.': '.count($aTicketRefs).' {'.implode(', ', $aTicketRefs).'}';
			}
		}
		if (count($aStringReport) == 0)
		{
			return "No ticket to process";
			echo "No ticket to process";
		}
		else
		{

			return "Some tickets were closed - ".implode('; ', $aStringReport);
			echo "Some tickets were closed - ".implode('; ', $aStringReport);

		}
	}
}


?>
