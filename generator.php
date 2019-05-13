<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		var arr = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0"];

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function getRandomNumber(max){
			return Math.round(Math.random() * max);
		}
		
		function write(text) {
			document.getElementById("info").innerHTML = text;
		}

		function hide(id) {
			document.getElementById(id).style.display = "none";
		}
		
		function generate(array, length){
			if (isNaN(length)) {
				write("Вы забыли указать длину пароля!");
			} else {
				var text = "";
				for (var i = 0; i < length; i++) {
					var n = getRandomNumber(array.length - 1);
					text = text + array[n];
				}
				write(text);
				hide("button");
				hide("userAnswer");
			}
		}

	    function generation() {
	    	var userAnswer = readInt();
	    	generate(arr, userAnswer);
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
				
				<h1>Генератор паролей</h1>

				

				<div class="box">
					<p>Программа сгенерирует пароль используя строчные и заглавные буквы английского алфавита и цифры. Вам нужно только указать длину пароля. </p>
					<h3 id="info">     Введите длину пароля:</h3>
					<input type="text" id="userAnswer">
					<br>
					<a href="#" onclick="generation();" id="button">Генерировать</a>	

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