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

	$MESSAGE = $_GET['message'];
	$TITLE = $_GET['title'];
	//echo $MESSAGE;
	
	if(!$MESSAGE || !$TITLE)
	{
		echo $papi->Response(true,"Invalid Parameters Entered",null);
	}
	else
	{
		if($papi->CheckBlock($ip,"-15 second") == 0) 
		{
		$paste_id = $papi->generateRandomString();
		$papi->SubmitPaste($paste_id, $TITLE, $MESSAGE);
		
		$get_paste_info = $papi->GetPasteInformation($paste_id);
		echo $papi->Response(false,"Paste has been successfully Pasted",$get_paste_info['pasteid']);
		}
		else
		{
			echo $papi->Response(true,"Please wait before pasting another paste");
		}
	}


?>