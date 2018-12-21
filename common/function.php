<?php
	/*
		FSKYPHP-Hitokoto
		
		说明 : 自定义函数
		版本 : 0.1-Dev
		
	*/
	
	function echohitokoto($charset='', $encode='') {
		$path = dirname(__FILE__);
		$file = file($path."/hitokoto.php");
		$arr  = mt_rand( 1, count( $file ) - 1 );
		$content  = trim($file[$arr]);
		if (isset($charset) && !empty($charset)) {
			if (strcasecmp($charset,"gbk") == 0 ) {
				$content = mb_convert_encoding($content,'gbk', 'utf-8');
			}
		} else {
			$charset = 'utf-8';
		}
		header("Content-Type: text/html; charset=$charset");
		if ($encode == 'js') {
			$echo = "function hitokoto(){document.write('".$content."');}";
			echo $echo;
		} elseif ($encode == 'json') {
			$echo = array('hitokoto' => $content);
			echo json_encode($echo);
		} else {
			echo $content;
		}
	}

	