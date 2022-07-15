<?php 
	class bola{
		private $r;
		public $phi = 3.14;
	function luas_bola($r){
		$this -> r = $r;$p2 = $this-> r * $this-> r;
		$luas= 4 * $this -> phi * $p2;
		echo 'luas = 4 x '.$this -> phi.' x '.$this->r.' <sup>2</sup> = '. ($luas). ' Cm <sup>2</sup><br>'; 
	}
	function vbola($r){
		$this -> r = $r;$p3 = $this-> r * $this-> r *$this-> r;
		$volume= 4/3 * $this -> phi * $p3;
		echo 'volume = 4/3 x '.$this -> phi.' x '.$this->r.' <sup>3</sup> = '. ($volume).' Cm <sup>3</sup><br>';
	}
	function Form_hitungbola(){
		echo '<form method="GET">';
		echo "<h1>hitung luas dan volume bola</h1>";
		echo 'jari-jari = <input type="text" name="r" placeholder="masukkan jari-jari"> <br>';
		echo '<br><input type="submit" name="submit" value="hitung">';
		echo '</form>';
	}
}
$bola = new bola;
$bola-> Form_hitungbola();
if(isset($_GET['r'])){
	$r = $_GET['r'];
	echo "jari-jari = ".$r. "cm<br>";
	echo $bola->luas_bola($r);
	echo $bola->vbola($r);
	}
 ?>
