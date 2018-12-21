<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?=$config['website']?></title>
		<style>
			*{
				padding: 0px;
				margin: 0px;
			}
			html,body {
				height: 100%;
				background-image: -moz-radial-gradient(-20% 140%, ellipse , rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%), -moz-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -moz-radial-gradient(60% 40%,ellipse, #d9e3e5 10%,rgba(44,70,76,.0) 60%), -moz-linear-gradient(-45deg, rgba(18,101,101,.8) -10%,#d9e3e5 80% ) ; 
				background-image: -o-radial-gradient(-20% 140%, ellipse , rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%), -o-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-radial-gradient(60% 40%,ellipse, #d9e3e5 10%,rgba(44,70,76,.0) 60%), -o-linear-gradient(-45deg, rgba(18,101,101,.8) -10%,#d9e3e5 80% ) ; 
				background-image: -ms-radial-gradient(-20% 140%, ellipse , rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%), -ms-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-radial-gradient(60% 40%,ellipse, #d9e3e5 10%,rgba(44,70,76,.0) 60%), -ms-linear-gradient(-45deg, rgba(18,101,101,.8) -10%,#d9e3e5 80% ) ; 
				background-image: -webkit-radial-gradient(-20% 140%, ellipse , rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%), -webkit-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-radial-gradient(60% 40%,ellipse, #d9e3e5 10%,rgba(44,70,76,.0) 60%), -webkit-linear-gradient(-45deg, rgba(18,101,101,.8) -10%,#d9e3e5 80% ) ;  
			}
			body,h1,h2,h3,h4,h5,h6 {
				font-family: Roboto, 'Helvetica Neue', Helvetica, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', '微软雅黑', Arial, sans-serif; 
			}
			.site-wrapper {
				display: table;
				width: 100%;
				height: 100%; 
				min-height: 100%;
			}
			.site-wrapper-inner {
				display: table-cell;
				vertical-align: top;
				vertical-align: middle;
			}
			.fs-big{
				margin: 8px;
				background: #fff;
				max-width: 640px;
				border-radius: 3px;
			}
			.fs-kig-1 {
				background: linear-gradient(135deg, #07f, #6cf);
				font-size: 24px;
    			line-height: 26px;
				padding: 24px;
				color: #fff;
				border-top-left-radius: 3px;
				border-top-right-radius: 3px;
			}
			.fs-kig-2 {
				padding: 24px;
			}
			.fs-kig-3 {
				border-top: 1px solid rgba(0,0,0,.1);
			}
		</style>
	</head>
	<body>
		<div class="site-wrapper">
			<div class="site-wrapper-inner" align="center">
				<div class="fs-big">
					<div class="fs-kig-1" align="left">
						<?=$config['website']?>
					</div>
					<div class="fs-kig-2" align="left">
						<b><?php echohitokoto(); ?></b>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>