<?php
	$link = mysql_connect('localhost', 'root', '1993319') or die("connect error!");


	mysql_select_db('xsphpdb') or die("select db error!");

function table($tabname) {

	$sql="select * from {$tabname}";

	$result=mysql_query($sql);


	$cols=mysql_num_fields($result);
	$rows=mysql_num_rows($result);

	echo '<table align="center" width="800" border="1">';
	echo '<caption><h1>'.$tabname.'</h1></caption>';
	echo '<tr>';
	for($i=0; $i<$cols; $i++) {
		echo '<th>'.mysql_field_name($result, $i).'</th>';
	}
	echo '</tr>';
	while($row=mysql_fetch_assoc($result)) {
		echo '<tr>';

		foreach ($row as $value) {
			# code...
			echo '<td>'.$value.'</td>';
		}
		


		echo '</tr>';
	}

	echo '</table>';

	echo "表 列{$cols}, 行{$rows} <br>";

	mysql_free_result($result);
}
	table('shops');
	table('users');
	table('article');
	table('mysql.user');


	mysql_close();