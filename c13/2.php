<?php
/* 预定义数组：
 * 	自动全局变量---超全局数组
 *
 * 	1. 包含了来自WEB服务器，客户端，运行环境和用户输入的数据
 * 	2. 这些数组比较特别
 * 	3. 全局范围内自动生效，都可以直接使用这些数组
 * 	4. 用户不能自定义这些数组
 *
 *	$_GET  
 *	$_POST
 *	$_REQUESt
 *	$_FILES
 *	$_COOKIE
 *	$_SESSION
 *	$_ENV
 *	$_SERVER
 *	$GLOBALS
 *
 *
 *
 */
 $arr=array(10, 20);
 $_GET=array(50, 90);
function demo(){
	global $arr;
	print_r($arr);
	print_r($_GET);
 }

 demo();
