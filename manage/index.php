<?php
    // session_start();
    require_once('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>admin system</title>
        <link rel="stylesheet" type="text/css" href="./cssadmin/main.css"/>
    </head>
    <frameset rows='120,*,60' cols='' frameborder='No' frameborder='0' framespacing='0'>
        <frame src='top.php' name='topframe' marginheight='0' scrolling='No' noresize='noresize' id='topframe' title='topframe'/>
        <frame src='left.php' name='leftframe' marginheight='0' scrolling='No' noresize='noresize' id='leftframe' title='leftframe'/>
        <!-- <frameset rows='*' cols='190,*' frameborder='No' frameborder='0' framespacing='0'>
            <frame src='left.php' name='leftframe' marginheight='0' scrolling='No' noresize='noresize' id='leftframe' title='leftframe'/>
            <frame src='right.php' name='rightframe' marginheight='0' scrolling='No' noresize='noresize' id='rightframe' title='rightframe'/>
        </frameset>   -->
        <frame src='bottom.php' name='bottomframe' marginheight='0' scrolling='No' noresize='noresize' id='bottomframe' title='bottomframe'/>
    </frameset>
    <noframes>
        <body>
            <p>your explorer can not support frame</p>
        </body>
    </noframes>
</html>