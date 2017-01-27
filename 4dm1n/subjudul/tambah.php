<?php
if(isset($_POST['tambah'])){
	$id=@$_POST['id'];
	$subjudul=@$_POST['subjudul'];
	$hasil=mysql_query("insert into subjudul values('$id','$subjudul')");
if ($hasil) {
?>
<script type="text/javascript">
alert("Data Berhasil Masuk");
window.location.href="?page";
</script>
<?php
}else {
	echo mysql_error();
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Masukan Data</title>
</head>
<body>
<form action="" method="post">
<table>
<tr>
<td></td>
<label for="inputlg">sub title</label>
<input class="form-control input-lg" type="text" name="subjudul" class="in"/></td>							</tr>
<td><input type="submit" name="tambah" value="Insert Data" class="btn"/></td>
</table>
</form>

</html>
</body>

