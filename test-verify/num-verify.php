<?php
session_start();//必须在顶部
header('content-type:image/png');
$image = imagecreatetruecolor(100,30);
//为图像分配颜色
$bgcolor = imagecolorallocate($image,255,255,255);
//颜色填充区域 (左上角的坐标为0,0)
imagefill($image,0,0,$bgcolor);
/*纯数字验证码
for($i=0;$i<4;$i++){
	$fontsize = 6;
	//字符串随机颜色
	$fontcolor = imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
	$fontcontent = rand(0,9);
	$x = ($i*100/4)+rand(5,10);
	$y = rand(5,10);
	imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
}*/
$captch_code='';
for($i=0;$i<4;$i++){
	$fontsize = 6;
	$fontcolor = imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
	$data = 'abcdefghijkmnpqrstuvwxy0123456789';
	$fontcontent = substr($data,rand(0,strlen($data)-1),1);
	$captch_code.=$fontcontent;
	$x = ($i*100/4)+rand(5,10);
	$y = rand(5,10);
	imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
}
$_SESSION['authcode']=$captch_code;
//200个随机颜色的点
for($i=0;$i<200;$i++){
	$pointcolor = imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
	imagesetpixel($image,rand(1,99),rand(1,29),$pointcolor);
}
//3条随机颜色位置的线
for($i=0;$i<3;$i++){
	$linecolor = imagecolorallocate($image,rand(80,220),rand(80,220),rand(80,220));
	//参数应有x1,y1,x2,y2 两个点确定一条线
	imageline($image,rand(1,99),rand(1,29),rand(1,99),rand(1,29),$linecolor);
}
imagepng($image);
imagedestory($image);
