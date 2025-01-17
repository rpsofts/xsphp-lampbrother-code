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
 *
 *	大小写有关的函数
 *	strtolower(); 
 *	strtoupper();
 *	ucfirst();
 *	ucword()
 *	和HTML标签相关的字符串格式化
 *	nl2br
 *	htmllentities();
 *	htmlspecialchars
 *	stripslashes() 
 *	strip_tags()
 *
 *	其它的字符串格式化函数
 *	number_format()
 *	strrev()
 *	md5();
 *
 *	在PHP中所有字符串处理函数，都不是在原字符串上修改， 而是返回一个新格式化后的字符串。
 *
 *   admin 
 *
 */
?>
<form>
	input: <input type="text" name="str" size=100>
		<input type="submit" value="提交">
	<br>
</form>

<?php
	echo $_GET["str"]."<br>";
	echo htmlspecialchars($_GET["str"])."<br>";
	echo stripslashes($_GET["str"])."<br>";
	echo htmlspecialchars(stripslashes($_GET["str"]))."<br>";
	echo strip_tags($_GET["str"], '<b><p><h1>')."<br>";
