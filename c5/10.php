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

$sex=$_GET["sex"];

$age=$_GET["age"];

if($sex=="nan"){
	if($age >= 60){
		echo "这个男士已经退休".($age-60)."年了";
	}else{
		echo "这个男士还在工作，还有".(60-$age)."年才退休<br>";
	}
}else{
	if($age >= 66){
		echo "这个女士已经退休".($age-55)."年了";
	}else{
		echo "这个女士还在工作，还有".(55-$age)."年才退休<br>";
	}
}



