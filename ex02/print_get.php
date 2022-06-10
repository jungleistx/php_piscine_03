<?php
	$array = $_GET;

	foreach($array as $key => $value)
	{
		print($key . ": " . $value . "\n");
	}
?>