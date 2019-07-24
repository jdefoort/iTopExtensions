<?php


    class PopupMenuExtension_Google_BrandModel implements iPopupMenuExtension
    {
		public static function EnumItems($iMenuId, $param) {
			if ($iMenuId == self::MENU_OBJDETAILS_ACTIONS) {
				
				 $oObject = $param;			 
				 $aAttributeList = Metamodel::GetAttributesList(get_class($oObject));
				 
				if( in_array('brand_name', $aAttributeList) == true && in_array('model_name', $aAttributeList) == true ) {
					
					if( $oObject->Get('brand_name') != '' && $oObject->Get('model_name') != '' ) {
				 
						$sUID = 'VehicleExtension-Monitoring'; // Make sure that each menu item has a unique "ID"
						$sLabel = Dict::S('UI:Tab:Show_Google'); // Dict:S('UI:Menu:test')
						$sURL = 'https://www.google.be/search?q=%22'. $oObject->Get('brand_name') . ' ' . $oObject->Get('model_name') . '%22';
						$sTarget = '_BLANK';

						$oMenuItem = new URLPopupMenuItem($sUID, $sLabel, $sURL, $sTarget);

						return [ $oMenuItem ];
						
					}
				}
			 
			}
			 
			return array();
			
       }
    }
	