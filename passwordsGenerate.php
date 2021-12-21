<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Особистий сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		
		function write(text) {
			document.getElementById("result").innerHTML = text;
		}
		

		function readInt() {
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function getRandomNumber(max) {
			var n = parseInt(Math.random() * max);
			return n;
		}


		function generatePassword() {
			passwordLength = readInt();
			var symbols = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m"];
			var text = "";
			for(var i = 0; i < passwordLength; i++){
				n = getRandomNumber(symbols.length - 1);
				text = text + symbols[n];
			}
			write(text);
			
			

		}
		
	</script>
</head>
<body>

<div class="contentWrap">
	<div class="content">
		<?php
		include "menu.php";
		?>
		<div class="center">

			<h1>Генератор паролів</h1>
	
			<div class="box">

				<p id="info">Уведіть довжину пароля</p>
				<input type="text" id="userAnswer">
				<br>
				<h3 id="result"></h3>
				<a href="#" onClick="generatePassword();" id="button">Отримати пароль</a>

			</div>

		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Maksym Omelianenko
</div>

</body>
</html>