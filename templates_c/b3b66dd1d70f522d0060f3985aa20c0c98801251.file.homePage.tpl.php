<?php /* Smarty version Smarty-3.0-RC2, created on 2013-12-24 14:41:34
         compiled from "/web/www/bankWebsite/templates/public/homePage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74501513052b92c9eb52432-62296791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3b66dd1d70f522d0060f3985aa20c0c98801251' => 
    array (
      0 => '/web/www/bankWebsite/templates/public/homePage.tpl',
      1 => 1387864461,
    ),
  ),
  'nocache_hash' => '74501513052b92c9eb52432-62296791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="./public/js/jquery.js"></script>
<script>
	
	$(document).ready(function() {
		
		$(".effect").hover(function() {
			$(this).css({
				"margin-top": '40px'
			});
		}, function() {
			$(this).css({
				"margin-top": '0'
			});
		});
});


</script>

<style>
.titleStyle{
/*	border: solid 1px red;*/
text-align: center;
height: 205px;
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
width: 105px;
height: 25px;
/*background-color: black;*/
color: #fff;
text-align: center;
line-height: 25px;
-moz-border-radius: 25px;
font-size: 13px;

margin-top: 9px;
margin-left: 35px;

}
.systemCache{
/*border: solid 1px red;*/
width: 11%;
height: 200px;
float: left;
text-align: center;
margin-left: 10px;
}

.imgWarp{
/*	border: solid 1px red;*/
	height: 150px;
}
.imgStyle{
width: 100px;
height: 80px;
	margin-top: 50px;
	margin-left: 8px;
	cursor: pointer;

}
/*.effect{

	border: solid 1px red;
}*/
</style>
</head>

<body style=" background:url(./public/image/bj.png) no-repeat 0 -40px;">
	
	<div class="warp">
		<div class="titleStyle"><img src="./public/image/banner.png" style=" margin-top: 128px;"></div>
		<div class="rowLogoStyle">
			<span style=" margin-left: -45px;"><img src = "./public/image/jx.png"/></span>
		</div>

		<div style=" height: 90px;"></div>

		<div class="rowListStyle">
			<div class="systemCache effect" style=" margin-left: 97px;">
			   <a class="imgWarp" href='<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index'><img src="./public/image/3-1_03.png" style=" margin-left: 35px;" class="imgStyle"></a>
			   <div class="roundedBorder" style=" width: 110px; background-color: rgb(9,39,82)">系统缓存管理</div>
		    </div>

		   	<div class="systemCache effect">
			   <a class="imgWarp" href='<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index'><img src="./public/image/3-1_11.png" style=" margin-left: 18px;" class="imgStyle"></a>
			   <div class="roundedBorder"style=" width: 90px; background-color: rgb(9,39,82)">报表管理</div>
		    </div>

		    <div class="systemCache effect">
			   <a class="imgWarp" href='<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index'><img src="./public/image/3-1_06.png"  class="imgStyle"></a>
			   <div class="roundedBorder" style=" width: 110px; margin-left: 18px; background-color: rgb(9,39,82);">参数配置管理</div>
		    </div>

		    <div class="systemCache effect">
			   <a class="imgWarp" ><img src="./public/image/3-1_08.png" margin-left: 18px; class="imgStyle""></a>
			   <div class="roundedBorder" style=" background-color: rgb(9,39,82);width: 90px;">任务管理</div>
		    </div>

		    <div class="systemCache effect">
			   <a class="imgWarp" href='<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index'><img src="./public/image/3-1_20.png" class="imgStyle""></a>
			   <div class="roundedBorder" style=" margin-left: 18px;background-color: rgb(9,39,82)">厂商信息管理</div>
		    </div>

		    <div class="systemCache effect">
			   <a class="imgWarp" href='<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index'><img src="./public/image/3-1_14.png" class="imgStyle""></a>
			   <div class="roundedBorder" style="width: 90px; margin-left: 26px;background-color: rgb(9,39,82)">流程管理</div>
		    </div>

		    <div class="systemCache effect">
			   <a class="imgWarp" href='<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index'><img src="./public/image/3-1_17.png" class="imgStyle" style=" margin-left: -6px;"></a>
			   <div class="roundedBorder" style=" margin-left: 15px;background-color: rgb(9,39,82)">角色权限管理</div>
		    </div>

	</div>


 </body>
</html>
