<?php
header('content-type:text/html;charset=utf-8');
//self关键字可以访问自身成员的方法 也可以用于访问自身的静态成员的类常量 不能用于访问类自身的属性
class BaseClass{
	//对于不想被任何继续的类可以在class前添加final关键字
	public function test(){
		echo 'BaseClass::test called'.'<br/>';
	}
	//添加final关键字可以让此方法不能在子类中重写 但是方法可以被调用
	final public function test1(){
		echo 'BaseClass::test1 called'.'<br/>';
	}
}
class ChildClass extends BaseClass{
	public function test(){
		// CONST_VALUE = 'this is test';
		echo 'ChildClass::test called'.'<br/>';
		//用parent关键字可以访问父类被子类重写的方法
		parent::test();
		self::called();
	}
	public function called(){
		echo 'ChildClass::called() called'.'<br/>';
	}
}
//子类编写和父类完全一致的方法名称可以完成对父类方法的重写(overwrite)
$obj = new ChildClass();
echo $obj->test();
