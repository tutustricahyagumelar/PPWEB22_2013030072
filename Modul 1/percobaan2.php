html> 
<head> 
<title>List / Menu Pilihan</title> 
</head> 
<body> 
<form id="form1" name="form1" method="post" action=""> 
<select name="pilihan[]" size="4" multiple="multiple" id="pilihan[]"> 
<?php for ($i=1; $i < 5; $i++){ ?> 
<option value="<?php echo $i; ?>"> 
List Menu <?php echo $i; ?> 
</option> 
<?php } ?> 
</select> 
 <br> 
<input type="submit" name="button" id="button" value="Submit"> 
 <hr /> 
<?php 
if (is_array($_POST["pilihan"])){ 
foreach ($_POST["pilihan"] as $value){ 
echo $value ."<br />";
} 
}else{ 
if (isset($_POST["button"])){ 
echo "Maaf!, anda harus "; 
echo "memilih salah satu item";
}else{ 
echo "Pilihlah salah satu data";
} 
} 
?> 
</form> 
</body> 
</html>
