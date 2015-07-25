<?php 
/*
	    ____  ___    ____  ____
	   / __ \/   |  / __ \/  _/
      / /_/ / /| | / /_/ // /  
     / ____/ ___ |/ ____// /   
	/_/   /_/  |_/_/   /___/   
	Paste API By 2cash

*/
	
	// Dont let the fuckers exploit our code!
	header("Content-type: text/plain");
	
	$ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
	
	include("db.php");
	error_reporting(0);
	class papi
	{
		function Response($isError = false, $Response = "PAPI_NO_RESPONSE", $ResponsePaste = null, $CreationDate = null, $Header = null, $pasteTitle = null, $pasteContent = null)
		{
			return json_encode(array("PAPI" => true, "Error" => $isError, "Response" => $Response, "ResponseURL" => $ResponsePaste, "CreationDate" => $CreationDate, "DisplayHeader" => $Header, "PasteTitle" => $pasteTitle,"PasteContent" => $pasteContent), JSON_PRETTY_PRINT);
		}
		
		function generateRandomString($length = 40) 
		{
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}
		
		function CheckBlock($IPADDRESS, $time = "-1 minute")
		{
			global $db_connection;
			$IP = mysqli_real_escape_string($db_connection, $IPADDRESS);
			$Check_1 = mysqli_query($db_connection, "SELECT count(`id`) AS 'count' FROM `pastes` WHERE `ip`='"  . $IP . "' AND `date` > '".date('Y-m-d H:i:s',strtotime($time))."' LIMIT 1");
			return mysqli_fetch_assoc($Check_1)['count'];
		}
		
		function SubmitPaste($pasteID, $title = "Untitled",$content = "PAPI_NULL")
		{
			global $db_connection;
			$title_paste = mysqli_real_escape_string($db_connection, $title);
			$content_paste = mysqli_real_escape_string($db_connection, $content);
				mysqli_query($db_connection, "INSERT INTO `pastes` (pasteid,title,content,ip, date) VALUES('" . $pasteID . "','" . $title_paste ."','" . $content_paste . "','" . $_SERVER["REMOTE_ADDR"] . "', '". date('Y-m-d H:i:s') . "') ");
		}
		
		function GetPasteInformation($pasteID = null)
		{
			global $db_connection;
			
			$pasteid = mysqli_real_escape_string($db_connection, $pasteID);
			$get_paste_info = mysqli_query($db_connection, "SELECT * FROM `pastes` WHERE pasteid='" . $pasteid . "'");
			return mysqli_fetch_assoc($get_paste_info);
			
		}
		
		function PasteExists($pasteID = null)
		{
			global $db_connection;
			
			$pasteid = mysqli_real_escape_string($db_connection, $pasteID);
			$get_paste = mysqli_query($db_connection, "SELECT * FROM `pastes` WHERE pasteid='" . $pasteid . "'");
			return mysqli_num_rows($get_paste);
		}
	}
	$papi = new papi();

?>