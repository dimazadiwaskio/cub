<?php 
session_start();
include "../koneksi.php";
$logout=date('H:i:s');

mysql_query("update log2 set logout='$logout',status='offline'
where username ='$_SESSION[adminlogin]' and logout='logged' and status='online'");	
session_destroy();
  header("location:index.php");
?>