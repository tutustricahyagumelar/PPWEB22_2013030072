<?php 
class balok{
	private $p;private $l;private $t;

	function l_balok($p,$l){
		$this -> p = $p; $this -> l = $l;
		echo "luas = ".$p." x ".$l." = ".$this->p * $this->l." cm <sup>2</sup>";
	}
	function hitung_balok($p,$l,$t){
		$this-> t = $t;  $this -> p = $p; $this -> l = $l;
		echo "volume = ".$p." x ".$l." x ".$t." = ".$this->p * $this->l * $this->t." cm <sup>3</sup>";
	}
	function form_hitungbalok(){
		echo '<form method="GET">';
		echo "<h1> luas dan volume balok </h1>";
		echo '<h3> isi data </h3>';
		echo '<br> panjang : ';
		echo '<br><input type="text" name="p" placeholder= "masukkan nilai"> cm <br>';
		echo '<br> lebar : ';
		echo '<br><input type="text" name="l" placeholder= "masukkan nilai"> cm <br>';
		echo '<br> tinggi : ';
		echo '<br><input type="text" name="t" placeholder= "masukkan nilai"> cm <br>';
		echo '<p style="margin-left:15px"><input type="submit" name="submit" value="hitung" >';
		echo '</form>';
	}
}
	$hitung_balok = new balok;
	$l_balok = new balok;
	$hitung_balok -> form_hitungbalok();
	if (isset($_GET['submit'])) {
		$p = $_GET['p'];$l = $_GET['l'];$t = $_GET['t'];
		echo $l_balok->l_balok($p,$l);
		echo "<br>";
		echo $hitung_balok->hitung_balok($p,$l,$t);	
	}
 ?>
