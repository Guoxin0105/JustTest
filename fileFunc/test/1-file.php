<?php
date_default_timezone_set('Asia/Shanghai');
$filename = 'test.php';
echo "<h1>文件信息如下：</h1>";
//filesize($filename) 得到文件的大小 返回字节
echo '文件大小为：'.filesize($filename).'<br/>';
//filectime($filename) 得到文件的创建时间 返回时间戳
echo '文件创建时间为：'.date('Y-m-d H:i:s',filectime($filename)).'<br/>';
//filemtime($filename)得到文件的修改时间 返回时间戳
echo '文件修改时间为：' .date('Y-m-d H:i:s',filemtime($filename)).'<br/>';
//fileatime($filename)得到文件最后访问时间 返回时间戳
echo '文件最后访问时间为：'.date('Y-m-d H:i:s',fileatime($filename)).'<br/>';
//filetype($filename)得到文件类型
echo '文件类型为：'.filetype($filename).'<br/>';
//is_readable($filename) 判断文件是否可读
echo is_readable($filename)?'可读':'不可读';
echo '<br/>';
//is_writeable($filename) 判断文件是否可写
echo is_writeable($filename)?'可写':'不可写';
echo '<br/>';
//is_executable($filename) 判断文件是否可执行
echo is_executable($filename)?'可执行':'不可执行';
echo '<br/>';
echo '文件所属组为：'.filegroup($filename).'<br/>';
echo '文件inode为'.fileinode($filename).'<br/>';
echo '文件的权限为：'.fileperms($filename).'<br/>';
//is_file($filename) 检测是否为文件 如果是文件&&存在 返回true 否则返回false
var_dump(is_file($filename));
echo '<br/>';

















