<?php
/*
 * 字符串的特点
 * 	substr("string", 2, 4);
 * 	substr(123456789, 2, 4);
 *	
 *	1. 其它类型的数据用在字符串处理函数中，会自动将其转为字符串后，再处理
 *	2. 可以将字符串视为数组，当做字符集合来看待
 *
 *	$str="abcdefg";
 *	
 *	echo $str[2];
 *	echo $str{2}; 
 *
 *   
 *  强大的PHP中内置字符串处理函数
 *  
 *   1. 常用的字符串输出函数
 *
 *   	echo()
 *   	print()
 *   	die() --- exit();
 *   	printf()
 *   	sprintf()
 *
 */
fopen("11.php", "r") or  die("打开文件失败");

echo "执行到这里了<br>";


