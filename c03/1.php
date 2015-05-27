<?php
/* 数据类型之间相互转换
 * 	一种是强制转换：
 * 		setType(变量， 类型);  //类型int, integer, float, double,real, bool, boolena, string, array, object
 *		这个函数将原变量的类型改变，var_dump();
 *
 * 	一种自动转换 ： 最常用的方式，因为这种我们开发时不用去管理类型，变量会根据运行环境自动转换 
 *
 * 与变量和类型有关的一些常用函数
 *
 *
 * 常量的声明与使用
 *
 *
 */

	$str="100.12345abc";
	
	setType($str, bool);

	var_dump($str);
