<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		var answer = parseInt(Math.random() * 100);
		
		
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


		var playerNumber = 1;

		function guess() {
			var userAnswer = readInt();
			
				if (userAnswer == answer) {
					write("<b>Поздравляю, вы угадали!<br>Победил игрок: </b>" + playerNumber);
					hide("button");
					hide("userAnswer");
				} else if (userAnswer > answer) {
					if(playerNumber == 1)
						playerNumber = 2;
					else
						playerNumber = 1;
					write("Вы ввели слишком большое число.<br>Ход переходит к игроку  " + playerNumber + " <br>Введите число от 0 до 100: ");
				} else if(userAnswer < answer){
					if(playerNumber == 1)
						playerNumber = 2;
					else
						playerNumber = 1;
					write("Вы ввели слишком маленькое число.<br>Ход переходит к игроку  " + playerNumber + " <br>Введите число от 0 до 100");
				} else if(isNaN(userAnswer)) {
					write("Нужно было ввести число.<br> Попробуйте ещё раз.<br>Угадайте число от 0 до 100.<br>Ходит игрок  " + playerNumber);
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
				
				<h1>Игра "УГАДАЙКА-2".</h1>

				<div class="box">

					<p>Правила игры: два игрока по очереди пытаются отгадать число от 0 до 100, ориентируясь на подсказки. <br>Побеждает тот игрок, который угадает число первым.</p>
					<br><br>
					<p id="info">Первым угадывает игрок 1.<br> Угадайте число от 0 до 100:</p>
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