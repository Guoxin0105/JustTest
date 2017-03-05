<?php
/*打开图片*/
//1.配置图片路径
$src = '01.png';
//2.获取图片信息
$info = getimagesize($src);
//通过图像的编号来获取图像的类型
$type = image_type_to_extension($info[2],false);
//4.在内存中创造一个和我们图像类型一样的图像
$fun = "imagecreatefrom{$type}";
//5.把图像复制到我们的内存中
$image = $fun($src);

/*操作图标*/
//1.设置字体路径
$font = 'msyh.ttc'; 
//2.填写水印内容
$content = '你好 GITHUB';
//3.设置字体颜色和透明度
$col = imagecolorallocatealpha($image,255,255,255,50);
//4.写入文字
imagettftext($image,20,0,20,30,$col,$font,$content);

/*输出图片*/
//浏览器输出
header('content-type:'.$info['mime']);
$func = "image{$type}";
$func($image);
//保存图片
$func($image,'newimage.'.$type);
/*销毁图片*/
imagedestroy($image);