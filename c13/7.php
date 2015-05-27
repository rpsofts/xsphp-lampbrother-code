<?php
/* 预定义数组：
 * 	自动全局变量---超全局数组
 *
 * 	1. 包含了来自WEB服务器，客户端，运行环境和用户输入的数据
 * 	2. 这些数组比较特别
 * 	3. 全局范围内自动生效，都可以直接使用这些数组
 * 	4. 用户不能自定义这些数组, 但这些数据操作方式又和我们自定义的数组操作方式一样
 * 	5. 在函数中直接可以使用这些数组
 *
 *	$_GET       //经由URL请求提交至脚本的变量 
 *	$_POST      //经由HTTP POST 方法提交到脚本的变量
 *	$_REQUEST   //经由GET, POST和COOKIE机制提交 到脚本的变量，因此该数组并不值得信任，不去使用（尽量）
 *	$_FILES     //经由HTTP POST  文件上传而提交至脚本， 文件处理一章，文件上传
 *	$_COOKIE    //
 *	$_SESSION   //
 *	$_ENV       //执行环境提交至脚本的变量
 *	$_SERVER    //变量由WEB服务器设定的，或 直接和当前脚本的执行环境相关联
 *	$GLOBALS
 *
 *
 *
 */
?>

<?php
	echo '<pre>';
	print_r($_ENV);
	echo '</pre>';

	echo $_ENV["OS"]."<br>";

	foreach($_ENV as $key=>$value){
		echo $key."=".$value."<br>";
	}
