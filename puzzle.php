<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>		
	
	<div class="contentWrap">
		<div class="content">
			<div class="center">
				
				<h1>Игра в загадки</h1>

				<div class="box">
					<?php
						if (isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])) {
						
							$userAnswer = $_GET["userAnswer1"];
							$score = 0;
							if ($userAnswer == "шапка" || $userAnswer == "шляпа" || $userAnswer == "кепка") {
								$score++;
							}

							$userAnswer = $_GET["userAnswer2"];
							if ($userAnswer == "дверь" || $userAnswer == "двери") {
								$score++;
							}

							$userAnswer = $_GET["userAnswer3"];
							if ($userAnswer == "море" || $userAnswer == "океан") {
								$score++;
							}

							echo "ОТГАДАНО ПРАВИЛЬНО:  " . $score;
						}
					?>

					<form method="GET">
						<p>Сижу верхом не ведаю на ком.</p>
						<input type="text" name="userAnswer1">

						<p>Кто приходит, кто уходит, все её за ручку водят.</p>
						<input type="text" name="userAnswer2">

						<p>Кругом вода, а с питьём беда.</p>
						<input type="text" name="userAnswer3">

						<br><br><br>
						<input type="submit" value="ОТВЕТИТЬ" name="">
					</form>

				</div>
			</div>
		</div>
	</div>
		
	<?php
			include "footer.php";
	?>
</div>	


</body>
</html>