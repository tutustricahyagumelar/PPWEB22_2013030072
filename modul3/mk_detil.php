<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$sql = "SELECT * FROM mk WHERE kode='$kode'";
$res = $koneksi->query($sql);
$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>mk edit</title>
</head>
<body>
<?php include 'menu_mk.php';?>
<br>
<form name="myform" action="mk_proc.php" method="POST">
Kode
<br><input type="text" name="kode" id="kode" value="<?php echo $dat['kode']?>">
<br>Nama
<br><input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>
