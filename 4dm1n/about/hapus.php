<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{

$id = @$_GET['id'];
$perintah = "delete from about where id='$id'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:about.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>