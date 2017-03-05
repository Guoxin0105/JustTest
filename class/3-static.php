<?php
header('content-type:text/html;charset=utf-8');
/**
 * 1 静态属性用于保存类的公有数据
 * 2 静态方法里只能访问静态属性
 * 3 静态成员不需要实例化就可以访问
 * 4 类的内部可以通过self或static关键字访问自身静态成员
 * 5 可以通过parent访问父类的静态成员
 * 6 可以通过类的名称在类的外部访问静态成员
 */
 
class Human{
	public $name;
	protected $height;
	protected $isHungry=true;
	public static $sValue = 'this is test';
}
class NbaPlayer extends Human {
	public $team;
	public $playerNumber;
	private $age='32';
	//静态属性定义是在访问控制关键字后添加static或static关键字即可
	public static $president = 'David stern';
	function __construct($name,$height,$team,$playerNumber){
		$this->name=$name;
		$this->height=$height;
		$this->team=$team;
		$this->playerNumber=$playerNumber;
	}
	//静态方法定义是在访问控制关键字后添加static或者static关键字即可
	public static function ChangePresident($newPdt){
		//在类定义中使用静态成员的时候 用self关键字后面跟着::操作符 即可
		//注意在访问静态成员属性的时候::后要跟$符
		self::$president = $newPdt;
		//使用parent关键字可访问父类的静态成员
		echo parent::$sValue.'<br/>';
	}
}
$jordan = new NbaPlayer('Jordan','198','bulls','23');
$james = new NbaPlayer('James','203','heat','6');
// $jordan->ChangePresident('Adam Sliver');
// echo $jordan->president.'<br/>';
// echo $james->president.'<br/>';

//在类定义外部访问静态属性 可以通过类名加::操作符来访问类的静态成员
//不受实例化影响
echo Nbaplayer::$president . ' Before'.'<br/>';
NbaPlayer::ChangePresident('Adam sliver');
echo Nbaplayer::$president;
