<?php /* Smarty version Smarty-3.0-RC2, created on 2013-12-24 19:03:36
         compiled from "/web/www/bankWebsite/templates/frame/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120600648052b96a08813c11-18478672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17957054ae90be4ebf409a74982fee9ba23d246' => 
    array (
      0 => '/web/www/bankWebsite/templates/frame/index.tpl',
      1 => 1387883015,
    ),
  ),
  'nocache_hash' => '120600648052b96a08813c11-18478672',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>

    </head>

    <body style='margin:0; background-color: rgb(209,227,246);'>
     <!-- <frameset rows="68,*" cols="*" frameborder="no" border="0" framespacing="0"> -->
        <iframe src="<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=headers" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame"   frameborder = '0' style='height: 64px; width: 100%;'></iframe>

        <iframe src="<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=left" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" style='float: left;width: 18%;height: 600px;position: relative;top: -8px;left: 4px;'frameborder = '0' ></iframe>
            
        <iframe src="<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=test&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index" name="mainFrame" style="width:82%;height: 600px;" id="mainFrame" title="mainFrame"  style='float: left;' frameborder = '0'></iframe>
    </body>
</html>