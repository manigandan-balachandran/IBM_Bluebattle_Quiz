<?php
	session_start();

	if (!isset($_SESSION["user"])) redirect('index.php');
	
	global $selchoice, $qid, $qnum;
	$selchoice = $_GET["ch"];
	echo $selchoice;
	
	$con = mysql_connect("localhost","root","");
	if(!$con) echo "Could not connect to Server: ".mysql_error()." Kindly try again in a while.";           //Setting up the database
    mysql_select_db("bluebattle", $con);
	
	global $fetchQ;
	
	$findqid_qnum = mysql_fetch_array(mysql_query("SELECT * FROM usr_session WHERE username = '{$_SESSION["user"]}'"));
	//global $qid;
	$qid = $findqid_qnum['curqID'];
	//global $qnum;
	$qnum = $findqid_qnum['numq'];
	
	if($selchoice == "START"){
		GenerateNew();
		display($fetchQ);
	}
	elseif($selchoice == "LOAD"){
		GenerateExisting($qid);
		display($fetchQ);
	}
	else{
		if($qnum < 30){ //Handels Answering(or)Skipping Normal Questions
			if($selchoice == "###")
				mysql_query("INSERT INTO usr_content(qID,skipped) VALUES({$qid},1) WHERE username = '{$_SESSION["user"]}'");
			else LogtheAnswer($qid);
			GenerateNew();
			display($fetchQ);
		}
		else{//Handels Answering Skipped Questions
			LogtheAnswer($qid);
			$check = GenerateNext();
			if($check == 0) {//Answered all. Move to finished.
				mysql_query("UPDATE usr_session SET endtime = {date(\"Y-m-d H:i:s\")} WHERE username = '{$_SESSION["user"]}'");
				redirect('finished.html');
			}
			display($fetchQ);
		}
	}
	
	function GenerateExisting($qID){
		global $fetchQ;
		$gequery = "SELECT * FROM quizcontent WHERE qID = $qID";
		$fetchQ = mysql_fetch_array(mysql_query($gequery));
	}
	
	function GenerateNew(){
		global $fetchQ;
		do{
			$randrownum = rand(1,6);
			
			$i=1;       
			while($i<=$randrownum){
				$fetchQ=mysql_fetch_array(mysql_query("SELECT * FROM quizcontent"));
				$i= $i+1;
			}
			$checkifdone = mysql_fetch_array(mysql_query("SELECT * FROM usr_content WHERE username = '{$_SESSION["user"]}' AND qID = {$fetchQ['qID']}"));
			if($checkifdone == NULL){
				mysql_query("UPDATE usr_session SET curqID = {$fetchQ['qID']} WHERE username = '{$_SESSION["user"]}'");
				mysql_query("UPDATE usr_session SET numq = numq+1 WHERE username = '{$_SESSION["user"]}'");	
			} 
		}while(($checkifdone != NULL));	
	}
	
	function GenerateNext(){
		global $fetchQ;
		$qid=mysql_fetch_array(mysql_query("SELECT * FROM usr_content WHERE username = '{$_SESSION["user"]}' AND skipped=1"));
		if($qid == NULL) return 0;
		else{
			$fetchQ=mysql_fetch_array(mysql_query("SELECT * FROM quizcontent WHERE qID = {$qid['qID']}"));
			mysql_query("UPDATE usr_session SET curqID = {$fetchQ['qID']} WHERE username = '{$_SESSION["user"]}'");
			return 1;
		}
	}
	
	function LogtheAnswer($qid){
		mysql_query("INSERT INTO usr_content(qID,cData) VALUES({$qid},'{$selchoice}') WHERE username = '{$_SESSION["user"]}'");
		$findcorrectch = mysql_fetch_array(mysql_query("SELECT * FROM quizcontent WHERE qID = $qid"));
		if($selchoice == $findcorrectch['correctch'])
			mysql_query("UPDATE usr_result SET totscore=totscore+4 WHERE username = '{$_SESSION["user"]}'");
		else
			mysql_query("UPDATE usr_result SET totscore=totscore-1 WHERE username = '{$_SESSION["user"]}'");	
	}
	

	function display($fetchQ) {
		echo $status;
		echo $fetchQ['qData'].'<br>';	
		echo '
			<form id="frmChoice">
			<input type="radio" name="opt" value="'.$fetchQ['ch1'].'">'.$fetchQ['ch1'].'<br />
			<input type="radio" name="opt" value="'.$fetchQ['ch2'].'">'.$fetchQ['ch2'].'<br />
			<input type="radio" name="opt" value="'.$fetchQ['ch3'].'">'.$fetchQ['ch3'].'<br />
			<input type="radio" name="opt" value="'.$fetchQ['ch4'].'">'.$fetchQ['ch4'].'<br />
			</form>';
	}
?>