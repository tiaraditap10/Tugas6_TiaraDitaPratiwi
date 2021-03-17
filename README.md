## Create Calculator with PHP, HTML and CSS

To make a simple calcualtor we can use PHP, HTML and CSS programming.
We can design the calculator as you wish. Just Try it!

## Requirements
- PHP >= 5.3.7
- HTML 
- CSS
- XAMPP
- Sublime Text 3

## Installation
  ### [Sublime Text 3](http://www.sublimetext.com/3)
  ###### How To Install Sublime Text 3
  If you don't know how to install Sublime Text 3 after downloading, you can see this article [here](https://www.geeksforgeeks.org/how-to-install-sublime-text-3-in-windows/)
  ### [XAMPP](https://www.apachefriends.org/download.html)
  ###### How To Install XAMPP
  If you don't know how to install XAMPP after downloading, you can see this article [here](https://www.geeksforgeeks.org/how-to-install-xampp-on-windows/)
  
## Explanation Programs
Connecting php file to css:
```
<link rel="stylesheet" type="text/css" href="css/style.css">
```
We use POST method. POST is used to send data which is usually used to add / change data on the server.
```
<form method="post" action="kalkulator.php">
```
Input data with text type:
```
<input type="text" name="Bil1" autocomplete="off" placeholder="Masukkan Bilangan 1">
<input type="text" name="Bil2" autocomplete="off" placeholder="Masukkan Bilangan 2">
```
Make an Option to choose the operation:
```
<select class="opt" name="operasi">
	<option value="tambah">+</option>
	<option value="kurang">-</option>
	<option value="kali">x</option>
	<option value="bagi">:</option>
</select>
```
And, make a submit box for *equal'='* operation:
```
<input type="submit" name="hitung" value="Equal">
```
This is PHP program to output the value of calculation:
```
	<?php 
	if(isset($_POST['hitung'])){ ?>
		<input type="text" value="<?php echo $hasil; ?>" class="bil">
	<?php } else{?>
		<input type="text" value="0" class="bil">
	<?php }
	 ?>
```
And, this is PHP program to calculate the value:
```
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
  ```
