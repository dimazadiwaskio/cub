<?php
$id=@$_GET['id'];
$subjudul=@$_GET['subjudul'];
$hasil=mysql_query("select * from subjudul where id='$id'") or die (mysql_error());
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
	$subjudul=$_POST['subjudul'];
$sql=mysql_query("update subjudul set subjudul='$subjudul' where id='$id'");
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
<label for="inputlg">subtitle</label>
<input class="form-control input-lg" id="inputlg" type="text" name="subjudul" class="in"                     value="<?php echo $data['subjudul'];?>"></td>									  
</tr>
<td></td>
<td><input type="submit" name="edit" class="in" value="edit data"/></td>
</tr>
</table>
</form>
</html>
</body>
</button>
 