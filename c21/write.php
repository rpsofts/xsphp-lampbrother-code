<?php
	require "demo.php";

		
	$p=new Person('张三', 10, '男');

	$str=serialize($p);

	file_put_contents("mess.txt", $str);
