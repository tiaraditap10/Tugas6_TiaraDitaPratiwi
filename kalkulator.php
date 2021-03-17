<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	if(isset($_POST['hitung'])){
		$bil1=$_POST['Bil1'];
		$bil2=$_POST['Bil2'];
		$operasi=$_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil=$bil1+$bil2;
			break;
			
			case 'kurang':
				$hasil=$bil1-$bil2;
			break;
			case 'bagi':
				$hasil=$bil1/$bil2;
			break;
			case 'kali':
				$hasil=$bil1*$bil2;
			break;
		}
	}


	?>
<div class="design">
	<h1>KALKULATOR</h1>
	<form method="post" action="kalkulator.php">
		<input type="text" name="Bil1" autocomplete="off" placeholder="Masukkan Bilangan 1">
		<br><br>
		<input type="text" name="Bil2" autocomplete="off" placeholder="Masukkan Bilangan 2">
		<br><br>
		<select class="opt" name="operasi">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="kali">x</option>
			<option value="bagi">:</option>
		</select>
		<input type="submit" name="hitung" value="Equal">
	</form>


	<?php 
	if(isset($_POST['hitung'])){ ?>
		<input type="text" value="<?php echo $hasil; ?>" class="bil">
	<?php } else{?>
		<input type="text" value="0" class="bil">
	<?php }
	 ?>
</div>
</body>
</html>