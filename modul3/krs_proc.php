<?php
include 'koneksi.php';
if(isset($_POST['krs_add'])){
$id = $_POST['id'];
$mhs_npm = $_POST['mhs_npm'];
$mk_kode = $_POST['mk_kode'];
$sem = $_POST['sem'];
$ta_id = $_POST['ta_id'];
$nilai = $_POST['nilai'];
$sql = "INSERT INTO krs
(id,mhs_npm, mk_kode, sem, ta_id, nilai) 
VALUES 
('$id','$mhs_npm', '$mk_kode', '$sem', '$ta_id', '$nilai')";
if(!$koneksi->query($sql))
die('Tambah krs Gagal');
else
header("Location: krs.php");
}
if(isset($_POST['edit'])){
  $id = $_POST['id'];
  $mhs_npm = $_POST['mhs_npm'];
  $mk_kode = $_POST['mk_kode'];
$sem = $_POST['sem'];
$ta_id = $_POST['ta_id'];
$nilai = $_POST['nilai'];
  $sql = "UPDATE krs
  SET mhs_npm='$mhs_npm', mk_kode='$mk_kode', sem='$sem', ta_id='$ta_id', nilai='$nilai' 
  WHERE id='$id'";
  if(!$koneksi->query($sql))
  die('Edit krs Gagal');
  else
  header("Location: krs.php");
  }
  if(isset($_POST['hapus'])){
  $id = $_POST['id'];
  $sql = "DELETE FROM krs
  WHERE id='$id'";
  if(!$koneksi->query($sql))
  die('Hapus krs Gagal');
  else
  header("Location: krs.php");
  }
  ?>