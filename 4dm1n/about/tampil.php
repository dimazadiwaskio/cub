<table class="table table-striped">
<tr>
<th>About</th>
<th colspan="2">Aksi</th>
</tr>
<?php
include "../koneksi.php";
$hasil=mysql_query("select * from about");
while ($data=mysql_fetch_assoc($hasil)){
?>
<tr>
<td><?php echo $data['content'];?></td>
<td><a href="?page=&action=edit&id=<?php echo $data['id']?>"><button type="button" class="btn btn-primary btn-xs">Edit</button>
</a>
<a href="?page=&action=hapus&id=<?php echo $data['id']?>"onclick="return confirm('Yakin Hapus!')">
<button type="button" class="btn btn-danger btn-xs">Delete</td></button></a>
</tr>
<?php } ?>
<br/>
<a href="?page=&action=tambah&id=<?php echo $data['id']?>"><button type="button" class="btn btn-primary btn-xs">Insert</button></a>
</table>