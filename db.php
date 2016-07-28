<?php 
	$dbc = mysql_connect('localhost', 'market', '2ESx7NaaHzKBt8aH'); 
	if (!$dbc) {
		die('Could not connect: ' . mysql_error());
	}
	//echo 'Connected Successfully!';
	mysql_close($dbc)
?>