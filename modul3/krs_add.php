<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KRs</title>
</head>
<body>
<?php
include "menu_krs.php";
?>
<br>
<form action="krs_proc.php" method="post">
    ID<br>
    <input type="text" name="id"><br>
    mhs_npm<br>
    <select name="mhs_npm">
        <?php 
            $sql = "SELECT * FROM mhs";
            $res = $koneksi->query($sql);
            while($dat = $res->fetch_assoc()){
                echo "<option value='".$dat['npm']."'>".$dat['npm']." - ".$dat['nama']."</option>";
            }
        ?>
    </select><br>
    mk_kode<br>
    <select name="mk_kode">
        <?php 
            $sql = "SELECT * FROM mk";
            $res = $koneksi->query($sql);
            while($dat = $res->fetch_assoc()){
                echo "<option value='".$dat['kode']."'>".$dat['kode']." - ".$dat['nama']."</option>";
            }
        ?>
    </select><br>
    sem<br>
    <input type="text" name="sem"><br>
    ta_id<br>
    <select name="ta_id">
        <?php 
            $sql = "SELECT * FROM ta";
            $res = $koneksi->query($sql);
            while($dat = $res->fetch_assoc()){
                echo "<option value='".$dat['id']."'>".$dat['nama']."</option>";
            }
            
        ?>
    </select><br>
    nilai<br>
    <input type="text" name="nilai"><br>

    <input type="submit" name="krs_add" value="SIMPAN">
</form>
</body>
</html>