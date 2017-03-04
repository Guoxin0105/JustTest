<?php
$src = '01.png';
$info = getimagesize($src);
$type = image_type_to_extension($info[2],false);
$fun = "imagecreatefrom{$type}";
$image = $fun($src);

//在内存中建立一个宽300 高200的真色彩图片 
$imageThumb = imagecreatetruecolor(300,200);
//将原图复制到新建的真色彩图片 并按一定比例压缩
imagecopyresampled($imageThumb,$image,0,0,0,0,300,200,$info[0],$info[1]);
//销毁原图
imagedestroy($image);

header('content-type:'.$info['mime']);
$func = "image{$type}";
$func($imageThumb);

$func($imageThumb,'thumb.'.$type);
imagedestroy($imageThumb);