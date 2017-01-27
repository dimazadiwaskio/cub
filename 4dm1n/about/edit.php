<?php
$id=@$_GET['id'];
$content=@$_GET['content'];
$hasil=mysql_query("select * from about where id='$id'") or die (mysql_error());
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
$content=$_POST['content'];
$sql=mysql_query("update about set content='$content' where id='$id'");
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
<label for="inputlg">About</label>
<input class="form-control input-lg" type="text" name="content" class="in" value="<?php echo $data['content'];?>"></td>									  
</tr>
<td></td>
<td><input type="submit" name="edit" class="in" value="edit data"/></td>
</tr>
</table>
</form>
</html>
</body>
</button>
 