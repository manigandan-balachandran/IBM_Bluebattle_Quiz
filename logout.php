<?php
session_start();
$_SESSION['user']='';
unset($_SESSSION['user']);
echo "<meta http-equiv='refresh' content='0;url=index.php' >";
?>