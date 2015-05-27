<?php

	$link = mysql_connect('localhost', 'root', '1993319');

	if (!$link) {
		die('数据库连接失败: ' . mysql_error());
	}

	mysql_select_db('xsphpdb');


