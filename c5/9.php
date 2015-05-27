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
 *    如果是判断一段范围我们使用elseif
 *    如果是单个值匹配我们使用switch
 *      
 *      *	
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

$week=date("D");
$week=111;

//switch(变量) 变量只用整型和字符串
//如果变量没有匹配的值则执行default中的区域，需要就可以加上
//break 是退出switch, 用来设置多个值匹配执行同一段代码
switch($week){
	case 1:
	case 11:
	case 111:
	case 1111:
	case 11111:
		echo "111111111111<br>";
		break;
	case "Mon":
		echo  "星期一";
		break;
	case "Tue":
		echo  "星期二";
		break;
	case "Wed":
		echo  "星期三";
		break;
	case "Thu":
		echo  "星期四";
		break;
	case "Fri":
		echo  "星期五";
		break;
	default:
		echo "周末";
}


