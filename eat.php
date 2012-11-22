<?php
	require_once('db.php');

	mysql_query("INSERT INTO pies VALUES ('', UNIX_TIMESTAMP())");

	echo 'Eaten.';
?>