<?php
/* 数组的遍历
 *
 * 	1. 使用for语句循环遍历数组
 * 	   a. 其它语言（只有这一种方式）
 *         b. PHP中这种方式不是我们首选方式
 *         c. 数组必须是索引数组，而且下标还必须是连续的
 *            （索引数组下标还可以不连序，数组还有关联数组）
 *   
 *
 * 	2. 使用foreach语句循环遍历数组
 * 	   foreach(数组变量 as 变量值){
 *		//循环体
 * 	   }
 * 	   a. 循环次数由数组的元素个数决定
 * 	   b. 每一次循环都会将数组中的元素分别赋值给后面变量
 *
 * 	   foreach(数组变量 as 下标变量=> 值变量){
 *		
 * 	   }
 *
 * 	3. while() list() each() 组合循环遍历数组
 *
 *       each()函数， 
 *       	a. 需要一个数组作为参数
 *       	b. 返回来的也是一个数组
 *       	c. 返回来的数组是0, 1, key, value四个下标(固定的)
 *       	 0和key下标是当前参数数组元素的鍵
 *       	 1和value下标是当前对数数组元素的值
 *
 *              d. 默认认当前元素就是第一个元素
 *              e. 每执行一次后就会将当前元素向后移动
 *              f. 如果到最后的元素再执行这个函数，则返回false
 *
 *		//Array ( [1] => 1 [value] => 1 [0] => id [key] => id ) 
 *    
 *      list()函数
 
 * 		a. list()=array(); 需要将一个数组赋值给这个函数
 * 		b. 数组中的元素个数，要和list()函数中的参数个数相同
 * 		c. 数组中的每个元素值会赋值list()函数中的每个参数，list()将每个参数转为变量
 * 		d. list()只能接收索引数组
 * 		e. 按索引的下标的顺序
 */
/*
	$user=array("id"=>1, "name"=>"zhangsan", "age"=>10, "sex"=>"nan");
	
	while($arr=each($user)){
		//echo $arr[0]."==>".$arr[1]."<br>";
		echo $arr["key"]."---->".$arr["value"]."<br>";
	}
 */	
	
	$user=array("id"=>1, "name"=>"zhangsan", "age"=>10, "sex"=>"nan");

	print_r(each($user));

	list($key, $value)=each($user);  //Array ( [1] => 1  [0] => id  ) 

	echo $key."-->".$value;
	
