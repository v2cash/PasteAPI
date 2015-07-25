<?php
/*
	    ____  ___    ____  ____
	   / __ \/   |  / __ \/  _/
      / /_/ / /| | / /_/ // /  
     / ____/ ___ |/ ____// /   
	/_/   /_/  |_/_/   /___/   
	Paste API By 2cash

*/

include("functions.php");

	$PASTE = $_GET['paste'];
	
	if(!$papi->PasteExists($PASTE))
	{
		echo $papi->Response(true,"Paste does not exist",null);
	}
	else
	{
		$paste_info = $papi->GetPasteInformation($PASTE);
		
		if(isset($_GET['simple']))
		{
			echo $paste_info['content'];
		}
		else
		{
			echo $papi->Response(false,"Returned Paste",$paste_info['pasteid'],$paste_info['date'], "Content-type: text/plain", $paste_info['title'], $paste_info['content']);
		}
		
		
	}


?>