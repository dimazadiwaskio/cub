<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{

$id = @$_GET['id'];
$perintah = "delete from subjudul where id='$id'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:subjudul.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>