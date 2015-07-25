<?php 

	if(isset($_POST['BtnPaste']))
	{
		$get_paste_json = @file_get_contents("http://localhost/papi/submit.php?title=" . $_POST['title'] . "&message=" . urlencode($_POST['Content']));
		$paste_json = json_decode($get_paste_json);
		echo $paste_json->Response;
		
		if($paste_json->Error == 0)
		{
			echo "<br><a href=\"./view.php?paste=" . $paste_json->ResponseURL . "&simple\">Click here to view the paste.</a>";
		}
	}


?>

<h1>PAPI Test Page</h1>

<form action="" method="POST">
Title:<br><input placeholder="Untitled" name="title"></input><br>
Content:<br><textarea rows="25" cols="125" placeholder="NULL" name="Content"></textarea><br>
<button type="submit" name="BtnPaste">Paste this</button>
</form> 


