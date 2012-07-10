<?php
session_start();
if($_SESSION['user']!='')
	echo "<meta http-equiv='refresh' content='0;url=quiz.php' >";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home - IBM BlueBattle</title>
<meta name="keywords" content="BlueBattle" />
<meta name="description" content="BlueBattle" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
	<script type="text/javascript" src="servertime.php"></script>
	<!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" href="panelstyle.css" type="text/css" media="screen" />
	<script type="text/javascript">
$(document).ready(function(){
	$(".trigger").click(function(){
		$(".panel").toggle("fast");
		$(this).toggleClass("active");
		return false;
	});
});
</script>

<script>
	$(document).ready(function(){
	$('.horoscope').slideToggle();
	$('.horoscope').click(function(){
		$('.horo').slideToggle();
		});
	$('.lovescope').slideToggle();
	$('.lovescope').click(function(){
		$('.love').slideToggle();
		});
	$('.lifemeter').slideToggle();
	$('.lifemeter').click(function(){
		$('.life').slideToggle();
		});
	$('.fortune').slideToggle();
	$('.fortune').click(function(){
		$('.for').slideToggle();
		});
		$('.learn').slideToggle();
	});
</script>
<script type="text/javascript">
	function toggleHoro() {
		$('.horoscope').slideToggle();
	}
	function toggleLove() {
		$('.lovescope').slideToggle();
	}
	function toggleLife() {
		$('.lifemeter').slideToggle();
	}
	function toggleFortune() {
		$('.fortune').slideToggle();
	}
	function togglelearn() {
		$('.learn').slideToggle();
	}
</script>
<style type="text/css">
@import url(style.css);
</style>
<noscript>
<meta http-equiv="refresh" content="0; URL=nojavascript.html">
</noscript>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/javascript.js" type="text/javascript"></script>
<script type="text/javascript">



</script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script type="text/javascript">
function validate_form ( )
{
	valid = true;
		if ( document.userLogin.user.value == "") 
        {
                alert ( "Please enter your Username and Password" );
                valid = false;
        }
        else if ( document.userLogin.user.value == "" )
        {
                alert ( "Please enter your Username" );
                valid = false;
        }
		else if ( document.userLogin.pass.value == "" )
        {
		
                alert ( "Please enter a Password" );
                valid = false;
        }
        return valid;
}

</script>
<script language="JavaScript" src="servertime.php"></script>

<script type="text/javascript">
<!-- Begin
/* This script and many more are available free online at
The JavaScript Source!! http://javascript.internet.com
Created by: Emery Wooten :: www.mresoftware.com */

// First thing, reference the variable.
var servertimeOBJ;

// Now check that it is set
if (servertimeOBJ != null){
	var myscriptTime = servertimeOBJ;
}

// If server time not passed, use client's time
else{
	var myscriptTime = new Date();
}

/* "myscriptTime" is a variable local to this script. Name it as you wish.
 After the above code is executed, this local variable is used for all date/time
 calculations performed by the script. If all works, this variable
 contains the server date as a proper JavaScript date object. */

// End -->
</script>

</head>
<body>
<div id="templatemo_wrapper">
<div id="templatemo_menu">
        <ul>
            <li><a href="#" class="current">Home</a></li>
			<li><a href="rules.php">Rules</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="feedback.html">Feedback</a></li>
			
            
        </ul>  
    </div><!-- end of templatemo_menu -->
    
    <div id="templatemo_header">

        <div id="site_title">
			<a href="index.html" target="_parent">
                <img src="images/templatemo_logo.png" alt="BlueBattle Banner" />
            </a>
        </div> <!-- end of site_title -->
    
    </div> <!-- end of templatemo_header -->
    
    <!-- Nettuts login starts here -->
	
	
    <hr id="header_stripe"/>
  <div id="page_container">
  <div id="toppanel">
    <div id="panel">
      <div id="panel_contents"> </div>
      <!--<div class="border" id="login">-->
	  <center><br />
	  <p><form id="userLogin" name="userLogin" method="post" action="quiz.php" onSubmit="return validate_form ( );">
Username:&nbsp;
<label>
<input name="user" onclick="javascript:initailizeUserName();" type="text" class="loginStyle1" id="user"  onmouseout="javascript:setUserName();" />
<br>
</label>
Password: &nbsp;
<label>
<input name="pass" type="password" class="loginInput" id="pass" />
</label>
<br><label>
<input name="btunLogin" type="submit" id="btunLogin" value="Login" class="loginButton" />
</label>
</form> 
        </p>
		</center>
      <!--</div>-->
	  
    </div>
    <div class="panel_button" style="display: visible;"><img src="images/bt_open.png"  alt="expand"/> <a href="#">Login Here</a> </div>
    <div class="panel_button" id="hide_button" style="display: none;"><img src="images/bt_close.png" alt="collapse" /> <a href="#">Hide</a> </div> 
	
  </div>
  

  <!-- Nettuts login ends here -->

    <div id="templatemo_content_wrapper_outter">
    	
        <div id="templatemo_content_wrapper">
		<br><br>
        <div id="leftalign">
        	
            </div>
            <div class="h_divider"></div>
            
            <div class=" cleaner_h40"></div>
            
            <div class="content_section">
            
            	<div class="section_w530 margin_r40">
                
                	<h2>Welcome!</h2>
					<div id="leftalign">
                	<p>Welcome to the IBM BlueBattle challenge. Use your Daksh username and password that you provided during the time of registration to login.</p>
                  <br><p>Please read the <a href="rules.php"><b>Rules</b></a> before starting the challenge.</p>
                  </div>
                  
                  
                </div>
                
                
                <div id="sep"> </div>
                <div class="section_w250">
                
                	<h2><img src="images/more-details.png"align=absmiddle> Contest Details</h2>
                	<script type="text/javascript">
<!-- Begin
  document.write(myscriptTime)
// End -->
</script><br><br>
Contest ends at: Tue Feb 18 2011 22:40:00 GMT+0530 (India Standard Time) 
                    <h2></h2>
<center><a href="http://www.sastra.edu/gloss"><img src="images/glosslogo.jpg"></a></center>
 <div class="cleaner"></div>

            </div>
            
            <div class="cleaner"></div>
			
        </div> <!-- end of templatemo_content_wrapper -->
    
    	<div class="cleaner">&nbsp;</div>
    </div> <!-- templatemo_content_wrapper_outter -->
    
    <div id="templatemo_footer">
    	 Copyright © 2011  
         Powered by <a href="http://www.sastra.edu/gloss" target="_blank"><b>GLOSS</b></a> 
         
    </div> <!-- end of templatemo_footer -->

</div> <!-- end of templatemo_wrapper -->

</body>
</html>
