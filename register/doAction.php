<?php
header('centent-type:text/html;charset=utf-8');
//接受数据
$username = $_POST['username'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
$email = $_POST['email'];
$fav = $_POST['fav'];
/*
将数组转换为字符串
join(分隔符，要转换的数组)==implode() 
*/
$favstr = join(',',$fav);
/*
trim(str,charlist)忽略两端空格 
strip_tags(str,allowable_tags)忽略标签
*/
$verify = trim(strtolower(strip_tags($_POST['verify'])));
$verify1 = trim(strtolower(strip_tags($_POST['verify1'])));
//echo $verify,'----',$verify1;
$redirectUrl = '<a href="reg.php">重新注册</a>';
//echo $username;
//检测用户名开头是不是字母
$char = $username{0};
//echo $char;
$ascii = ord($char);//得到制定字符的ASCII值
//检测ASCII值是否在在65-90(A-Z) 97-122(a-z)
if(!(($ascii>=65&&$ascii<=90)||($ascii>=97&&$ascii<=122))){
	exit('用户名不是以字母开头<br/>.$redirectUrl');
}
//检测用户名长度是否为6-10位
$userlen = strlen($username);
if($userlen<6 || $userlen>10){
	exit('用户名长度不符合规范<br/>.$redirectUrl');
}
//检测密码是否为空且长度6-10位
$pwdlen = strlen($password);
if($pwdlen==0){
	exit('密码不能为空'.$redirectUrl);
}
if($pwdlen<6||$pwdlen>10){
	exit('密码长度不符合规范'.$redirectUrl);
}
//检测两次密码是否一致
/*if($password!==$password1){
	exit('两次密码输入不一致');
}*/
if(strcmp($password,$password1)!==0){
	exit('两次密码输入不一致');
}
//检测邮箱是否规范
if(strpos($email,'@')==false){
	exit('非法邮箱');
}
//检测验证码正确
if($verify!==$verify1){
	exit('验证码错误');
}
//md5加密
$password = md5($password);
echo '恭喜您注册成功'.'<br/>';
$userInfo=<<<EOF
<table border='1' cellpadding='0 cellspacing='0' width='80%' >
	<tr>
		<td>用户名</td>
		<td>密码</td>
		<td>邮箱</td>
		<td>兴趣爱好</td>
	</tr>
	<tr>
		<td>{$username}</td>
		<td>{$password}</td>
		<td>{$email}</td>
		<td>{$favstr}</td>
	</tr>
</table>
EOF;
echo $userInfo;