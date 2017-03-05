<?php
require 'imageClass.php';
$src = '01.png';
$source = '02.png';

$local = array(
	'x'=>20,
	'y'=>50,
	);
$angle = 10;
$content = 'hello';
$fontUrl='msyh.ttc';
$size = 20;
$color = array(
	0=>255,
	1=>0,
	2=>0,
	3=>20
	);
$local2 = array(
	'x'=>40,
	'y'=>50
	);
$angle = 30;
$image = new Image($src);
$image->imageMark($source,$local);
$image->thumb(960,480);
$image->fontMark($content,$fontUrl,$size,$color,$local2,$angle);
$image->show();