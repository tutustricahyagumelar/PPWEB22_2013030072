<?php
include 'koneksi.php';
if(isset($_POST['submit_add'])){
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$sql = "INSERT INTO mhs 
(npm,nama,alamat) 
VALUES 
('$npm','$nama','$alamat')";
if(!$koneksi->query($sql))
die('Tambah MHS Gagal');
else
header("Location: mhs.php");
}
if(isset($_POST['submit_edit'])){
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $sql = "UPDATE mhs 
  SET nama='$nama', alamat='$alamat' 
  WHERE npm='$npm'";
  if(!$koneksi->query($sql))
  die('Edit MHS Gagal');
  else
  header("Location: mhs.php");
  }
  if(isset($_POST['submit_delete'])){
  $npm = $_POST['npm'];
  $sql = "DELETE FROM mhs 
  WHERE npm='$npm'";
  if(!$koneksi->query($sql))
  die('Hapus MHS Gagal');
  else
  header("Location: mhs.php");
  }
  ?>