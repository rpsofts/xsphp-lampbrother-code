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

$hour=date("H"); //11   互斥

if($hour < 6){
	echo "凌晨好";	
}elseif($hour < 9){
	echo "早上好";
}elseif($hour < 12){
	echo "上午好";
}elseif($hour < 14){
	echo "中午好";
}elseif( $hour < 17){
	echo "下午好";
}elseif($hour < 19){
	echo "傍晚好";
}elseif($hour < 22){
	echo "晚上好";
}else{
	echo "夜里好";
}


