<?php
	require_once("connect.inc");

	/*** test mysqli_connect 127.0.0.1 ***/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$cset = substr(mysqli_character_set_name($link),0,6);

	var_dump($cset);

	mysqli_close($link);
	print "done!";
?>
