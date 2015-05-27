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
 * 根据循环条不同有两种类型的循环 
 *
 * 	一种：计数循环       for 
 * 	另一种：条件型循环   while do-while
 *
 *    
 *
 */
  
  $i=0;
  do{
	  echo "$i : this is do---while <br>";
	  $i++;
  }while(0);

  $i=0;
  while(0){
	  echo "$i: this is while <br>";
	  $i++;
  }
