<?php
header('content-type:text/html;charset=utf-8');
require 'upload.class.php';
$upload = new upload();
$dest = $upload->uploadFile();
print_r($dest);