<?php
 /*
  *  1. 内部函数： PHP可以在函数内部再声明函数
  *  		  目的就是在函数的内部调用
  *  		  就是用来帮助外部函数完成一些子功能的。
  *
  *
  *  2. 递归函数: 就是在自己内部调用自己的函数名
  *
  *
  *  3. 重用函数
  *
  *
  *  4. 一些系统函数的使用
 *
  */

    function demo($num){
    	echo $num."<br>";

	if($num>0)
		demo($num-1);
	else
		echo "--------------------<br>";

	echo $num."<br>";
    }

    demo(10);