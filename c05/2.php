<?php
/* 《细说PHP》中第6章
 *
 *   流程控制
 *
 *    一、顺序结构
 *    二、分支结构--条件结构--选择结构
 *	1. 单路分支
 *	        //条件bool, true或false,  > < == !=  & || !  isset()
 *		if(条件)
 *			执行下面一条语句
 *
 *		if(条件)
 *		{
 *			代码段；
 *			代码段；
 *		}
 *		
 *
 *	2. 双路分支
 *	  使用else从句
 *
 *	  if(条件)
 *	  	执行一条语句
 *	  else
 *	  	执行一条语句
 *
 *	  if(条件){
 *		一条或多条代码	
 *	  }else{
 *		一条或多条代码
 *	  }
 *
 *	3. 多路分支
 *	   可以使用 if  else if  和 switch case 
 *	   //这是一种互斥的关系。
 *	   if(条件){
 *
 *	   }elseif(条件){
 *
 *	   }elseif(条件){
 *
 *	   }else if(条件){
 *
 *	   }else{
 *
 *	   }
 *
 *	   switch(变量){
 *		case 值：
 *			代码;
 *			break;
 *		case 值1:
 *			代码；
 *			break;
 *		default:
 *			代码；
 *
 *	   }
 *	
 *	4. 嵌套分支
 *	    if(){
 *			if(){
 *
 *			}else{
 *				if(){
 *
 *				}
 *			}
 *	    }else{
 *			if(){
 *
 *			}else{
 *				swicth(){
 *
 *				}
 *			}
 *	    }
 *
 *    三、循环结构
 *
 *
 *
 *
 */

 $a=100;
 $b=50;
 
 if($a < $b){
 	$t=$a;
	$a=$b;
	$b=$t;
 }

 var_dump($a > $b);
