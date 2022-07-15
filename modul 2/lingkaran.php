<?php 
    include 'class_matematika.php';
    $math = new matematika();

    $jari = 10;
    $kel_lingkaran = $math->keliling_lingkaran($jari);
    $luas_lingkaran = $math->luas_lingkaran($jari);

    echo "Menghitung Keliling dan Luas Lingkaran<br>";
    echo "jari-jari : ".$jari."<br>";
    echo "keliling = ".$kel_lingkaran."<br>";
    echo "luas = ".$luas_lingkaran;
?>