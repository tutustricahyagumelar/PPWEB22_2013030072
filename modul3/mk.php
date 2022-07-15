<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mk</title>
</head>
<body>
  <?php include "menu_mk.php"; ?>
  <table width= "100%" border= "1">
    <thead>
      <tr>
        <th width= "5%">No.</th>
        <th width= "15%">Kode</th>
        <th width= "25%">Nama</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "select * from mk";
        $res = $koneksi->query($sql);
        if ($res->num_rows > 0) {
          $i = 0;
          while ($dat =$res->fetch_assoc()) {
            $i++;
            echo "<tr>
                  <td>$i</>
                  <td><a href='mk_detil.php?kode=".$dat['kode']."'>".
                  $dat["kode"]."</a></td>
                  <td>".$dat["nama"]."</td>
                  </tr>";
          }
        }
      ?>
    </tbody>
  </table>
</body>
</html>