<?php
	$action = $_GET['action'];
	$name = $_GET['name'];
	$value = $_GET['value'];

	switch($action)
	{
		case "set":
			if ($name && $value)
				setcookie($name, $value, time() + 86400, '/');
			break;
		case "get":
			if ($_COOKIE[$name])
				echo "$_COOKIE[$name]\n";
			break;
		case "del":
			setcookie($name, "", time() - 3600);
			break;
	}
?>