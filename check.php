<?
	//require('init.php');
	
	$con = mysql_connect("localhost","root","");
	if(!$con) die('ERROR!');//echo "Could not connect to Server: ".mysql_error()." Kindly try again in a while.";           //Setting up the database
    mysql_select_db("bluebattle", $con);
	
	$usrname=mysql_real_escape_string($_POST["user"]);
	$passwrd=mysql_real_escape_string($_POST["pass"]);
	
	$result = mysql_query("SELECT * FROM users WHERE username = '{$usrname}'");
	$row = mysql_fetch_array($result);
	if($row == NULL)  echo "<meta http-equiv='refresh' content='0;url:index.php' />";
	elseif($row['password'] != $passwrd) echo "<meta http-equiv='refresh' content='0;url:index.php' />";
	$_SESSION["user"] = $usrname; 
	//$init_res = initialize($usrname); // INITIALIZED
	mysql_close($con);
?>

