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
  *  3. 重用函数(使用自己定义的函数库)
  *      
  *
  *      require
  *      include
  *      require_once
  *      include_once
  *   
  *      .txt  .html  .php 
  *
  *
  *      include(文件名);
  *      include "文件名";
  *      
  *      echo "@@@@@@@@@@@2";
  *      echo("@@@@@@@@@@@@@");
  *      break
  *      exit;
  *
  *     include "config.inc.php";
  *     include("config.inc.php")
  *
  *  4. 一些系统函数的使用
  *
  *  
 *
  */


   include_once "test.txt";
   include_once "test.txt";
   include_once "test.txt";

   require_once("test.html");
   require_once("test.html");
   require_once("test.html");

   include "test.inc.php";
   include_once "test.inc.php";

   echo $a."<br>";

   test();
