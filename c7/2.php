<?php
/* 循环结构
 * 一、while循环
 *	if(表达式)
 *		只一次语句
 *
 *	while(表达式)
 *		反复执行一条语句；
 *
 *	while(表达式){
 *		反复执行这个循环体
 *	}
 *
 * 二、do-while循环
 * 三、for 循环
 *
 * 根据循环条不同有两种类型的循环 
 *
 * 	一种：计数循环       for 
 * 	另一种：条件型循环   while do-while
 *
 *
 */
	echo '<table border="1" width="800" align="center">';
	echo '<caption><h1>使用一个while循环输出的表格</h1></caption>';
		
	$i=0;
	while($i<1000){
		if($i%10==0){
			if($i%20==0){
				$bg="#ffffff";
			}else{
				$bg="#cccccc";
			}
			echo '<tr onmouseover="lrow(this)" onmouseout="drow(this)" bgColor="'.$bg.'">';
		}
		echo '<td>'.$i.'</td>';
		$i++;

		if($i%10==0){
			echo '</tr>';
		}
	}

	echo '</table>';
?>
	<script>
		var ys=null;
		function lrow(obj){
			ys=obj.bgColor;
			obj.bgColor='red';
		}

		function drow(obj){
			obj.bgColor=ys;
		}
	</script>
