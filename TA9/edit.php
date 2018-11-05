<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ 
	$a = explode(", ",$d['genre']);
	$b = explode(", ",$d['wisata']);
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre</td>
		<td>
			<input type="checkbox" name="genre[]" value="Horror" <?php if(in_array('Horror', $a)){ echo "checked=checked";} ?> >Horror<br>
			<input type="checkbox" name="genre[]" value="Action" <?php if(in_array('Action', $a)){ echo "checked=checked";} ?>>Action<br>
			<input type="checkbox" name="genre[]" value="Anime"  <?php if(in_array('Anime', $a)){ echo "checked=checked";} ?>>Anime<br>
			<input type="checkbox" name="genre[]" value="Thriller" <?php if(in_array('Thriller', $a)){ echo "checked=checked";} ?>>Thriller<br>
			<input type="checkbox" name="genre[]" value="Animasi" <?php if(in_array('Animasi', $a)){ echo "checked=checked";} ?>>Animasi<br>
		</td>
	</tr>
	<tr>
		<td>Wisata Tujuan</td>
		<td>
			<input type="checkbox" name="wisata[]" value="Bali" <?php if(in_array('Bali', $b)){ echo "checked=checked";} ?>>Bali<br>
			<input type="checkbox" name="wisata[]" value="Raja Ampat" <?php if(in_array('Raja Ampat', $b)){ echo "checked=checked";} ?>>Raja Ampat<br>
			<input type="checkbox" name="wisata[]" value="Pulau Derawan" <?php if(in_array('Pulau Derawan', $b)){ echo "checked=checked";} ?>>Pulau Derawan<br>
			<input type="checkbox" name="wisata[]" value="Bangka Belitung" <?php if(in_array('Bangka Belitung', $b)){ echo "checked=checked";} ?>>Bangka Belitung<br>
			<input type="checkbox" name="wisata[]" value="Labuan Bajo" <?php if(in_array('Labuan Bajo', $b)){ echo "checked=checked";} ?>>Labuan Bajo<br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
