<table class="table table-striped">
<tr>
<th>judul</th>
<th colspan="2">Aksi</th>
</tr>
<?php
include "../koneksi.php";
$hasil=mysql_query("select * from judul");
while ($data=mysql_fetch_assoc($hasil)){
?>
<tr>
<td><?php echo $data['judul'];?></td>
<td>

<a href="?page=&action=edit&id=<?php echo $data['id']?>"><button type="button" class="btn btn-primary btn-xs">Edit</button>
</a>
<a href="?page=&action=hapus&id=<?php echo $data['id']?>"><button type="button" class="btn btn-danger btn-xs">Delete</td></button></a>
</tr>

<?php } ?>
<br/>
<a href="?page=&action=tambah&id=<?php echo $data['id']?>"><button type="button" class="btn btn-primary btn-xs">Insert</button></a>
</table>

