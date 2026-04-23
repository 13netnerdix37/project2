<?php
	$head = '
	<meta charset="utf-8">
	<title>Изучаем PHP</title>
	<link rel="stylesheet" href="assets/css/style.css">
	';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<?php echo $head; ?>
</head>

<body>
	<header>
		<div class="content">
			<?php include "inc/index/header_index.php"; ?>
		</div>
	</header>

	<div class="main">
		<div class="content">

<!-- контент --> 
			<!-- контент -->
			<?php include "inc/index/content_index.php"; ?>
		</div>
	</div>

	<footer>
		<div class="content">
			<?php include "inc/index/footer_index.php"; ?>
		</div>
	</footer>
</body>

</html>