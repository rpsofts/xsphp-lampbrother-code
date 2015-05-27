<?php
	require "conn.inc.php";


	//语句分两类,一个是影响行数的语句，另一类是有结果集（select）即分：select和非select
	$sql="delete from shops where id > 5";

	echo $sql."<br>";
	//如果是select语句返回结果集（资源），失败返回false，所有执行非select语句，成功返回true，失败返回false
	$result=mysql_query($sql);
	//解决错误
	if(!result) {
		echo "ERROR ".mysql_errno()." :".mysql_error();
		exit();
	}

	if(mysql_affected_rows() > 0) {
		echo "执行成功"."<br>";
	}else{
		echo "记录没有改变"."<br>";
	}

	echo "最后自动增长的ID".mysql_insert_id()."<br>";
	echo "影响的行数".mysql_affected_rows()."<br>";

	var_dump($result);
	mysql_close();