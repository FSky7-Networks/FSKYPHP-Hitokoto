<?php
	/*
		FSKYPHP-Hitokoto
		
		说明 : 入口文件
		版本 : 0.1-Dev
		
	*/
	
	//Installed or not
	if(!file_exists('./common/config.php')){
		exit('<script type="text/javascript">window.location.href="./install/";</script>');
	}
	
	//Include
	include('./common/common.php');
	