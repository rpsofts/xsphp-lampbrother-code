<?php
	$a=$b=$c=$d="value";
	
	unset($a);

	if(isset($a)){
		echo $a;
	}else{
		echo "not exists!";
	}
