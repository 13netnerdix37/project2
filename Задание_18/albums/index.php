<?php
	$header = '<div class="logo">
				<img src="../assets/logo.png" alt="logo">
				<a href="/">
					<h3>Музыкальный сервис</h3>
				</a>
			</div>
			<nav>
				<a href="/teams">Группы</a> |
				<a href="/albums">Альбомы</a> |
				<a href="/tracks">Треки</a> |
				<a href="/admin">Консоль</a>
			</nav>
	';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Изучаем PHP</title>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
	<header>
		<div class="content ins">
			<?php echo $header; ?>
		</div>
	</header>

	<div class="main ins">
		<div class="content ins">
			<?php include "../inc/albums/content_albums.php"; ?>
		</div>
	</div>

	<footer>
		<div class="content">
			<?php include "../inc/albums/footer_albums.php"; ?>
		</div>
	</footer>
</body>

</html>