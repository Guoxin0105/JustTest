<?php
header('content-type:text/html;charset=utf-8');
$filename='test.php';
//rename($filename,$newname) 重命名文件
/*if(rename($filename,'1.php')){
	echo '重命名成功';
}else{
	echo '重命名失败';
}*/

//如果目标存在会产生覆盖
/*$filename='1.php';
if(rename($filename,'111.txt')){
	echo '成功';
}else{
	echo '失败';
}
*/
/* $filename='111.txt';
$newname='222.txt';
if(!file_exists($newname)){
	if(rename($filename,$newname)){
		echo '重命名成功';
	}else{
		echo '重命名失败';
	}
}else{
	echo '存在重名文件 请重新命名';
} */

//剪切文件也使用rename($filename,$newname)

//copy($filename,$dest) 拷贝文件
$filename='1-file.php';
$dest='test/1-file.php';
if(!file_exists($dest)){
    if(copy($filename,$dest)){
        echo '拷贝成功';
    }else{
        echo '拷贝失败';
    }
}else{
    echo '存在同名文件';
}
























