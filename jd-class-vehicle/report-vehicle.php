<?php

	/**
	 * Short description for class
	 *
	 * Long description for class (if any)...
	 *
	 * @copyright  2018 jbostoen
	 * @version    Release: @0.1.180411@
	 * @link       https://github.com/jbostoen
	 * @since      Class available since Release 1.2.0
	 */ 
 
	class iTop_Rest {
		
		/* URL of the iTop web services, including version. This is a test environment for us. */
		private $url = "http://ww03/web/webservices/rest.php?version=1.3";
		
		/* Credentials of an iTop user */
		private $user = "admin";
		private $password = "admin";
		
		
		/**
		 * Sends data to the iTop REST services and returns data (decoded JSON)
		 *
		 * @param $params Array containing a key 'serialnumber' (of PhysicalDevice) and contact_id 
		 * 
		 * @return Array containing the data obtained from the iTop REST Services
		 */ 
		function post( $jsonData ) {
			
			//  Initiate curl
			$ch = curl_init();
			 
			// Disable SSL verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");        
			

			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, $this->user . ":" . $this->password );

			 
			// Set the url
			curl_setopt($ch, CURLOPT_URL, $this->url );
			
			$postString = "".
				"&auth_user=".$this->user.
				"&auth_pwd=".$this->password.
				"&json_data=".json_encode( $jsonData );
			 
				
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);                                                                  
			curl_setopt($ch, CURLOPT_HTTPHEADER, [                                                                                
				"Content-Length: " . strlen($postString)                                                                       
			]);                                          
						
			// Execute
			$result = curl_exec($ch);
			 			
			
			// Closing
			curl_close($ch);
  
  
			return json_decode($result, true);
		
		}	 
		
	}
	 
	
	/* Examples */
 
	$i = new iTop_Rest();
	
	$res = $i->post([
		"operation" => "core/get", 
		"class" => "Vehicle",
		"key" => "SELECT Vehicle WHERE id =".$_REQUEST["id"],
		"output_fields" => "name, organization_name, brand_name, model_name, licenseplate, documents_list"
	]);
	
	# Template
	require_once("../../lib/vendor/autoload.php" );


	$loader = new Twig_Loader_Filesystem("C:/xampp/htdocs/iTop/web/reports");
	$twig = new Twig_Environment($loader, array(
			// 'cache' => '/path/to/compilation_cache',
	));
	
	
	// echo json_encode($res, JSON_PRETTY_PRINT );
	$template = $twig->load("twig.html"); 
	
	$item = $res["objects"]["Vehicle::".$_REQUEST["id"]]["fields"];
	
	// echo "<pre>".print_r($item,true)."</pre>";
	
	
	echo $template->render(array(
		"item" => $item 
	));
	
	
//	print_r($res["objects"]["Vehicle::".$_REQUEST["id"]]["fields"]["vehiclepicture"]);

	// $pic = $res["objects"]["Vehicle::".$_REQUEST["id"]]["fields"]["vehiclepicture"];

   // echo '<img src="data:'.$pic["mimetype"].';base64, '.$pic["data"].'" alt="Red dot" />';
	
?>




