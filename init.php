<?
	global $sessioncheck;
	
	$con = mysql_connect("localhost","root","");
	if(!$con) die('ERROR!');//echo "Could not connect to Server: ".mysql_error()." Kindly try again in a while.";           //Setting up the database
    mysql_select_db("bluebattle", $con);
	
	function startsession($user){
		global $sessioncheck;
		$sessioncheck = 1;
		mysql_query("INSERT INTO usr_session(username) VALUES('{$user}')");
		//mysql_query("INSERT INTO usr_content(username) VALUES('{$user}')");
		mysql_query("INSERT INTO usr_result(username) VALUES('{$user}')");
	}
	
	function loadsession(){
		global $sessioncheck;
		$sessioncheck =2;
		//echo "LOADED";
		
	}
	
	function initialize($user){
		
		$query = mysql_query("SELECT * FROM usr_session WHERE username = '{$user}'");
		$row = mysql_fetch_array($query);
		
		if($row == NULL){
			startsession($user);
			return 0;
		}
		elseif($row['endtime'] == NULL){
			loadsession();
			return 1;
		}
		else{
			return 2;
		}
		mysql_close($con);
	}
?>
