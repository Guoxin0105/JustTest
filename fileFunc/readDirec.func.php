<?php

/**
 * 读取所有目录及文件
 * @param string $path
 * @return string
 */
function readDirec($path){
    if(!is_dir($path)){
        return '目录不存在';
    }
    $handle=opendir($path);
    while(($item=readdir($handle))!==false){
        if($item!='.'&&$item!='..'){
            if(is_file($path.'/'.$item)){
                echo '文件 :'.$item.'<br/>';
            }
            if(is_dir($path.'/'.$item)){
                echo '目录 :'.$item.'<br/>';
                readDirec($path.'/'.$item);
            }
        }
    }
    closedir($handle);
}
// $path='b';
// readDirec($path);

/**
 * 返回目录下的所有的文件及目录
 * @param string $path
 * @return string|unknown|string
 */
function readDirec1($path){
    if(!is_dir($path)){
        return '不是一个目录';
    }
    $handle=opendir($path);
    $arr=array();
    while(($item=readdir($handle))!==false){
        if($item!='.'&&$item!='..'){
            if(is_file($path.'/'.$item)){
                $arr['file'][]=$item;
            }
            if(is_dir($path.'/'.$item)){
                $arr['dir'][]=$item;
                $func=__FUNCTION__;
                $func($path.'/'.$item);
            }
        }
    }
    closedir($handle);
    return $arr;
}
// $path='b';
// $res=readDirec1($path);
// print_r($res);


//检测目录是否为空
function isEmptydir($path){
    if(!is_dir($path)){
        return '目录不存在';
    }
    $handle=opendir($path);
    while(($item=readdir($handle))!==false){
        if($item!='.'&&$item!='..'){
            return false;
        }
    }
    return true;
}
$path='b/d';
var_dump(isEmptydir($path));














