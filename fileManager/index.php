<?php 
require_once 'function/dir.func.php';
require_once 'function/file.func.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width,inital-scale=1,user-scalable=no" />
	<title>Web在线文件管理器</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/cikonss.css" />
	<link rel="stylesheet" href="css/guoxin.css" />
	<style type="text/css">
        @media screen and (max-width:600px){
        	.hideContent{
                display:none;    
                }
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">Web在线文件管理器</a>
		</div>
<!-- 		导航	 -->
		<div class="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">主目录<span class="icon icon-small"><span class="icon-home"></span></span></a></li>
				<li><a href="index.php">新建文件夹<span class="icon icon-small"><span class="icon-folder"></span></span></a></li>
				<li><a href="index.php">新建文件<span class="icon icon-small"><span class="icon-file"></span></span></a></li>
				<li><a href="index.php">上传文件<span class="icon icon-small"><span class="icon-upload"></span></span></a></li>
				<li><a href="index.php">系统信息<span class="icon icon-small"><span class="icon-stats"></span></span></a></li>
				<li><a href="index.php">联系Guoxin<span class="icon icon-small"><span class="icon-mail"></span></span></a></li>
			</ul>
		</div>
	</div>
	</nav>
<!-- 	   下载 -->
	<section id="download">
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<h1>Web在线文件管理器<code>1.0</code></h1>
					<p>前端基于Bootstrap框架，并且使用Cikonss图标样式</p>
					<p>简单在web在线管理器</p>
					<p><a href="#" class="btn btn-primary btn-lg">欢迎大家下载</a></p>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>

	
	</section>
	
<!-- 	主体区域 -->
	<section id="content">
		<div class="cotainer">
			<div class="row">
				<div class="col-md-10">文件路径：根目录</div>
				<div class="col-md-2">返回上级</div>
			</div>
		</div>
	</section>
	
<!-- 	列表区域 -->
	<section id="list">
		<div class="conrainer">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-resposive table-hover table-bordered">
						<tr>
							<th>类型</th>
							<th>名称</th>
							<th>大小</th>
							<th class="hideContent">读</th>
							<th class="hideContent">写</th>
							<th class="hideContent">执行</th>
							<th class="hideContent">创建时间</th>
							<th class="hideContent">修改时间</th>
							<th class="hideContent">访问时间</th>
							<th>操作</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
	
	
	</section>
	
<!-- 	尾部 -->
	<footer>
		<p>Copyright © 2017 imooc.com All Rights Reserved</p>
		<p>京ICP备 13046642号-2</p>
	
	</footer>
	
	
	<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>