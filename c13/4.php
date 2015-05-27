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
 *	$_SERVER
 *	$GLOBALS
 *
 *
 *
 */
?>

<?php
	echo $_GET["username"]."<br>";
	echo $_GET["email"]."<br>";
	echo $_GET["page"]."<br>";
	$_GET["eeee"]="@@@@@@@@@@@@";
	print_r($_GET);
	print_r($_POST);
	print_r($_REQUEST);
?>

<form action="demo.php" method="post">
	username : <input type="text" name="uname"><br>
	password:  <input type="password" name="pass"><br>
	<input type="submit" value="login"> <br>
</form>


<a href="demo.php?username=zhangsan&email=aaa@bbb.com&page=45">this is a $_GET test</a>
