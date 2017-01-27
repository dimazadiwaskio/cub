<?php
$server="localhost";
$user="root";
$password="";
$db="dbcubdigital";

mysql_connect("$server","$user","$password") or die('Gagal konek ke server');	
$status=mysql_select_db("$db") ;   
//if ($status) {
//	echo "Database ada";
//}else{
//	echo "Database tidak ada";
//}

?>