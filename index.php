<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="top">
		<div class="bigLogo">
			<div class="home"><a href="">VGO.RU</a></div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<div class="regist"><a href="">РЕГИСТРАЦИЯ</a></div>
			<div class="auth"><a href="author/index.php">ВХОД</a></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
			<?php
			require_once 'function.php';
			require_once 'author/Handler.php';
			$handler = new Handler();
			$handler->connect();
			$pdoConnection = $handler->connect();
			$stmt = $pdoConnection->query('select * from posts order by publ_date desc');
			$resultObjectArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
			foreach ($resultObjectArray as $post) {
				printNewPreview($post);
			}
			?>
		</div>
	</div>
</body>
</html>