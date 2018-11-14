<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title></title>
        <style type='text/css'>
            body{
                margin:0;
                padding-top:-20px;
            }
        </style>
    </head>
    <body margin='0'>
        <table width='100%' border='0' cellpadding='8' align=center>
            <tr style='height:90px;background-color:#8880ab;'>
                <td width='36%' valign='middle' style='background-image:url(../images/adminlog.png);font-size:30px;'>&nbsp;</td>
                <td width='64%' valign='bottom' align='right' style='font-size:12px;'>nowtime:
                 <span id='time'>
                    <script>
                      document.getElementById('time').innerHTML=new Date().toLocaleString()+'week'+'7123456'.charAt(new Date().getDay());
                      setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString()+'week'+'7123456'.charAt(new Date().getDay());",1000);
                    </script>
                 </span>
                </td>
            </tr>
            <tr style='height:26px;background-color:#fff;'>
                <td width='64%' style='font-size:12px;padding:0;'>
                    welcome:<span style='color:#f30;font-weight:600;'><?php echo $_SESSION['admin_name'];?></span>,you are now logined in company manerger system
                </td>
                <td width='36%' valign='middle' align='right' style='font-size:12px;padding:0;'>
                   <input type='button' value='exit' onclick="window.parent.location.href='loginout.php'" style="height:21px;margin-right:5px;"/>
                </td>
            </tr>
        </table>
    </body>
</html>;