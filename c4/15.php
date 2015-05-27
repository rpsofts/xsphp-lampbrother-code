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
  
  $username="admin";
  $password="123456";
 $email="";

  if($username=="admin" && $password="123456"){
  	echo "用户名和密码输入是正确的<br>";
  }

  if($username=="" || $password=="" || $email==""){
  	echo "所有的值一个都不能为空<br>";
  }

  if((isset($email) && !empty($email)) || (isset($phone) && !empty($phone))){
  	echo "有一种联系方式";
  }
