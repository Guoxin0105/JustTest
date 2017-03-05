<?php
class MagicTest{
	//__tostring会在把对象转换为string的时候自动调用
	public function __toString(){
		return 'this is magic';
	}
	//__invoke会在把对象当做一个方法调用的时候自动调用
	public function __invoke($x){
		echo 'this is __invoke '.$x.'<br/>';
	}
	//方法的重载 这个方法的第一个参数是调用的方法的名称 第二个是调用方法参数组成的数组
	public function __call($name,$arguments){
		echo $name.'&nbsp'.implode(',',$arguments).'<br/>';
	}
	//静态方法的重载 注意这个方法需要设定为static
	public static function __callStatic($name,$arguments){
		echo $name.'&nbsp'.implode(',',$arguments).'<br/>';
	}
	public function __get($name){
		return 'getting '.$name.'<br/>';
	}
	public function __set($name,$value){
		echo 'setting '.$name.' value is '.$value.'<br/>';
	}
}
$obj = new MagicTest();
echo $obj.'<br/>';
$obj('test');
$obj->runTest('para1','para2');
MagicTest::runTest('para1','para2');
echo $obj->className;
$obj->className='MagicClass';