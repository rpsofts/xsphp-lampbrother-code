<?php
/* 数组的排序函数
 *    sort()
 *    rsort()
 *    usort()
 *    asort()
 *    arsort()
 *    uasort()
 *    ksort()
 *    krsort()
 *    uksort()
 *    natsort()
 *    natcasesort()
 *    array_multisort()
 *
 *    1. 简单的数组排序
 *      sort() rsort()
 *    2. 根据键名对数组排序
 *    	ksort() krsort()
 *    3. 根据元素的值对数组排序
 *      asort() arsort()
 *    4. 根据“自然数排序”法对数组排序
 *    	natsort()  natcasesort()
 *    5. 根据用户自定义规则对数组排序
 *       usort() uasort() uksort()
 * 
 * 拆分、合并、分解、接合的数组函数
 *
 * 数组与数据结构的函数
 *
 * 其它与数据操作有关的函数
 *
 *
 *
 */

$lamp=array("Linux", "Apache", "MySQL","PHP");

usort($lamp, "sortbylen");

function sortbylen($one, $two){
	if(strlen($one)==strlen($two))
		return 0;
	else
		return (strlen($one)<strlen($two))?1:-1;
}

print_r($lamp);
echo '<br>';


