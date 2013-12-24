<?php /* Smarty version Smarty-3.0-RC2, created on 2013-12-24 16:08:33
         compiled from "/web/www/bankWebsite/templates/frame/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25458273752b94101cfd0a6-13375754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17957054ae90be4ebf409a74982fee9ba23d246' => 
    array (
      0 => '/web/www/bankWebsite/templates/frame/index.tpl',
      1 => 1387868654,
    ),
  ),
  'nocache_hash' => '25458273752b94101cfd0a6-13375754',
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

     <frameset rows="30,*" cols="*" frameborder="no" border="0" framespacing="0">
        <frame src="<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=headers" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />

        <frameset cols="150,*"  frameborder="no" border="0" framespacing="0" style=' background-color: rgb(209,227,246)'>

            <frame src="<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=frame&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=left" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
            
            <frame src="<?php echo $_smarty_tpl->getVariable('URLController')->value;?>
?<?php echo $_smarty_tpl->getVariable('CONTROLLER')->value;?>
=test&<?php echo $_smarty_tpl->getVariable('FUNCTIONS')->value;?>
=index" name="mainFrame" id="mainFrame" title="mainFrame" />


        </frameset>
    </frameset>


    <noframes>

        <body>
        </body>


    </noframes>
    
           
        
    </body>
</html>