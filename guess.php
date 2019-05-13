<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 7;
		var a = maxTryCount;
		
		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text) {
			document.getElementById("info").innerHTML = text;// body...
		}

		function hide(id) {
			document.getElementById(id).style.display = "none";
		}

		function guess() {
			tryCount++;
			a--;
			var userAnswer = readInt();
			if (userAnswer == answer) {
				write("<b>Поздравляю, вы угадали!</b> <br><br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if (tryCount >= maxTryCount) {
				write("Вы проиграли.<br>Закончились попытки.<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if (userAnswer > answer) {
				write("Вы ввели слишком большое число<br>Попробуйте ещё раз. Введите число от 0 до 100. <br>Oсталось попыток: " + a);
				hide("text");
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число<br>Попробуйте ещё раз. Введите число от 0 до 100. <br>Осталось попыток: " + a);
				hide("text");
			} else if (isNaN(userAnswer)) {
				write("Нужно было ввести число.<br>Введите число от 0 до 100.<br>Осталось попыток:  " + a);
			}
		}
	</script>
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>
	
	<div class="contentWrap">
		<div class="content">
			<div class="center">
				
				<h1>Игра "Угадайка"</h1>

				<div class="box">

					<p id="info">Угадайте число от 0 до 100.<br>У вас 7 попыток.</p>
					<input type="text" id="userAnswer">
					<br>
					<a href="#" onclick="guess();" id="button">Проверить ответ</a>	

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