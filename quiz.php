<?php
	session_start();
?>
<?php
	if($_SESSION['user']=='')
		require('check.php');
	require_once('init.php');
	$init_res = initialize($_SESSION["user"]); 
	if($init_res==2){
		echo "<script language=javascript>window.location='finished.html';</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quiz - IBM BlueBattle</title>
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
<script type="text/javascript">
function showNext(choice)
{
	if(!choice) {
		alert("Please select an option");
		return;
	}
	$.get('next_skip.php',{'ch':choice},function(data){
		$('#quiztext').html(data.substring(1,data.length));
		if(data[0]=='4')
			document.getElementById('skipbtn').style.display='none';
		else if(data[0]=='9') {
			window.location = "finished.html";
		}
		
	});
}
function backshowNext(choice)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	document.getElementById("quiztext").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","next_skip.php?ch="+choice,true);
xmlhttp.send();
}
</script>
<?php
	if($sessioncheck==1){
		//echo "<script language=javascript>alert('Session Start')</script>";	
		echo "<script language=javascript>showNext('START')</script>";
	}
	elseif($sessioncheck==2){
		//echo "<script language=javascript>alert('Session Load')</script>";
		echo "<script language=javascript>showNext('LOAD')</script>";
	}
?>
<script type="text/javascript">
<!-- Begin
var servertimeOBJ;

// Now check that it is set
if (servertimeOBJ != null){
	var myscriptTime = servertimeOBJ;
}

// If server time not passed, use client's time
else{
	var myscriptTime = new Date();
}
// End -->
</script>
<style type="text/css">
@import url(style.css);
</style>
<noscript>
<meta http-equiv="refresh" content="0; URL=nojavascript.html">
</noscript>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/javascript.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>


<div id="templatemo_wrapper">
<div id="templatemo_menu">
        <ul>
            <li><a href="index.php">Home</a></li>
			<li><a href="rules.php">Rules</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="feedback.html">Feedback</a></li>
			
            
        </ul>  
    </div>
    <div id="templatemo_header">

        <div id="site_title">
			<a href="index.php" target="_parent">
                <img src="images/templatemo_logo.png" alt="BlueBattle Banner" />
            </a>
        </div>
    </div>
    <hr id="header_stripe"/>
  <div id="page_container">
  

    <div id="templatemo_content_wrapper_outter">
    	
        <div id="templatemo_content_wrapper">
        
        	
            
            <div class="h_divider"></div>
			<div id=headpanel">
			<div id="logout"><a href="logout.php">Log Out</a> <a href="logout.php"><img src="images/logout.png"align=absmiddle></a></div>
            <div id="welcometext"><?php if (isset($_SESSION["user"]))
echo "Hello ".$_SESSION["user"]."!";
else
echo "Hello Guest!";
?> Welcome to the IBM BlueBattle Challenge.
			</div>
			</div>
			
			
            <div class=" cleaner_h40"></div>
            
            <div class="content_section">
            
            	<div class="section_w530 margin_r40">
                
                	
                
                	<h2>
					</h2>
<div id="leftalign">                	
<script>
function clickalert()
{
alert("hii");
alert($("#myform input[type='radio']:checked").val());
}
function a(){
var choice = $("input[name='opt']:checked", '#frmChoice').val();
return choice;	
}
</script>
                   
    <P>
	<div id="quiztext"> </div>
	
	<br><br><br><br>
    <center><img src="images/next.png" onmouseover=this.src="images/nextglow.png" onmouseout=this.src="images/next.png" onclick=this.src="images/next1.png";showNext(a());> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span id='skipbtn'><img src="images/skip.png" onmouseover=this.src="images/skipglow.png" onmouseout=this.src="images/skip.png" onclick=this.src="images/skip2.png";showNext("###");></span>
	</center>
<div style='clear: both;'> </div>
</div>
                </div>
                
                
                <div id="sep"> </div>
                <div class="section_w250">
                
                	<h2><img src="images/more-details.png"align=absmiddle> Contest Details </h2>
					
                	<script type="text/javascript">

var currenttime = '<? print date("F d, Y H:i:s", time()+19800)?>' //PHP method of getting server date



var montharray=new Array("January","Feb","March","April","May","June","July","August","September","October","November","December")
var serverdate=new Date(currenttime)

function padlength(what){
var output=(what.toString().length==1)? "0"+what : what
return output
}

function displaytime(){
serverdate.setSeconds(serverdate.getSeconds()+1)
var datestring=montharray[serverdate.getMonth()]+" "+padlength(serverdate.getDate())+", "+serverdate.getFullYear()
var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
document.getElementById("servertime").innerHTML=datestring+" "+timestring
}

window.onload=function(){
setInterval("displaytime()", 1000)
}

</script>

<p><b>Current Server Time:</b> <span id="servertime"></span> GMT+0530 (India Standard Time)</p>
<br><br>
Contest ends at: Tue Feb 18 2011 22:40:00 GMT+0530 (India Standard Time) 
<h2></h2>
<center><a href="http://www.sastra.edu/gloss"><img src="images/glosslogo.jpg"></a></center>
            </div>
            
            <div class="cleaner"></div>
			
        </div> 
    
    	<div class="cleaner">&nbsp;</div>
    </div>
    
    <div id="templatemo_footer">
    	 Copyright&copy; 2011  
         Powered by <a href="http://www.sastra.edu/gloss" target="_blank"><b>GLOSS</b></a> 
         
    </div>

</div> 
</body>
<?
/**/
	?>
</html>
