<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Особистий сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		
		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 3;

		function readInt() {
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text) {
			document.getElementById("info").innerHTML = text;
		}

		function hide(id) {
			document.getElementById(id).style.display = "none";
		}

		function guess() {
				tryCount++;

				var userAnswer = readInt();
				if(userAnswer == answer){
					write("<b>Вітаю, ви вгадали!</b>");
					hide("button");
					hide("userAnswer");
				} else if(tryCount >= maxTryCount){
					write("Нажаль ви програли<br>Правильна відповідь: " + answer);
					hide("button");
					hide("userAnswer");
				} else if(userAnswer > answer){
					write("Ви ввели занадто велике число<br>Спробуйте ще раз. Уведіть число від 1 до 100");
				} else if(userAnswer < answer){
					write("Ви ввели занадто маленьке число<br>Спробуйте ще раз. Уведіть число від 1 до 100");
				}
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

			<h1>Гра здогадайка</h1>
	
			<div class="box">

				<p id="info">Угадайте число від 0 до 100</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Старт</a>

			</div>

		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Maksym Omelianenko
</div>

</body>
</html>