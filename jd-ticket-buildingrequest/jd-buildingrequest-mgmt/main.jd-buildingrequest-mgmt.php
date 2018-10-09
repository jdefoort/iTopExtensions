<?php
// Copyright (C) 2013 Combodo SARL
//
//   This file is a sample extension for iTop
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
 * Sample extension to show how adding menu items in iTop
 * This extension does nothing really useful but shows how to use the three possible
 * types of menu items:
 * 
 * - An URL to any web page
 * - A Javascript function call
 * - A separator (horizontal line in the menu)
 */
class AddMenuInfraGIS implements iPopupMenuExtension
{
	/**
	 * Get the list of items to be added to a menu.
	 *
	 * This method is called by the framework for each menu.
	 * The items will be inserted in the menu in the order of the returned array.
	 * @param int $iMenuId The identifier of the type of menu, as listed by the constants MENU_xxx
	 * @param mixed $param Depends on $iMenuId, see the constants defined above
	 * @return object[] An array of ApplicationPopupMenuItem or an empty array if no action is to be added to the menu
	 */
	public static function EnumItems($iMenuId, $param)
	{
		$aResult = array();
		
		switch($iMenuId) // type of menu in which to add menu items
		{
			/**
			 * Insert an item into the Actions menu of a list
			 *
			 * $param is a DBObjectSet containing the list of objects	
			 */	
			case iPopupMenuExtension::MENU_OBJLIST_ACTIONS:
			
			break;
			
			/**
			 * Insert an item into the Toolkit menu of a list
			 *
			 * $param is a DBObjectSet containing the list of objects
			 */	
			case iPopupMenuExtension::MENU_OBJLIST_TOOLKIT:
			break;
			
			/**
			 * Insert an item into the Actions menu on an object's details page
			 *
			 * $param is a DBObject instance: the object currently displayed
			 */	
			case iPopupMenuExtension::MENU_OBJDETAILS_ACTIONS:
			
			
			// Only for Contact: (i.e. Teams and Persons)
			if ($param instanceof BuildingRequest or $param instanceof BuildingViolation )
			{
				// add a separator
				$aResult[] = new SeparatorPopupMenuItem();
				
				$sAddress = $param->Get('crab_address_id_friendlyname');
				$sAddress = trim($sAddress); // "friendlyname" adds invisible spaces at the end, because it *could* show apartment number and sub number.
				$sAddress = urlencode($sAddress);
				
				$sLink = "https://infragis.infrax.be/infragis/raadplegen/?LAYOUT=Library://Gemeenten/Izegem/Layouts/raadplegen.WebLayout&niscode=36008&LOCALE=nl&mapname=raadplegen&layer=adres&key=adres&value=" . $sAddress;

								
				$aResult[] = new URLPopupMenuItem( "InfraGIS" , Dict::S('Tab:InfraGIS'), $sLink, '_blank');
				
				
			}
			break;
			
			/**
			 * Insert an item into the Dashboard menu
			 *
			 * The dashboad menu is shown on the top right corner of the page when
			 * a dashboard is being displayed.
			 * 
			 * $param is a Dashboard instance: the dashboard currently displayed
			 */	
			case iPopupMenuExtension::MENU_DASHBOARD_ACTIONS:
			break;
			
			/**
			 * Insert an item into the User menu (upper right corner of the page)
			 *
			 * $param is null
			 */
			case iPopupMenuExtension::MENU_USER_ACTIONS:
			break;
		
		}
		return $aResult;
	}
}



