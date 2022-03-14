  <?php 

  $url = 'https://api.github.com/repos/marinedeveloper/test2/commits';
  $ch = curl_init($url);
	
		curl_setopt_array($ch, array(
			CURLOPT_URL => $url,
		    CURLOPT_SSL_VERIFYPEER => false,
		     CURLOPT_USERAGENT => 'marinedeveloper',
			 CURLOPT_RETURNTRANSFER => true,
		));
        
		$response = curl_exec($ch);

		curl_close($ch);

		$string = json_encode($response);
		$json = json_decode($string, true);

        echo '<pre>';
		print_r($json);
		echo '</pre>';

		echo $json->author;
	
	
?> 
   

  
