<?php
	$var=10;

	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	echo "-----------------------<br>";
	$var=34.5;

	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	echo "-----------------------<br>";
	$var="abc";

	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	echo "-----------------------<br>";
	$var=true;

	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	echo "-----------------------<br>";

	$var=array(1,2,3);

	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	echo "-----------------------<br>";

	$var=new mysqli("localhost", "root", "1993319", "joomla15");

	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	echo "-----------------------<br>";

	$var=fopen("1.php", "r");

	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	echo "-----------------------<br>";




	$var=null;

	echo '<pre>';
	var_dump($var);
	echo '</pre>';

	echo "-----------------------<br>";




