<?php
session_start();
header('content-type:img/jpg');
$table = array(
	'pic0'=>'虎',
	'pic1'=>'鼠',
	'pic2'=>'牛',
	'pic3'=>'兔',
	'pic4'=>'龙',
	'pic5'=>'蛇',
	'pic6'=>'马',
	'pic7'=>'羊',
	'pic8'=>'猴',
	'pic9'=>'鸡',
	'pic10'=>'狗',
	'pic11'=>'猪'
	);
$index = rand(0,11);
$value = $table['pic'.$index];
$_SESSION['authcode'] = $value ;
$filename = dirname(__FILE__).'\\images\\pic'.$index.'.jpg';
$content = file_get_contents($filename);
ob_clean();
echo $content;