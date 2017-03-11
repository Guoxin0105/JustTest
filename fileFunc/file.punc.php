<?php
header('content-type:text/html;charset=utf-8');
$filename='1.txt';
$pattern="/[*\/?|<>]/";
/* if(!preg_match($pattern, $filename)){
    if(!file_exists($filename)){
        if(touch($filename)){
            echo '创建成功';
        }else{
            echo '创建失败';
        }
    }else{
        echo '存在同名文件';
    }
}else{
    echo '存在非法字符';
} */

/**
 * 检测文件名的合法性
 * @param string $filename
 * @return boolean
 */
function checkFileName($filename){
    $pattern="/[*\/?|<>]/";
    if(preg_match($pattern,$filename)){
        return false;
    }else{
        return true;
    }
}

/**
 * 创建文件
 * @param string $filename
 * @return string
 */
function createFile($filename){
    //判断文件名的合法性
    if(checkFileName($filename)){
        //判断文件是否存在
        if(!file_exists($filename)){
            if(touch($filename)){
                return '创建成功';
            }else{
                return '创建失败';
            }
        }else{
            return '存在同名文件';
        }
    }else{
       return '文件名中包含非法字符';
    }
}

/**
 * 创建文件 逆向
 * @param string $filename
 * @return string
 */
function createFileName1($filename){
    //判断文件名合法性
    if(!checkFileName($filename)){
        return '文件名不合法';
    }
    if(file_exists($filename)){
        return '存在同名文件';
    }
    if(!touch($filename)){
        return '创建失败';
    }
    return '创建成功';
}

/**
 * 删除文件
 * @param string $filename
 * @return string
 */
function delFile($filename){
    if(!file_exists($filename)){
        return '文件不存在';
    }
    if(!unlink($filename)){
        return '删除失败';
    }
    return '删除成功';
}

/**
 * 重命名文件
 * @param string $oldname
 * @param string $newname
 * @return string
 */
function renameFile($oldname,$newname){
    if(!checkFileName($oldname)){
       return '文件包含非法字符'; 
    }
    $dir=dirname($oldname);
    if(file_exists($dir.'/'.$newname)){
        return '存在同名文件';
    }
    if(!rename($oldname,$newname)){
        return '重命名失败';
    }
}

/**
 * 剪切文件
 * @param string $filename 源文件
 * @param string $dest 目标目录
 * @return string
 */
function cutFile($filename,$dest){
    if(!checkFileName($filename)){
        return '文件名不合法';
    }
    if(!file_exists($filename)){
        return '源文件不存在';
    }
    //检测目录是否存在 如不存在则创建
    if(!file_exists($dest)){
        mkdir($dest,755,true);
    }
    //检测目标路径是否存在同名文件 如不存在则剪切
    if(file_exists($dest.'/'.basename($filename))){
        return '目标文件夹存在同名文件';
    }
    if(!rename($filename,$dest.'/'.basename($filename))){
        return '剪切失败';
    }
    return '剪切成功';
}

/**
 * 复制文件
 * @param string $filename 源文件
 * @param string $dest 目标路径
 * @return string
 */
function copyFile($filename,$dest){
    if(!file_exists($filename)){
        return '源文件不存在';
    }
    if(!file_exists($dest)){
        mkdir($dest,755,true);
    }
    if(file_exists($dest.'/'.basename($filename))){
        return '目标目录存在同名文件';
    }
    if(!copy($filename,$dest.'/'.basename($filename))){
        return '复制失败';
    }
    return '复制成功';
}













