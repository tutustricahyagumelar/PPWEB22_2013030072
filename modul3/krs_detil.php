<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM krs WHERE id='$id'";
$res = $koneksi->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>krs detil</title>
</head>
<body>
<?php 
  include "menu_krs.php"; 
?>
<br>
<form action="krs_proc.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>"><br>
	NPM<br>
	<input type="text" name="mhs_npm" value="<?= $row['mhs_npm']?>"><br>
	Kode Matakuliah<br>
	<input type="text" name="mk_kode" value="<?= $row['mk_kode']?>"><br>
	Semester<br>
	<input type="text" name="sem" value="<?= $row['sem']?>"><br>
	Tahun Ajar<br>
	<input type="text" name="ta_id" value="<?= $row['ta_id']?>"><br>
  Nilai<br>
  <input type="text" name="nilai" value="<?= $row['nilai']?>"><br>
	<input type="submit" name="edit" value="PERBAHARUI">
	<input type="submit" name="hapus" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">
</form>
</body>
</html>


