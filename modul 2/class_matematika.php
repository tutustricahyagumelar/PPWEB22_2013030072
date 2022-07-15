<?php
    class matematika{
        private $pi = 3.14;
        function tambah ($a,$b){
            $c = $a + $b;
            return $c;
        }
        function kuadrat ($x){
            return $x * $x;
        }
        function keliling_lingkaran($r){
            $kel = 2 * $this->pi * $r;
            return $kel;
        }
        function luas_lingkaran($r){
            $luas = $this->pi * $this->kuadrat($r);
            return $luas;
        }
    }
?>