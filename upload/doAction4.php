<?php
header('content-type:text/html;charset=utf-8');
// print_r($_FILES);
require 'upload.func.php';
foreach ($_FILES as $fileInfo){
    $files[] = uploadFile($fileInfo);
}
print_r($files);
