<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM ta WHERE id='$id'";
$res = $koneksi->query($sql);
$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>ta edit</title>
</head>
<body>
<?php include 'menu_ta.php';?>
<br>
<form name="myform" action="ta_proc.php" method="POST">
Id
<br><input type="text" name="id" id="id" value="<?php echo $dat['id']?>">
<br>Nama
<br><input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>
