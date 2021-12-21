<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Особистий сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		var answer = parseInt(Math.random() * 100);
		var tryCount = 1;
		
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

		function answers() {
				var userAnswer = readInt();
				if(userAnswer == answer){
					write("<b>Вітаю, ви вгадали!</b>");
					hide("button");
					hide("userAnswer");
				} else if((userAnswer > answer) && (tryCount = 1)){
					tryCount++;
					write("Ви ввели занадто велике число<br>Хід гравця " + tryCount + " . Уведіть число від 1 до 100");
				} else if((userAnswer < answer) && (tryCount = 1)){
					write("Ви ввели занадто маленьке число<br>Хід гравця " + tryCount + " . Уведіть число від 1 до 100");
				} else if((userAnswer < answer) && (tryCount = 2)){
					tryCount--;
					write("Ви ввели занадто маленьке число<br>Хід гравця " + tryCount + " . Уведіть число від 1 до 100");
				} else if((userAnswer > answer) && (tryCount = 2)){
				 	tryCount--;
					write("Ви ввели занадто велике число<br>Хід гравця " + tryCount + " . Уведіть число від 1 до 100");
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

			<h1>Гра здогадайка на двох</h1>
	
			<div class="box">

				<p id="info">Усім привіт! Вас вітає гра "Здогадайка на двох". Угадайте число від 0 до 100. Хід гравця номер 1.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="answers();" id="button">Хід</a>

			</div>

		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Maksym Omelianenko
</div>

</body>
</html>