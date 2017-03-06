<?php
header('content-type:text/html;charset=utf-8');
require 'upload.func.php';
$fileInfo = $_FILES['myFile'];
$allowExt = array('jpeg','png','jpg','gif','txt','html');
$newName = uploadFile($fileInfo,'uploads',false, $allowExt);
echo $newName;