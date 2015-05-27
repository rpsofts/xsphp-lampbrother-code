<?php
	require "conn.inc.php";


	//语句分两类,一个是影响行数的语句，另一类是有结果集（select）即分：select和非select
	$sql="CREATE TABLE if not exists shops(id int not null auto_increment, name varchar(50) not null default '', price double not null default '0.00', num int not null default '0', desn text, primary key(id), key name(name, price))";

	//如果是select语句返回结果集（资源），失败返回false，所有执行费select语句，成功返回true，失败返回false
	$result=mysql_query($sql);
	//解决错误
	if(!result) {
		echo "ERROR ".mysql_errno()." :".mysql_error();
		exit();
	}

	var_dump($result);
	mysql_close();