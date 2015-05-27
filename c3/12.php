<?php
/* 数据类型之间相互转换
 * 	一种是强制转换：
 * 		setType(变量， 类型);  //类型int, integer, float, double,real, bool, boolena, string, array, object
 *		这个函数将原变量的类型改变，var_dump();
 *
 *		在赋值前使用(类型)的形式, 不会改变原变量的类型
 *
 *		$a=(int)"123abc";
 *		
 *		$变量=intval(变量或值);
 *		$变量=floatval(变量或值);
 *		$变量=stringval(变量或值);
 *
 *		注意： 整型在内存中占4个字节，  2.147e9
 *			浮点型在内存中点8个字节
 *
 * 		字符串
 *
 * 			
 *
 * 	一种自动转换 ： 最常用的方式，因为这种我们开发时不用去管理类型，变量会根据运行环境自动转换 
 *
 *
 * 与变量和类型有关的一些常用函数
 *    isset(); 值如果是null，也表示空
 *    empty();  //判断一个变量是否为空， “”  null
 *    unset();
 *
 *    setType();  
 *
 *    getType();  //var_dump();
 *
 *    变量类型测试函数
 *    is_bool();
 *    is_int() is_integer() is_long()
 *    is_string();
 *    is_float(), is_double() is_real()
 *    is_array()
 *    is_object()
 *    is_resource()
 *    is_null();
 *
 *    is_scalar()
 *    is_numberic()
 *    is_callable()
 *
 * 常量的声明与使用
 *
 *
 */
	$a=array("one", "two", 1, 4, 6, 8, 9);
	if(is_array($a)){
		print_r($a);
	}else{
		echo $a;
	}
