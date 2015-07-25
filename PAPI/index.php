<?php 

		function get($url, $params=array()) 
		{	
		
			$url = $url.'?'.http_build_query($params, '', '&');
			
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $url);
			
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
			
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				
			$response = curl_exec($ch);
			
			curl_close($ch);
			
			return $response;
		}

	if(isset($_POST['BtnPaste']))
	{
		//echo urlencode($_POST['Content']);
		$get_paste_json = get("http://2cash.pw/papi/submit.php", array('title' => $_POST['title'], 'message' => $_POST['Content']));
		
		$paste_json = json_decode($get_paste_json);
		echo $paste_json->Response;
		
		if($paste_json->Error == 0)
		{
			echo "<br><a href=\"./view.php?paste=" . $paste_json->ResponseURL . "&simple\">Click here to view the paste.</a>";
		}
	}



?>

<h1>PAPI Test Page</h1>

<form action="index.php" method="POST">
Title:<br><input placeholder="Untitled" name="title"></input><br>
Content:<br><textarea rows="25" cols="125" placeholder="NULL" name="Content"></textarea><br>
<input type="submit" name="BtnPaste">
</form> 


