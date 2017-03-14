<?php
$path='test';
// is_dir($path) 检测是否为目录
var_dump(is_dir($path));
echo '<hr/>';
//getcwd() 得到当前绝对路径
echo getcwd();
echo '<hr/>';
echo '磁盘剩空间:'.disk_free_space(getcwd()).'<br/>';
echo '磁盘总大小:'.disk_total_space(getcwd()).'<br/>';
echo 'C盘剩余空间:'.diskfreespace('C:').'<br/>';
echo 'C盘总大小:'.disk_total_space('C:').'<br/>';

//转换字节单位
function transByte($size,$digits=2){
    $unit=array('B','KB','MB','GB','TB');
    $i=0;
    while($size>1024){
        $size/=1024;
        $i++;
    }
    return round($size,$digits).$unit[$i];
}

echo transByte(diskfreespace('C:'));

$path='b/c';
// mkdir($path);

// mkdir($path,$mode,true) 创建多级目录
// mkdir($path,755,true);

// rmdir($path) 删除空目录
rmdir('a');





