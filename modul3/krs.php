<?php
include "koneksi.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>krs</title>
</head>
<body>
    <?php
      include "menu_krs.php";
    ?>
    <br>
    <?php
        $sql = "SELECT K.*,M.npm as m_npm, MK.kode as mk_kode, T.id as t_id
                FROM krs K
                JOIN mhs M ON K.mhs_npm = M.npm
                JOIN mk MK ON K.mk_kode = MK.kode
                JOIN ta T ON K.ta_id = T.id";
        $res = $koneksi->query($sql);
        $jum_data = $res->num_rows;

        echo "Ditemukan $jum_data data";
        echo "<table border='1' width='100%'>";	
        echo "	<thead>
				<tr>
					<td width='5%'>No.</td>
          <td width='5%'>ID</td>
					<td width='15%'>NPM</td>
					<td width='20%'>Mata Kuliah</td>
          <td width='20%'>Semester</td>
          <td width='20%'>Tahun Ajar</td>
          <td width='20%'>Nilai</td>
				</tr>
			</thead
			<tbody>";

        $i = 0;
        while($dat = $res->fetch_array(MYSQLI_BOTH)){
            $i++;
            echo "<tr>
            <td align='center'>$i</td>
            <td><a href='krs_detil.php?id=".$dat['id']."'>".
            $dat["id"]."</a></td>
            <td>".$dat['mhs_npm']."</td>
            <td>".$dat['mk_kode']."</td>
            <td>".$dat['sem']."</td>
            <td>".$dat['ta_id']."</td>
            <td>".$dat['nilai']."</td>
        </tr>";
        }
        echo "	</tbody>
		</table>"
    ?>
</body>
</html>