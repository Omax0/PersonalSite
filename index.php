<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Особистий сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>
	

	<h1>Особистий сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.jpg">
		<div class="box_text">
			<p><b>Доброго дня!</b> Мене звати <i>Омельяненко Максим</i>. Я зовсім недавно почав програмувати, проте вже написав свій перший сайт.</p>

			<p>У цьому мені допоміг IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На цьому сайті ви зможете пограти в деякі ігри, що я написав:</p>

			<p>
			<a href="index.php">Головна</a>
			<a href="puzzle.html">Загадки</a>
			<a href="guess.html">Здогадайка</a>
			<a href="guessMultiplayer.html">Здогадайка на двох</a>
			<a href="passwordsGenerate.php">Генератор паролів</a>
			<p/>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Maksym Omelianenko
</div>

</body>
</html>