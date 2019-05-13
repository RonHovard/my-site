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
	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p>Добрый день! Меня зовут <i>Евгений Ефремов</i>. Я начинающий программист и совсем недавно сделал первые шаги в этом непростом деле, однако уже написал свой первый сайт.</p>

			<p>А помог мне в этом курс: "Основы программирования" на IT-портале <a href="https://geekbrains.ru" target="_blank">GeekBrains.</a>Я продолжаю учиться и регулярно буду добавлять на сайт, новые "фишки".</p> 

			<p> Я написал несколько игр в которые вы можете поиграть на этом сайте:</p>  

			<a href="puzzle.php"><b>Загадки</b></a>
			<a href="guess.php"><b>Угадайка</b></a>
			<a href="guess2.php"><b>Угадайка-2</b></a>
			
			<p><br> А также:  <br><br><a href="generator.php"> <b>Генератор паролей.</b></a></p>
		</div>
		<?php
			include "footer.php";
		?>
	</div>
</div>

</body>
</html>