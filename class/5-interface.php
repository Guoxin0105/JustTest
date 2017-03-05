<?php
header('content-type:text/html;charset=utf-8');
//interface关键字用于定义接口
interface ICanEat{
	//接口里的方法不需要有方法的实现
	public function eat($food);
}
//implements关键字用于表示类实现某个接口
class Human implements ICanEat{
	//实现了某个接口之后 必须提供接口中定义的方法中的具体实现
	public function eat($food){
		echo 'Human eating '.$food.'<br/>';
	}
}
class Animal implements ICanEat{
	public function eat($food){
		echo 'Animal eating '.$food.'<br/>';
	}
}
$obj = new Human();
$obj->eat('Apple');
$monkey = new Animal();
$monkey->eat('Banana');
//不能实例化接口
// $objeat = new ICanEat();

//可以用instanceof关键字来判断某个对象是否实现了某个接口
var_dump($obj instanceof ICanEat);
function checkEat($obj){
	if($obj instanceof ICanEat){
		$obj->eat('Tea');
	}else{
		echo 'They can not eat';
	}
}
checkEat($obj);
checkEat($monkey);

//可以用extends让接口继承接口
interface ICanPee extends ICanEat{
	public function pee();
}
//当类实现子接口时 父接口定义的方法也需要在这个类中具体实现
class Human1 implements ICanPee{
	public function pee(){}
	public function eat($food){}
}