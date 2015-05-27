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
 *
 * 	3. while() list() each() 组合循环遍历数组
 *
 *      
 *    
 *
 *
 */

  $user=array(1, "zhasna", 40, "nan", "aaa@bb.com");
  
	for($i=0; $i<count($user); $i++){
		echo "\$user[{$i}]=".$user[$i]."<br>";
	}

