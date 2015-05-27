<?php
	require "demo.php"; // Person Class
	$str=file_get_contents("mess.txt");


	$pp=unserialize($str);

	$pp->say();
