<?php
$str = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
// echo $str{mt_rand(0,strlen($str)-1)};
$code="";
for($i=0;$i<4;$i++){
	$code.= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$str{mt_rand(0,strlen($str)-1)}.'</span>';
}
// echo $code;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>注册页面</title>
</head>
<body>
	<h1>慕课网注册页面</h1>
	<form method='post' action = 'doAction.php'>
		<table border="1" cellpadding="0" cellspacing="0" width="80%" bgcolor="#ABCDEF">
			<tr>
				<td align="right">用户名</td>
				<td><input type="text" name="username" id="" >用户名以字母开头，并且长度6-10位</td>
			</tr>
			<tr>
				<td align="right">密码</td>
				<td><input type="password" name="password" id="" >密码不能为空，密码长度6-10位</td>
			</tr>
			<tr>
				<td align="right">确认密码</td>
				<td><input type="password" name="password1" id="" >保持两次输入密码一致</td>
			</tr>
			<tr>
				<td align="right">邮箱</td>
				<td><input type="text" name="email" id="" >邮箱中必须包含@符号</td>
			</tr>
			<tr>
				<td align="right">兴趣爱好</td>
				<td>
					<input type="checkbox" name="fav[]" id="" value=php>php
					<input type="checkbox" name="fav[]" id="" value=java>java
					<input type="checkbox" name="fav[]" id="" value=ios>ios
					<input type="checkbox" name="fav[]" id="" value=andriod>andriod<br/>
					<input type="checkbox" name="fav[]" id="" value=c>c
					<input type="checkbox" name="fav[]" id="" value=c++>c++
					<input type="checkbox" name="fav[]" id="" value=python>python
					<input type="checkbox" name="fav[]" id="" value=nodejs>nodejs
				</td>
			</tr>
			<tr>
				<td align="right">验证码</td>
				<td><input type="text" name="verify" id=""><?php echo $code ?>
					<input type="hidden" name="verify1" value='<?php echo $code ?>'>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="立即注册"></td>
			</tr>
		</table>
	</form>
</body>
</html>