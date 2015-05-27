<?php
/*  PHP的变量的范围
 *	局部变量： 在函数中声明的变量就是局部变量，只能在自己的函数内部使用。
 *	全局变量： 在函数外声明，在变量声明以后的，直到整个脚本结束前都可以使用,包括在函数中和｛｝中都可使用
 *    
 *      PHP的变量分不出 是声明还是使用, 
 *      在PHP中使用全局变量 要通过global关键字将这个全局变量包括到函数中才能使用到，在global声明之后才是使用全局的变量
 *
 *
 */

$a=10;


function demo(){
	global $a;
	$a+=10;
	echo $a." demo<br>";
}

function test(){
	global $a;
	$a+=5;
	echo $a." test<br>";
}

echo $a."----<br>";
demo();
echo $a."!!!!<br>";
demo();
echo $a."@@@@@<br>";
test();
echo $a."#######<br>";
