<?php
/* 运算符号（PHP）操作符号 
 * 
 *    一、算术运算符    +   -  *  /  %  ++  --
 *    二、字符串运算符  .  可以叫连接运算符号 
 *    三、赋值运算符    =   += -= *= /= %=  .= 
 *    四、比较运算符    >  <  >= <= == ===  != 或<> !== 
 *    五、逻辑运算符    && 或and  ||或 or  ! 或not   
 *    六、位运算符      &   ｜ ^ ~   <<  >> >>>
 *    七、其他运算符   ? :  ``  @  => -> ::  & $
 *   
 *     比较运算符---条件运算符----关系运算符
 *
 *     比较后的结果只有一种：boolean  true false
 *
 *     ===  比较时不仅要求内容相同，也要求类型相同
 *     !==  
 */

$a=100;

if($a==="100"){
	echo "111111111111111";
}else{
	echo "0000000000000";
}
