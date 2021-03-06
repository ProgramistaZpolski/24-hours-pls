<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>24 hours pls</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="pzplui-strict-mode text-center">
	<h1 class="d1 line-height-6">24 hours pls</h1>
	<?php if ($calc) : ?>
		<h2><i><?= $_GET["time"] ?></i> is <?= $calc ?></h2><br>
	<?php endif; ?>
	<form class="inputs container" action="index.php" method="get">
		<label for="time">Time in 12-hour format</label>
		<input type="text" name="time">
		<button type="submit" class="btn btn-normal">Make it normal!</button>
	</form>
</body>
</html>
