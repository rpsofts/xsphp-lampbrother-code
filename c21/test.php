<?php
function __autoload($className){
	echo $className."<br>";
		include "./".$className.".class.php";
	}

	$o=new One();

	$o->fun1();

	Two::fun2();

	$t=new Three();

	$t->fun3();


	
