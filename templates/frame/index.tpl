<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>

    </head>

     <frameset rows="30,*" cols="*" frameborder="no" border="0" framespacing="0">
        <frame src="{$URLController}?{$CONTROLLER}=frame&{$FUNCTIONS}=headers" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />

        <frameset cols="150,*" frameborder="no" border="0" framespacing="0" style=' background-color: rgb(209,227,246)'>

            <frame src="{$URLController}?{$CONTROLLER}=frame&{$FUNCTIONS}=left" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
            
            <frame src="{$URLController}?{$CONTROLLER}=test&{$FUNCTIONS}=index" name="mainFrame" style="width: 590px;height: 1050px;" id="mainFrame" title="mainFrame" />


        </frameset>
    </frameset>


    <noframes>

        <body>
        </body>


    </noframes>
    
           
        
    </body>
</html>