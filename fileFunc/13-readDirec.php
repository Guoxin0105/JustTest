<?php
$path='b';
//打开指定目录
$handle=opendir($path);
// $item=readdir($handle);
//读取目录中的内容
while (($item=readdir($handle))!==false){
    if($item!='.'&&$item!='..'){
    echo $item.'<br/>';
    echo filetype($path.'/'.$item);
    echo '<hr/>';
    }
}
//关闭目录句柄
closedir($handle);