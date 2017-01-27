<?php
$id=@$_GET['id'];
$judul=@$_GET['judul'];
$hasil=mysql_query("select * from judul where id='$id'") or die (mysql_error());
$data=mysql_fetch_assoc($hasil);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Masukan Data</title>
</head>
<body>
<?php
if(isset($_POST['edit'])){
	$judul=$_POST['judul'];
$sql=mysql_query("update judul set judul='$judul' where id='$id'");
if ($sql) {
?>
	<script type="text/javascript">
	alert("Edit Data Berhasil");
	window.location.href="?page";
	</script>
<?php 
} else {
echo mysql_error();
}
}
?>
<form action="" method="post">
<br/>
<table>
<tr>
<td></td>
<label for="inputlg">title</label>
<input class="form-control input-lg" type="text" name="judul" class="in" value="<?php echo $data['judul'];?>">								  
</tr>
<td><input type="submit" name="edit" class="in" value="edit data"/></td>
</table>
</form>
</html>
</body>
</button>
 