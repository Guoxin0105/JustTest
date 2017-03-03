<?php
     
     if(isset($_REQUEST['authcode']))
     {
          session_start();
          if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) 
          {
               header('Content-type: text/html; charset=UTF8'); 
               echo '<font color="#0000CC">输入正确</font>';
          }
          
          else{
            header('Content-type: text/html; charset=UTF8'); 
               echo '<font color="#CC0000"><b>输入错误</b></font>';
              }
          exit();
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>确认验证码</title>
</head>
<body>
	<form method="post" action="./form.php">
	<p>验证码图片：<img id="captcha" border = "1" src="img-verify.php?r=<?php echo rand();?>"width="200" height="250" />
                                        <a href="javascript:void(0)" onclick="document.getElementById('captcha').src='img-verify.php?r='+Math.random()">换一个</a>
               </p>
	<p>请输入验证码：<input type = "text" name = "authcode" value = "" /></p>
	<p><input type = "submit" value = "提交"  /></p>
	</form>
</body>
</html>