<?php 
class balok {
        private $p;
        private $l;
        private $t; 

        function luas_balok ($p,$l) {
            $this -> p = $p;
            $this -> l = $l;
            echo "Luas = ".$p." x ".$l." = ".$this->p * $this->l." Cm<sup>2,</sup>";
        }
        function volume_balok ($p,$l,$t) {
            $this -> p = $p;
            $this -> l = $l;
            $this -> t = $t;
            echo "Volume = ".$p." x ".$l." x ".$t." = ".$this->p * $this->l * $this->t." Cm<sup>2,</sup>";
        }
        function form_luasbalok(){
            echo ' <form method ="GET">';
            echo "<h1> Luas Balok </h1>";
            echo 'Panjang :';
            echo '<input type = "text" name="p" placeholder="masukkan nilai ">cm <br>';
            echo '<br> Lebar :';
            echo '<input type = "text" name="l" placeholder="masukkan nilai ">cm <br>';
            echo '<br> Tinggi :';
            echo '<input type = "text" name="t" placeholder="masukkan nilai ">cm <br>';
            echo '<p style="margin-left:50px"> <input type = "submit" name="submit" value=" Hitung " >';
            echo '</form>' ;
        }
        function form_volumebalok(){
            echo ' <form method ="GET">';
            echo "<h1> Volume Balok </h1>";
            echo 'Panjang :';
            echo '<input type = "text" name="p" placeholder="masukkan nilai ">cm <br>';
            echo '<br> Lebar :';
            echo '<input type = "text" name="l" placeholder="masukkan nilai ">cm <br>';
            echo '<br> Tinggi :';
            echo '<input type = "text" name="t" placeholder="masukkan nilai ">cm <br>';
            echo '<p style="margin-left:50px"><input type = "submit" name="volume" value=" Hitung" >';
            echo '</form>' ;
    }
}

$Lbalok = new balok;
$Lbalok -> form_luasbalok();
    if (isset($_GET['submit'])){
        $p = $_GET['p'];
        $l = $_GET['l'];
        echo "Panjang = ".$p." Cm<br>";
        echo "Lebar   = ".$l." Cm<br>";
        echo $Lbalok-> luas_balok($p,$l);
    }

$Vbalok = new balok;
$Vbalok -> form_volumebalok();
    if (isset($_GET['submit'])){
        $p = $_GET['p'];
        $l = $_GET['l'];
        $t = $_GET['t'];
        echo "Panjang = ".$p." Cm<br>";
        echo "Lebar   = ".$l." Cm<br>";
        echo "Tinggi  = ".$t." Cm<br>";
        echo $Vbalok-> volume_balok($p,$l,$t);
    }
?>