<?
	$db_host = "localhost";
	$db_username = "bookmanager";
	$db_password = "1234567890";
	$db_name = "bookdbs";
	
	$db_link = @new mysqli($db_host, $db_username,$db_password,$db_name);
	if($db_link -> conncet_error != "")
	{
		echo "資料庫連接失敗!";
	}
	else 
	{
		$db_link ->query("SET NAMES 'utf8'");
	}
?>