<table class="table table-striped">
<tr>
<th>subjudul</th>
<th >Aksi</th>
</tr>
<?php
include "../koneksi.php";
$hasil=mysql_query("select * from subjudul");
while ($data=mysql_fetch_assoc($hasil)){
?>
<tr>
<td><?php echo $data['subjudul'];?></td>
<td><a href="?page=&action=edit&id=<?php echo $data['id']?>"><button type="button" class="btn btn-primary btn-xs">Edit</button>
</a>
<a href="?page=&action=hapus&id=<?php echo $data['id']?>"><button type="button" class="btn btn-danger btn-xs">Delete</td></button></a>
</tr>
<?php } ?>
<br/>
<a href="?page=&action=tambah&id=<?php echo $data['id']?>"><button type="button" class="btn btn-primary btn-xs">Insert</button></a>
</table>