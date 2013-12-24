<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>

    </head>

    <body style='margin:0; background-color: rgb(209,227,246);'>
     <!-- <frameset rows="68,*" cols="*" frameborder="no" border="0" framespacing="0"> -->
        <iframe src="{$URLController}?{$CONTROLLER}=frame&{$FUNCTIONS}=headers" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame"   frameborder = '0' style='height: 64px; width: 100%;'></iframe>

        <iframe src="{$URLController}?{$CONTROLLER}=frame&{$FUNCTIONS}=left" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" style='float: left;width: 18%;height: 600px;position: relative;top: -8px;left: 4px;'frameborder = '0' ></iframe>
            
        <iframe src="{$URLController}?{$CONTROLLER}=test&{$FUNCTIONS}=index" name="mainFrame" style="width:82%;height: 600px;" id="mainFrame" title="mainFrame"  style='float: left;' frameborder = '0'></iframe>
    </body>
</html>