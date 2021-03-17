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
