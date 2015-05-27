<?php
/*  PHP的变量的范围
 *	局部变量： 在函数中声明的变量就是局部变量，只能在自己的函数内部使用。
 *	全局变量：
 *
 *
 *
 */

  function demo(){
  	$a=100;
  }

  demo();
  demo();
  demo();
  demo();
  demo();
  demo();

  echo $a."<br>";

  function test(){
  	echo $a."<br>";
  }

  test();


