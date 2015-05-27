<?php
 /*
  *  1. 内部函数： PHP可以在函数内部再声明函数
  *  		  目的就是在函数的内部调用
  *  		  就是用来帮助外部函数完成一些子功能的。
  *
  *
  *  2. 递归函数
  *
  *
  *  3. 重用函数
  *
  *
  *  4. 一些系统函数的使用
 *
  */

	function score($php, $java,$dotnet){
		function php($php){
			if($php>60)
				return "及格";
			else
				return "不极格";
		}

		function java($java){
			if($java>60)
				return "及格";
			else
				return "不及格";
		}

		function dotnet($dotnet){
			if($dotnet > 60)
				return "及格";
			else
				return "不及格";
		}

		$total=$php+$java+$dotnet;

		$agv=$total/3;

		echo "你的php成绩是 {$php} 分, ".php($php)."<br>";
		echo "你的java成绩是 {$java} 分, ".java($java)."<br>";
		echo "你的dotnet成绩是 {$dotnet} 分, ".dotnet($dotnet)."<br>";

		echo "你的总分是： {$total} <br>";
		echo "你的平均分是：{$agv} <br>";
	}


	score(50, 90, 70);
