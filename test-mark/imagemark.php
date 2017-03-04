<?php
/*打开图片*/
//1.配置图片路径
$src = '01.png';
//2.获取图片信息
$info = getimagesize($src);
//3.通过图像的编号来获取图像的类型
$type = image_type_to_extension($info[2],false);
//4.在内存中创造一个和我们图像类型一样的图像
$fun = "imagecreatefrom{$type}";
//5.把图像复制到我们的内存中
$image = $fun($src);

/*操作图标*/
//1.设置水印图片
$imageMark = '02.png';
//2.设置图片水印的基本信息
$info2 = getimagesize($imageMark);
//3.通过水印图片编号来获取图像的类型
$type2 = image_type_to_extension($info[2],false);
//4.在内存中创造一个水印图片类型一样的图像
$fun2 = "imagecreatefrom{$type2}";
//5.把图像复制到我们的内存中
$image2 = $fun2($imageMark);
//6.合并图片
imagecopy($image,$image2,20,30,0,0,$info2[0],$info2[1]);
//7.销毁图片
imagedestroy($image2);

/*输出图片*/
//浏览器输出
header('content-type:'.$info['mime']);
$func = "image{$type}";
$func($image);
//保存图片
$func($image,'imageMark.'.$type);

/*销毁图片*/
imagedestroy($image);