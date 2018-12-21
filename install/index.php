<?php
	/*
		FSKYPHP-Hitokoto
		
		说明 : 安装程序
		版本 : 0.1-Dev
		
	*/

	session_start();
	
	//Function
	function checkfunc($f,$m = false) {
		if (function_exists($f)) {
			return '<font color="green">可用</font>';
		} else {
			if ($m == false) {
				return '<font color="black">不支持</font>';
			} else {
				return '<font color="red">不支持</font>';
			}
		}
	}
	function checkclass($f,$m = false) {
		if (class_exists($f)) {
			return '<font color="green">可用</font>';
		} else {
			if ($m == false) {
				return '<font color="black">不支持</font>';
			} else {
				return '<font color="red">不支持</font>';
			}
		}
	}
	function hostdomain() {
		if ($_SERVER['SERVER_PORT'] == 443) {
			return "https://".$_SERVER['HTTP_HOST']."/";
		}else{
			return "http://".$_SERVER['HTTP_HOST']."/";
		}
	}

	//Information
	$install_app = 'FSKYPHP-Hitokoto';
	$install_checkfile = '../common/config.php';
	$install_cinfigfile = '../common/config.php';
	$install_project = 'https://studio.fsky7.com/project/FSKYPHP-Hitokoto';
	
	//Check step
	$do=isset($_GET['do'])?$_GET['do']:'0';
	if ($do != 4) {
		if (file_exists($install_checkfile)) {
			//Installed
			$installed=true;
			$do='0';
		}
	}
	
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>安装向导 | <?=$install_app?></title>
		<link rel="stylesheet" href="https://github.cdn.fsky7.com/GoogleMDL/icon.css">
		<link rel="stylesheet" href="https://github.cdn.fsky7.com/GoogleMDL/material.blue-light_blue.min.css">
		<script src="https://github.cdn.fsky7.com/GoogleMDL/material.min.js"></script>
		<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAKo2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIiB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjMxNmE4YWE2LWFjZmMtZjA0ZC05MjY1LWY4NzBiMjNjMGQ0MiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2N2U0OTEwMS01MDdiLTIzNGYtOWU4Ni03ZDE4N2Y0OTk4YjIiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0iMTVFOTc0RDIyMENDNjYwQkUyMUU0OTg5ODUzMjlDNTciIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiIHhtcDpDcmVhdGVEYXRlPSIyMDE4LTEwLTI2VDE5OjI5OjE0KzA4OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxOC0xMC0yOFQxMDowMDo1MyswODowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxOC0xMC0yOFQxMDowMDo1MyswODowMCIgdGlmZjpJbWFnZVdpZHRoPSIxMjgiIHRpZmY6SW1hZ2VMZW5ndGg9IjEyOCIgdGlmZjpQaG90b21ldHJpY0ludGVycHJldGF0aW9uPSIyIiB0aWZmOlNhbXBsZXNQZXJQaXhlbD0iMyIgdGlmZjpYUmVzb2x1dGlvbj0iMS8xIiB0aWZmOllSZXNvbHV0aW9uPSIxLzEiIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiIGV4aWY6RXhpZlZlcnNpb249IjAyMjEiIGV4aWY6Q29sb3JTcGFjZT0iNjU1MzUiIGV4aWY6UGl4ZWxYRGltZW5zaW9uPSIxMjgiIGV4aWY6UGl4ZWxZRGltZW5zaW9uPSIxMjgiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MWU5OWQzYS1mZTU4LTY0NDQtYTE2MS05ZTI2ODIzYWU4ZmQiIHN0RXZ0OndoZW49IjIwMTgtMTAtMjZUMTk6Mzk6MTErMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNvbnZlcnRlZCIgc3RFdnQ6cGFyYW1ldGVycz0iZnJvbSBpbWFnZS9qcGVnIHRvIGltYWdlL3BuZyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iZGVyaXZlZCIgc3RFdnQ6cGFyYW1ldGVycz0iY29udmVydGVkIGZyb20gaW1hZ2UvanBlZyB0byBpbWFnZS9wbmciLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjAxMWMzYTgzLTIwZjQtMzE0Mi04MTZjLTAyYjJjZGZkNTY5MiIgc3RFdnQ6d2hlbj0iMjAxOC0xMC0yNlQxOTozOToxMSswODowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NjdlNDkxMDEtNTA3Yi0yMzRmLTllODYtN2QxODdmNDk5OGIyIiBzdEV2dDp3aGVuPSIyMDE4LTEwLTI4VDEwOjAwOjUzKzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MWU5OWQzYS1mZTU4LTY0NDQtYTE2MS05ZTI2ODIzYWU4ZmQiIHN0UmVmOmRvY3VtZW50SUQ9IjE1RTk3NEQyMjBDQzY2MEJFMjFFNDk4OTg1MzI5QzU3IiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9IjE1RTk3NEQyMjBDQzY2MEJFMjFFNDk4OTg1MzI5QzU3Ii8+IDxwaG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+IDxyZGY6QmFnPiA8cmRmOmxpPjE1RTk3NEQyMjBDQzY2MEJFMjFFNDk4OTg1MzI5QzU3PC9yZGY6bGk+IDwvcmRmOkJhZz4gPC9waG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+IDx0aWZmOkJpdHNQZXJTYW1wbGU+IDxyZGY6U2VxPiA8cmRmOmxpPjg8L3JkZjpsaT4gPHJkZjpsaT44PC9yZGY6bGk+IDxyZGY6bGk+ODwvcmRmOmxpPiA8L3JkZjpTZXE+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" />
		<style>
			#view-source {
				position: fixed;
				display: block;
				right: 0;
				bottom: 0;
				margin-right: 40px;
				margin-bottom: 40px;
				z-index: 900;
			}
			.demo-card-wide.mdl-card {
				width: 100%;
				max-width:725px;
				opacity:0.95;
				min-height:10px;!important
			}
			.demo-card-wide > .mdl-card__title {
				color: #fff;
				height: 176px;
				background: #afafaf;
			}
			.demo-card-wide > .mdl-card__menu {
				color: #fff;
			}
			.mdl-radio {
				margin:8px;
			}
		</style>
	</head>
	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row" style="padding-left: 32px;">
					<span class="mdl-layout-title">安装向导</span>
					<div class="mdl-layout-spacer"></div>
					<a class="mdl-navigation__link"><?=$install_app?></a>
					<a href="<?=$install_project?>" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" target="_blank">
						<i class="material-icons">info_outline</i>
					</a>
				</div>
			</header>
			<main class="mdl-layout__content" style="padding: 16px;">
				<div class="page-content" align="center">
					<div class="demo-card-wide mdl-card mdl-shadow--2dp" align="left">
					<?php
						if($do=='0'){
						//Step 0 - 开始向导
					?>
						<div class="mdl-card__supporting-text" align="center">
							<h3 style="margin: 4px;">安装向导</h3>
						</div>
						<div class="mdl-progress mdl-js-progress is-upgraded" style="width:100%;">
							<div class="progressbar bar bar1" style="width: 0%;"></div>
							<div class="bufferbar bar bar2" style="width: 100%;"></div>
							<div class="auxbar bar bar3" style="width: 0%;"></div>
						</div>
						<div class="mdl-card__supporting-text">
							<?php echo nl2br(file_get_contents("../readme.md")); ?>
						</div>
						<div class="mdl-card__actions mdl-card--border" align="center">
							<?php if($installed){ ?>
								<a class="mdl-button">
									您已经安装过，如需重新安装请删除<font color="red"><b> <?=$install_checkfile?> </b></font>文件后再安装！
								</a>
							<?php }else{?>
								<a class="mdl-button mdl-button--colored" href="?do=1">
									开始安装
								</a>
							<?php }?>
						</div>
					<?php
						} elseif ($do=='1') {
						//Step 1 - 环境检查
					?>
						<div class="mdl-card__supporting-text" align="center">
							<h3 style="margin: 4px;">环境检查</h3>
						</div>
						<div class="mdl-progress mdl-js-progress is-upgraded" style="width:100%;">
							<div class="progressbar bar bar1" style="width: 25%;"></div>
							<div class="bufferbar bar bar2" style="width: 100%;"></div>
							<div class="auxbar bar bar3" style="width: 0%;"></div>
						</div>
						<table class="mdl-data-table mdl-js-data-table" style="width:100%">
							<thead>
								<tr>
									<th>函数检测</th>
									<th>需求</th>
									<th>当前</th>
									<th>用途</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>PHP >= 5.4</td>
									<td>必须</td>
									<td><?php echo phpversion(); ?></td>
									<td>PHP 版本</td>
								</tr>
								<tr>
									<td>json_encode()</td>
									<td>必须</td>
									<td><?php echo checkfunc('json_encode',true); ?></td>
									<td>转义</td>
								</tr>
								<tr>
									<td>file_put_contents()</td>
									<td>必须</td>
									<td><?php echo checkfunc('file_put_contents',true); ?></td>
									<td>文件系统</td>
								</tr>
								<tr>
									<td>file_get_contents()</td>
									<td>可选</td>
									<td><?php echo checkfunc('file_get_contents',true); ?></td>
									<td>文件系统</td>
								</tr>
							</tbody>
						</table>
						<div class="mdl-card__actions mdl-card--border" align="center">
							<a class="mdl-button mdl-button--colored" href="./?do=0">
								<<上一步
							</a>
							<a class="mdl-button mdl-button--colored" href="./?do=2">
								下一步>>
							</a>
						</div>
					<?php
						}elseif($do=='2'){
						//Step 2 - 基础设置
					?>
						<div class="mdl-card__supporting-text" align="center">
							<h3 style="margin: 4px;">基础设置</h3>
						</div>
						<div class="mdl-progress mdl-js-progress is-upgraded" style="width:100%;">
							<div class="progressbar bar bar1" style="width: 50%;"></div>
							<div class="bufferbar bar bar2" style="width: 100%;"></div>
							<div class="auxbar bar bar3" style="width: 0%;"></div>
						</div>
						<div class="mdl-card__supporting-text" align="center">			
							<form action="./?do=3" class="form-sign" method="post">
								<div style="max-width:300px;margin:16px;">
									<div>
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded is-dirty" data-upgraded=",MaterialTextfield">
											<input class="mdl-textfield__input" type="text" name="domain" value="<?php echo hostdomain(); ?>" required>
											<label class="mdl-textfield__label" for="fromname">网站地址</label>
										</div>
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded is-dirty" data-upgraded=",MaterialTextfield">
											<input class="mdl-textfield__input" type="text" name="website" value="My Hitokoto" required>
											<label class="mdl-textfield__label" for="fromname">网站名称</label>
										</div>
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded is-dirty" data-upgraded=",MaterialTextfield">
											<input class="mdl-textfield__input" type="text" name="username" value="admin" required>
											<label class="mdl-textfield__label" for="fromname">用户名</label>
										</div>
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded is-dirty" data-upgraded=",MaterialTextfield">
											<input class="mdl-textfield__input" type="password" name="password" required>
											<label class="mdl-textfield__label" for="fromname">密码</label>
										</div>
									</div>
									<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="width:100%;margin-top:16px;margin-bottom:0px;" name="submit" value="保存配置">
								</div>
							</form>
						</div>
					<?php 
						}elseif($do=='3'){
						//Step 3 - 保存设置
					?>
						<div class="mdl-card__supporting-text" align="center">
							<h3 style="margin: 4px;">保存设置</h3>
						</div>
						<div class="mdl-progress mdl-js-progress is-upgraded" style="width:100%;">
							<div class="progressbar bar bar1" style="width: 75%;"></div>
							<div class="bufferbar bar bar2" style="width: 100%;"></div>
							<div class="auxbar bar bar3" style="width: 0%;"></div>
						</div>
					<?php
							//Save File
$config="
<?php
	/*
		FSKYPHP-Hitokoto
		
		Setting
	*/
	
	\$config=array(
		'domain'=>'".$_POST['domain']."',
		'website'=>'".$_POST['website']."',
		'username'=>'".$_POST['username']."',
		'password'=>'".md5($_POST['password'])."'
	);
	
?>
";

							if(file_put_contents($install_cinfigfile,$config)){
								echo '<div class="mdl-card__supporting-text">配置文件保存成功！</div>';
								echo '<div class="mdl-card__actions mdl-card--border" align="center"><a class="mdl-button mdl-button--colored" href="./?do=4">完成安装</a></div>';
							}else echo '
								<div class="mdl-card__supporting-text">保存失败，请确保网站根目录有写入权限！</div>
								<div class="mdl-card__actions mdl-card--border" align="center">
									<a class="mdl-button mdl-button--colored" href="javascript:history.back(-1)">
										<<上一步
									</a>
								</div>
							';
						}elseif($do=='4'){
						//Step 4 - 安装完成
					?>
						<div class="mdl-card__supporting-text" align="center">
							<h3 style="margin: 4px;">安装完成</h3>
						</div>
						<div class="mdl-progress mdl-js-progress is-upgraded" style="width:100%;">
							<div class="progressbar bar bar1" style="width: 100%;"></div>
							<div class="bufferbar bar bar2" style="width: 100%;"></div>
							<div class="auxbar bar bar3" style="width: 0%;"></div>
						</div>
					<?php
							echo '
								<div class="mdl-card__supporting-text">
									安装完成！<br>
									更多设置选项请登录后台管理进行修改。<br>
									<br>
									可以删除<b> install </b>文件夹。
								</div>
								<div class="mdl-card__actions mdl-card--border" align="center">
									<a class="mdl-button mdl-button--colored"href="../">网站首页</a>
									<a class="mdl-button mdl-button--colored"href="../admin/">后台管理</a>
								</div>
							';
						} else {
						//Step tan90
					?>
						<div class="mdl-card__supporting-text" align="center">
							<h3 style="margin: 4px;">步骤错误</h3>
						</div>
						<div class="mdl-progress mdl-js-progress is-upgraded" style="width:100%;">
							<div class="progressbar bar bar1" style="width: 0%;"></div>
							<div class="bufferbar bar bar2" style="width: 100%;"></div>
							<div class="auxbar bar bar3" style="width: 0%;"></div>
						</div>
						<div class="mdl-card__supporting-text">
							不存在的步骤
						</div>
						<div class="mdl-card__actions mdl-card--border" align="center">
							<a class="mdl-button mdl-button--colored" href="./">返回</a>
						</div>
					<?php
						}
					?>
					</div>
				</div>
			</main>
		</div>
	</body>
</html>
