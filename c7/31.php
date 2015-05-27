<?php
/* 循环结构
 * 一、while循环
 *	if(表达式)
 *		只一次语句
 *
 *	while(表达式)
 *		反复执行一条语句；
 *
 *	while(表达式){
 *		反复执行这个循环体
 *	}
 *
 *  	while是先判断条件，成立则执行
 * 二、do-while循环
 *	
 *	do-while是先执行再判断条件
 *
 * 三、for 循环
 *   
 *   for(初使化;条件表达式;增量){
 *		循环体
 *   }
 *
 *
 * 根据循环条不同有两种类型的循环 
 *
 * 	一种：计数循环       for 
 * 	另一种：条件型循环   while do-while
 *
 *    
 *
 *    几个和循环有关的语句
 *
 *    break;   continue;  exit;  return;
 *
 */
/*
for($i=9; $i>=1; $i--){
	for($j=$i; $j>=1; $j--){
		echo "$j x $i = ".$j*$i."&nbsp;&nbsp;";
	}
	echo '<br>';

} */

    for($i=0; $i<100; $i++){

	    if($i==50)
		    break;
    	echo "$i ###################<br>";
    }
 
