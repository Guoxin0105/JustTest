<?php
header('content-type:text/html;charset=utf-8');
$filename='1.txt';
//touch($filename) 创建文件
/* if(touch($filename)){
    echo '文件创建成功';
}else{
    echo '文件创建失败';
} */

//file_exists($filename) 检测文件或目录是否存在 如果存在返回true 否则返回false
/*if(!file_exists($filename)){
    if(touch($filename)){
        echo '成功';
    }else{
        echo '失败';
    }
}else{
    echo '存在同名文件';
}*/

//unlink($filename) 删除文件
if(file_exists($filename)){
	if(unlink($filename)){
		echo '删除成功';
	}else{
		echo '删除失败';
	}
}else{
	echo '文件不存在';
}
















