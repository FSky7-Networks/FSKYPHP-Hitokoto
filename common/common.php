<?php
	/*
		FSKYPHP-Hitokoto
		
		说明 : 核心代码
		版本 : 0.1-Dev
		
	*/
	
	//加载配置
	include('config.php');
	if (!$config) {
		echo '<h1>:(</h1>';
		echo '配置加载失败，清重新安装或编写<b> ./common/config.php </b>。';
		die();
	}
	
	//自定义函数
	include('function.php');
	
	//后台
	if ($_GET['admin']=="T") {
		echo '<h1>:)</h1>';
		echo '我们希望您能用最暴力的方法直接更改<b> ./common/config.php </b>和<b> ./common/hitokoto.php </b>，因为后台还没写。';
		exit();
	}
	
	//加载首页
	include('../template/index.php');
	