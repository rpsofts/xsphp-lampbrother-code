<?php
	require "conn.inc.php";


	//语句分两类,一个是影响行数的语句，另一类是有结果集（select）即分：select和非select
	$sql="insert into shops(name, price, num, desn) values('{$_GET["name"]}','{$_GET["price"]}','{$_GET["num"]}','{$_GET["desn"]}')";

	echo $sql."<br>";
	//如果是select语句返回结果集（资源），失败返回false，所有执行费select语句，成功返回true，失败返回false
	$result=mysql_query($sql);
	//解决错误
	if(!result) {
		echo "ERROR ".mysql_errno()." :".mysql_error();
		exit();
	}

	echo "最后自动增长的ID".mysql_insert_id()."<br>";
	echo "影响的行数".mysql_affected_rows()."<br>";

	var_dump($result);
	mysql_close();