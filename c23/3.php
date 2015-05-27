<?php
/* 接口技术
 *
 * 接口中一种特殊的抽象类， 抽象类又是一种特殊的类
 *
 *
 * 接口和抽象类是一样的作用
 *
 * 因为在PHP是单继承的， 如果使用抽象类，子类实现完抽象类就不能再去继承其它的类了。
 *
 * 如果即想实现一些规范， 又想继承一个其他类。就要使用接口
 *
 *    接口和抽象类的对比
 *
 *    1. 作用相同，都不能创建对象， 都需要子类去实现
 *    2. 接口的声明和抽象类不一样
 *    3. 接口被实现的方式不一样
 *
 *    4. 接口中的所有方法必须是抽象方法，只能声明抽象方法（不用使用abstract修饰）
 *    5. 接口中的成员属性，只能声明常量，不能声明变量
 *
 *    6. 接口中的成员访问权限 都必须是public, 抽象类中最低的权限protected
 *  
 *    7. 使用一个类去实现接口， 不是使用extends关键字， 而是使用implements这个词
 *
 *	 如果子类是重写父接口中抽象方法，则使用implements, 类--接口， 抽象类---接口 implements 接口---接口 extends
 *
 *    可以使用抽象类去实现接口中的部分方法
 *    如果想让子类可以创建对象，则必须实现接口中的全部抽象方法
 *    
 *    可以定义一个接品口去继承另一个接品口
 *
 *    一个类可以去实现多个接口（按多个规范去开发子类）, 使用逗号分隔多个接口名称
 *
 *    一个类可以在继承一类的同时，去实现一个或多个接口(先继承，再实现)
 *
 *    使用implements的两个目的
 *    	1. 可以实现多个接口 ，而extends词只能继承一个父类
 *    	2. 没有使用extends词，可以去继承一个类， 所以两个可以同时使用
 *
 *
 *
 *
 *   
 *
 *    class 类名{
 *
 *    }
 *
 *    abstract class 类名 {
 *
 *    }
 *
 *   声明方式
 *
 *   interface 接口名{
 *
 *   }
 * 
 *
 */

  interface Demo {
	  const HOST="localhost";
	  const USER="Admin";

	  function fun1();
	  function fun2();
  }

  interface Demo2 extends Demo {
  	function fun3();

	function fun4();
  }

  interface Demo3 {
  	function fun5();
	function fun6();
  }
  interface Demo4{
  	function fun7();
  }

  class Hello {
  	function fun8(){
	
	}
  }

   class Test extends Hello implements Demo2,Demo3,Demo4 {
  	function fun1(){
	
	}

	function fun2(){
	
	}
	function fun3(){
	
	}

	function fun4(){
	
	}
	function fun5(){
	
	}

	function fun6(){
	
	}
	function fun7(){
	
	}
  }

