  <?php 

  $url = 'https://api.github.com/repos/marinedeveloper/test/commits';
$ch = curl_init();
	
		curl_setopt_array($ch, array(
			CURLOPT_URL => $url,
		    CURLOPT_SSL_VERIFYPEER => false,
		     CURLOPT_USERAGENT => 'marinedeveloper',
			 CURLOPT_RETURNTRANSFER => true,
		));
        
		$response = curl_exec($ch);

		curl_close($ch);
	
		$json = json_decode($response, true);
		print_r($json);

        echo $json[0]->committer;
	
	
?> 
   

  
