<?php
	require_once('db.php');
	$rows = mysql_num_rows(mysql_query("SELECT * FROM pies"));
?>

<html>
	<head>
		<title>How Many Mince Pies has Alex Eaten?</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="all">
			<img src="pie.jpg">
			<p>Alex has eaten this many pies this Christmas:</p>
			<h1><?php echo $rows; ?></h1>
		</div>
	</body>
</html>