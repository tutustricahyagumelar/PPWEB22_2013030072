<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ta add</title>
</head>
<body>
    <?php include "menu_ta.php"; ?>
    <br>
    <form name="myform" action="ta_proc.php" method= "POST">Id
       <br><input type= "text" name= "id" id= "id">
      <br>Nama
      <br><input type="text" name= "nama" id="nama" size= "30">
      <br><input type="submit" name= "submit_add" id= "submit_add" value= "SIMPAN"> 
    </form>
</body>
</html>