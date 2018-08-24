<?php


    class VehicleExtension implements iPopupMenuExtension
    {
       public static function EnumItems($iMenuId, $param)
       {
          if ($iMenuId == self::MENU_OBJDETAILS_ACTIONS)
          {
             $oObject = $param;
             if ($oObject instanceof Vehicle)
             {
                 $sUID = 'VehicleExtension-Monitoring'; // Make sure that each menu item has a unique "ID"
                 $sLabel = 'Show Google';
                 $sURL = 'https://www.google.com/search?q='.$oObject->Get('model_name');
                 $sTarget = '_blank';
                 $oMenuItem = new URLPopupMenuItem($sUID, $sLabel, $sURL, $sTarget);
				 
				 
                 $sUID = 'VehicleExtension-Monitoring2'; // Make sure that each menu item has a unique "ID"
                 $sLabel = 'Show Vehiclereport';
                 $sURL = '../extensions/jd-class-vehicle/report-vehicle.php?id='.$oObject->Get('id');
                 $sTarget = '_blank';
                 $oMenuItem2 = new URLPopupMenuItem($sUID, $sLabel, $sURL, $sTarget);
				 
                 return array($oMenuItem,  $oMenuItem2 );
             }
          }
		  
          return array();
       }
    }

	?>