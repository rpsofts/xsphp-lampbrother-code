<?php
/* 数组的相关处理函数
 * 
 *  一 数组键/值操作有关的函数
 *  	1.  array_values()
 *  	2.  array_keys()
 *  	3.  in_array()
 	4. array_key_exists
	5.array_flip -- 交换数组中的键和值
	6. array_reverse --  返回一个单元顺序相反的数组 
   
    二、 统计数组元素的个数和惟一性

    1. count() sizeof();
    2. array_count_values -- 统计数组中所有的值出现的次数
    3. array_unique -- 移除数组中重复的值

    三、使用回调函数处理数组的函数

    	1. array_filter()  用回调函数过滤数组中的单元 
	2. array_walk()   数组中的每个成员应用用户函数

	3. array_map()     将回调函数作用到给定数组的单元上 
 *
 *
 */
$lamp=array("os"=>"linux", "wb"=>"apache", "db"=>"mysql", "la"=>"php");
$lp=array("os"=>"window", "wb"=>"apache", "db"=>"oracle", "la"=>"php");


	$arr=array_map("myfun1", $lamp, $lp);

	function myfun1($n, $t){
		if($n==$t){
			return "same";
		}

		return "different";
	}
  
echo '<pre>';
print_r($arr);
echo '</pre>';

