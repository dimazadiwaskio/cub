<?php session_start();
include "../koneksi.php";
$admin=$_POST['username'];
$password=$_POST['password'];
$tanggal=date('Y-m-d');
$login=date('H:i:s');
$logout=date('H:i:s');
$query="SELECT * FROM admin where username='".$admin."' and password='".$password."'";
$hasil=mysql_query($query);
$hasil_cek=mysql_num_rows($hasil);
if ($hasil_cek==0) {
	//echo "salah";
	header("location:index.php");
}else{
	$_SESSION['adminlogin']=$admin;
		//mysql_query("insert into log (username,status,tanggal)
		//values('$_SESSION[adminlogin]','status','$tanggal')");
	mysql_query("insert into log2 (username,tanggal,login,logout,status)
		values('$_SESSION[adminlogin]','$tanggal','$login','logged','online');
		");
	header("location:home.php");

}

?>

