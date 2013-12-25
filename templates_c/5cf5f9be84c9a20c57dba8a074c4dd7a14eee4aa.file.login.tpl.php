<?php /* Smarty version Smarty-3.0-RC2, created on 2013-12-24 18:31:17
         compiled from "/web/www/bankWebsite/templates/public/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192522985252b96275981134-03862233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cf5f9be84c9a20c57dba8a074c4dd7a14eee4aa' => 
    array (
      0 => '/web/www/bankWebsite/templates/public/login.tpl',
      1 => 1387881075,
    ),
  ),
  'nocache_hash' => '192522985252b96275981134-03862233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			无标题文档
		</title>
		<style type="text/css">
.titleStyle{
		/*  border: solid 1px red;*/
		text-align: center;
		height: 190px;
		line-height: 170px;
		}

		.rowLogoStyle{
		/*border: solid 1px red;*/
		text-align: center;

		}
		.rowListStyle{
		/*border: solid 1px red;*/
		height: 200px;
		}
		.roundedBorder{
		/*border: 2px solid #000;*/
		border-radius: 25px;
		width: 120px;
		height: 25px;
		/*background-color: black;*/
		color: #fff;
		text-align: center;
		line-height: 25px;
		-moz-border-radius: 25px;
		font-size: 14px;

		margin-top: 9px;
		margin-left: 22px;

		}
		.systemCache{
		/*border: solid 1px red;*/
		width: 12%;
		height: 200px;
		float: left;
		text-align: center;
		margin-left: 10px;
		}

		.imgWarp{
		/*  border: solid 1px red;*/
		height: 150px;
		}
		.imgStyle{
		width: 90px;
		height: 90px;
		margin-top: 50px;

		}
		.spanlogin{
			display: inline-block;
		}

		.spanLoginText{
			width: 207px;
		}

		.spanLoginFrist{
			width: 73px;
		}

		.divLogin{
			height: 40px;
		}

		.spanFontColor{
			color: rgb(167,167,167);
		}
		a:link {}		/* 未访问的链接 */
a:visited {}	/* 已访问的链接 */
a:hover {}	/* 鼠标移动到链接上 */
a:active {}	/* 选定的链接 */
		</style>
	</head>
	<body style=" background-image:url(./public/image/loginback.png); background-position: center -85px; background-repeat: no-repeat;'">
		<div class="warp" style='position: relative;'>	


			    <div style=' height: 200px;'>&nbsp;</div>
				<div style=' width: 350px; position: absolute;  left: 37%;'>
					<div class='divLogin'>
						<span class='spanlogin spanLoginFrist spanFontColor'>用户名：</span> <span class='spanlogin'><input type='text' name='username' class='spanLoginText'></span>
					</div>
					<div class='divLogin'>
						<span class='spanlogin spanLoginFrist spanFontColor'>密码:</span> <span class='spanlogin'><input type='text' name='password' class='spanLoginText'></span>
					</div>
					<div class='divLogin'>
						<span class='spanlogin spanLoginFrist spanFontColor'>验证码:</span> <span class='spanlogin'><input type='text' name='yanzhengma'></span> <span class='spanlogin' style='width: 25px;'>&nbsp;</span> <span class='spanlogin' style=' background-color: rgb(175,175,175); width: 50px; height: 19px;'>&nbsp;</span>
					</div>
					<div class='divLogin'>
						<span class='spanlogin' style='width: 78px;'>&nbsp;</span> 

						<span class='spanlogin' style='width: 85px; height:35px;background-image:url(./public/image/loginbutton.png); color:white; font-size: 14px; text-indent: 20px; letter-spacing: 10px; line-height: 35px; font-weight: bold;'>
							<a href='<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=homePage&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index'>登入</a>
						</span>
				
				</div>
			</div>
		</div>
	</body>
</html>