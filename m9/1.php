<?php
	$link = mysql_connect('localhost', 'root', '1993319') or die("connect error!");


	mysql_select_db('xsphpdb') or die("select db error!");

	$sql="select id, name, num, desn from shops";

	$result=mysql_query($sql);


	echo '<table align="center" width="800" border="1">';
	echo '<caption><h1>演示表</h1></caption>';

	while(list($id, $name, $price, $num, $desn)=mysql_fetch_row($result)) {
		echo '<tr>';
		echo '<td>'.$id.'</td>';
		echo '<td>'.$name.'</td>';
		echo '<td>'.$price.'</td>';
		echo '<td>'.$num.'</td>';
		echo '<td>'.$desn.'</td>';
		

		echo '</tr>';
	}

	echo '</table>';

	mysql_close();