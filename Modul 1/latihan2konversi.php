<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Grade</title>
    </head>
    <body>
 <h3> MASUKKAN NILAI </h3>
        <form method="POST">
      <input name="nilai1" type="text" value ="<?php echo $nilai1; ?>"/></br>
      <input type="submit" name="submit" value="SUBMIT"/><br/>
  </table>
            <td><?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 49) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = E';
            } else if ($nilai1 >= 50 && $nilai1 <= 59) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = D';
            } else if ($nilai1 >= 60 && $nilai1 <= 69) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = C';
            } else if ($nilai1 >= 70 && $nilai1 <= 79) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B';
            } else if ($nilai1 >= 80 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A';
            } 
   
   else{
                echo 'Nilai : ' . $nilai1 .' <br> Grade = Nilai yang dimasukkan salah';
            }
          ?> </td>
        </form>
  </table>
 
    </body>
</html>