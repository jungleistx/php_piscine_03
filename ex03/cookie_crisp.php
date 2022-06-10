<?php
	$action = $_GET['action'];
	$name = $_GET['name'];
	$value = $_GET['value'];

	switch($action)
	{
		case "set":
			setcookie($name, $value, time() + 86400, '/');
			break;
		case "get":
			if (isset($_COOKIE[$name]))
				print ($_COOKIE[$name] . "\n");
			break;
		case "del":
			setcookie($name, "", time() - 1);
			break;
	}
?>