<?php
	session_start();
	if (!isset($_SESSION["user"])){
		echo "<meta http-equiv='refresh' content='0;url=index.php' />";
	
	}

//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~	

	$con = mysql_connect("localhost","root","");
	if(!$con) echo "Could not connect to Server: ".mysql_error()." Kindly try again in a while.";           
    mysql_select_db("bluebattle", $con);																								
	
	global $selchoice, $fetchQ, $qid, $qnum, $status, $NumOfQues;																					//INITIALIZATION BLOCK
	
	$selchoice = $_GET["ch"];
	$status = 0;
	$NumOfQues = 6;
	$findqid_qnum = mysql_fetch_array(mysql_query("SELECT * FROM usr_session WHERE username = '{$_SESSION["user"]}'"));
	$qid = $findqid_qnum['curqID'];
	$qnum = $findqid_qnum['numq'];
	
//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~





//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*FUNCTION DECLARATIONS*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~
//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~

	function GenerateExisting(){
		global $fetchQ, $qid;
		$fetchQ = mysql_fetch_array(mysql_query("SELECT * FROM quizcontent WHERE qID = {$qid}"));
		
	}
	
	function GenerateNew(){
		global $fetchQ;
		$fetchQ=mysql_fetch_array(mysql_query("SELECT * FROM quizcontent where qID not in (select qID from usr_content where username = '{$_SESSION["user"]}') order by rand() limit 1"));
		mysql_query("UPDATE usr_session SET curqID = {$fetchQ['qID']} WHERE username = '{$_SESSION["user"]}'");
		mysql_query("UPDATE usr_session SET numq = numq+1 WHERE username = '{$_SESSION["user"]}'");	
	}
	
	function GenerateNext(){
		global $fetchQ;
		$find=mysql_fetch_array(mysql_query("SELECT * FROM usr_content WHERE username = '{$_SESSION["user"]}' AND skipped=1"));
		if($find == NULL) return 0;
		else{
			$fetchQ=mysql_fetch_array(mysql_query("SELECT * FROM quizcontent WHERE qID = {$find['qID']}"));
			mysql_query("UPDATE usr_session SET curqID = {$find['qID']} WHERE username = '{$_SESSION["user"]}'");
			return 1;
		}
	}
	
	function LogtheAnswer(){
		global $qid, $selchoice;
		mysql_query("INSERT INTO usr_content(username,qID,cData) VALUES('{$_SESSION["user"]}', {$qid},'{$selchoice}')");
		$findcorrectch = mysql_fetch_array(mysql_query("SELECT * FROM quizcontent WHERE qID = {$qid}"));
		if($selchoice == $findcorrectch['correctch'])
			mysql_query("UPDATE usr_result SET totscore=totscore+4 WHERE username = '{$_SESSION["user"]}'");
		else
			mysql_query("UPDATE usr_result SET totscore=totscore-1 WHERE username = '{$_SESSION["user"]}'");	
	}
	
	function LogtheAnswerforSkipped(){
		global $qid, $selchoice;
		mysql_query("UPDATE usr_content SET cData='{$selchoice}', skipped=0 WHERE username = '{$_SESSION["user"]}' AND qID = {$qid}");
		$findcorrectch = mysql_fetch_array(mysql_query("SELECT * FROM quizcontent WHERE qID = {$qid}"));
		if($selchoice == $findcorrectch['correctch'])
			mysql_query("UPDATE usr_result SET totscore=totscore+4 WHERE username = '{$_SESSION["user"]}'");
		else
			mysql_query("UPDATE usr_result SET totscore=totscore-1 WHERE username = '{$_SESSION["user"]}'");
	}
	

	function display() {
		global $fetchQ, $status;
		echo $status;
		if($status==9)
			return;	
		echo $fetchQ['qData'].'<br>';	
		echo '
			<form id="frmChoice">
			<input type="radio" name="opt" value="'.$fetchQ['ch1'].'">'.$fetchQ['ch1'].'<br />
			<input type="radio" name="opt" value="'.$fetchQ['ch2'].'">'.$fetchQ['ch2'].'<br />
			<input type="radio" name="opt" value="'.$fetchQ['ch3'].'">'.$fetchQ['ch3'].'<br />
			<input type="radio" name="opt" value="'.$fetchQ['ch4'].'">'.$fetchQ['ch4'].'<br />
			</form>';
	}


//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~
//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~END OF FUNCTION DECLARATIONS*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~	








//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*MAIN HANDLER STARTS HERE~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~
//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~	

	if($selchoice == "START"){ //HANDLER FOR HANDLING THE START OF A USER SESSION
		GenerateNew();
		display();
	}
	elseif($selchoice == "LOAD"){ //HANDLER FOR HANDLING THE LOAD OF A USER SESSION
		GenerateExisting();
		display();
	}
	else{ // HANDLER FOR HANDLING THE RESPONSE FROM THE USER (NEXT OR SKIP)
		
		if($qnum <= $NumOfQues){ //Handles Answering(or)Skipping Normal Questions
			
			if($selchoice == "###"){//Question Skipped
				mysql_query("INSERT INTO usr_content(username,qID,skipped) VALUES('{$_SESSION["user"]}',{$qid},1)");
				if($qnum != $NumOfQues) {
					GenerateNew();
					display();
				}
			}
			else{//Question Answered
				LogtheAnswer();
				if($qnum != $NumOfQues) {
					GenerateNew();
					display();
				}
			}
		}
		if($qnum >=$NumOfQues) {//Handels Answering Skipped Questions
			$status = 4;
			LogtheAnswerforSkipped();
			$check = GenerateNext();
			if($check == 0) {//Answered all. Move to finished.
				mysql_query("UPDATE usr_session SET endtime = '".date("Y-m-d H:i:s")."' WHERE username = '{$_SESSION["user"]}'");
				$status=9;
			}
			display();
		}
	}

//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~
//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*END OF THE MAIN HANDLER*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~
//*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~


?>