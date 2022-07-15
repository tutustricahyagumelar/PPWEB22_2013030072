<?php
include 'koneksi.php';
$npm = $_GET['npm'];
$sql = "SELECT * FROM mhs WHERE npm='$npm'";
$res = $koneksi->query($sql);
$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>mhs edit</title>
</head>
<body>
<?php include 'menu.php';?>
<br>
<form name="myform" action="mhs_proc.php" method="POST">
NPM
<br><input type="text" name="npm" id="npm" value="<?php echo $dat['npm']?>">
<br>Nama
<br><input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
<br>Alamat
<br><input type="text" name="alamat" id="alamat" size="50" value="<?= $dat['alamat']?>">
<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>
