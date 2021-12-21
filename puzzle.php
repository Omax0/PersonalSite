<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Особистий сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

<div class="contentWrap">
	<div class="content">
		<?php
		include "menu.php";
		?>
		<div class="center">

			<h1>Гра в загадки</h1>
	
			<div class="box">

			<?php

				if(isset($_GET['userAnswer1']) || ($_GET['userAnswer2']) || ($_GET['userAnswer3'])){
					
					$userAnswer = $_GET["userAnswer1"];
					$score = 0;
					if($userAnswer == "сон" || $userAnswer == "сновидіння"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer2"];
					if($userAnswer == "морською"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer3"];
					if($userAnswer == "шахматний" || $userAnswer == "мертвий"){
						$score++;
					}

					echo "Ви відгадали " . $score . " загадок";
				}
				
			?>

				<form method="GET">
					<p>Що можна побачити з закритими очима?</p>
					<input type="text" name="userAnswer1">

					<p>Якою хворобою ніхто не хворіє на суші?</p>
					<input type="text" name="userAnswer2">

					<p>Який кінь не їсть овес?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Відповіти" name="">
				</form>

			</div>

		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Maksym Omelianenko
</div>

</body>
</html>