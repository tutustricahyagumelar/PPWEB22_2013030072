<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mhs add</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <br>
    <form name="myform" action="mhs_proc.php" method= "POST">NPM
      <br><input type= "text" name= "npm" id= "npm">
      <br>Nama
      <br><input type="text" name= "nama" id="nama" size= "30">
      <br>Alamat
      <br><input type="text" name= "alamat" id= "alamat" size="50">
      <br><input type="submit" name= "submit_add" id= "submit_add" value= "SIMPAN"> 
    </form>
</body>
</html>