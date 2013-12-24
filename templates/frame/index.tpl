<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>

    </head>

    <body style='margin:0;'>
     <!-- <frameset rows="68,*" cols="*" frameborder="no" border="0" framespacing="0"> -->
        <iframe src="{$URLController}?{$CONTROLLER}=frame&{$FUNCTIONS}=headers" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame"  width='100%' frameborder = '0' style='height: 64px;'></iframe>

        <iframe src="{$URLController}?{$CONTROLLER}=frame&{$FUNCTIONS}=left" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" style='float: left;width: 234px;height: 610px;position: relative;top: -8px;left: 4px;'frameborder = '0' ></iframe>
            
        <iframe src="{$URLController}?{$CONTROLLER}=test&{$FUNCTIONS}=index" name="mainFrame" style="width:1044px;height: 600px;" id="mainFrame" title="mainFrame"  style='float: left;' frameborder = '0'></iframe>
    </body>
</html>