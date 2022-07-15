<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mhs</title>
</head>
<body>
  <?php include "menu.php"; ?>
  <table width= "100%" border= "1">
    <thead>
      <tr>
        <th width= "5%">No.</th>
        <th width= "15%">NPM</th>
        <th width= "25%">Nama</th>
        <th width= "55%">Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "select * from mhs";
        $res = $koneksi->query($sql);
        if ($res->num_rows > 0) {
          $i = 0;
          while ($dat =$res->fetch_assoc()) {
            $i++;
            echo "<tr>
                  <td>$i</>
                  <td><a href='mhs_detil.php?npm=".$dat['npm']."'>".
                  $dat["npm"]."</a></td>
                  <td>".$dat["nama"]."</td>
                  <td>".$dat["alamat"]."</td>
                  </tr>";
          }
        }
      ?>
    </tbody>
  </table>
</body>
</html>