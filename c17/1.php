<?php
/*  类的声明
 *   1. 你要开发的是什么， 确定写什么类
 *   2. 类中的成员一定要属于这个类
 *   电话的类
 *
 *   [修饰类的关键字] class 类名{
 *	成员属性：外观、颜色、电池容量、屏幕尺寸 ....  
 *	成员方法：打电话、发信息、播放音乐、拍照 .... 
 *   }
 *    
 *   在类中声明成员属性时： 前面必须有修饰词,当不知道使用那个时，就使用var,如果知道使用那一个修饰关键字，就不使用var了
 *
 *   类中的成属性，如果创建多个对象时，每个对象有不同的属性值时，不要直接组初值
 *
 *   在创建好对象之后再给值
 *    
 *
 *   一个文件只保存一个类， 文件名中包含类名， 文件：类名.class.php
 *   自动加载
 *   aaa bbb ccc 
 *   变量: aaaBbbCcc
 *   函数：aaaBbbCcc
 *   常量：AAABBBCCC
 *   类名：AaaBbbCcc
 *
 *   一定要有意义
 *
 *
 *
 *  实例化对象
 *
 *
 *  对象的使用
 *
 *  对象在内存中的分配
 *
 *
 */
class Phone {
	  //成员属性
	  var  $pinPai; 
  	  var $color;
	  var $batteryCapacity;
	  var $screenSize;
	  //成员方法
	  static function  call($number){
	  
	  }

	 function message(){
	 
	 }

	  function playMusic(){
	  
	  }

          function photo(){
	  
	  }	  
  }

  class Person {
  	var $name="zhangsan";
  }
