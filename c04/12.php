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
     
      逻辑运算符只能操作bool型值， 返回的也是bool型值

 */

var_dump(true && true);    //true
var_dump(true and false);   //false
var_dump(true || false);   //true
var_dump(!true);           //false
var_dump(!false);          //true
