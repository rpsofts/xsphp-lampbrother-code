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
		while($i<100){
			if($i%2==0){
				$bg="#ffffff";
			}else{
				$bg="#cccccc";
			}	
			echo '<tr bgcolor='.$bg.'>';
			$j=0;
			while($j<10){
				echo '<td>'.($i*10+$j).'</td>';
				$j++;
			}
			$i++;
			echo '</tr>';
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
