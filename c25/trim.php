<?php
/*
 * 字符串的特点
 * 	substr("string", 2, 4);
 * 	substr(123456789, 2, 4);
 *	
 *	1. 其它类型的数据用在字符串处理函数中，会自动将其转为字符串后，再处理
 *	2. 可以将字符串视为数组，当做字符集合来看待
 *
 *	$str="abcdefg";
 *	
 *	echo $str[2];
 *	echo $str{2}; 
 *
 *   
 *  强大的PHP中内置字符串处理函数
 *  
 *   1. 常用的字符串输出函数
 *
 *   	echo()
 *   	print()
 *   	die() --- exit();
 *   	printf()  格式化字符串
 *   	sprintf() 返回格式化的字符串
 *   	%%
 *   	%b
 *   	%c
 *   	%d
 *   	%f
 *   	%o
 *   	%x
 *   	%s
 *   2. 常用的字符串格式化函数
 *   	ltrim()
 *   	rtrim();
 *	trim();
 *   
 *      空格是在字符串中占一位的
 *  
 *	str_pad()
 *	strtolower(); 
 *	strtoupper();
 *	ucfirst();
 *	ucword()
 *	nl2br
 *	htmllentities();
 *	htmlspecialchars
 *	stripslashes() 
 *	strip_tags()
 *	number_format()
 *	strrev()
 *	md5();
 *
 *	在PHP中所有字符串处理函数，都不是在原字符串上修改， 而是返回一个新格式化后的字符串。
 *
 *   admin 
 *
 */

	$str="   abc    ";

	echo strlen($str)."<br>";
	echo strlen(rtrim($str))."<br>";
	echo strlen(ltrim($str))."<br>";
	echo strlen(trim($str))."<br>";

	$str="123This is a Test ...";

	echo ltrim($str, '1')."<br>";
	echo ltrim($str, '0..9')."<br>";
	echo trim($str, '0..9 .')."<br>";

	$arr=array("aa", "bb", "cc", "dd");
	$nstr="";
	foreach($arr as $value){
		$nstr.=$value."--#";
	}

	$nstr=trim($nstr, "--#");
	echo $nstr;
	

   

  
