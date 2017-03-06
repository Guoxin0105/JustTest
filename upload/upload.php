<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>uplaod</title>
</head>
<body>
	<form action="doAction3.php" method="post" enctype="multipart/form-data" >
<!-- 	<input type="hidden" name="MAX_FILE_SIZE" value="" /> -->
	请选择你要上传的文件
	<input type="file" name="myFile" id="" /><br/>
<!-- 	<input type="file" name="myFile" id="" accept="image/jpeg,image/png,image/gif" /> -->
	<input type="submit" value = "上传文件" />
	</form>
</body>
</html>