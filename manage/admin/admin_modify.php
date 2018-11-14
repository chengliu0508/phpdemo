<?php
require_once('../session.php');
require_once('../conn.php');
$sql="select * from admin where id='".$_GET['id']."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>admin_modify</title>
        <style type='text/css'>
            body{
                margin:0;
            }
        </style>
    </head>
    <body>
        <form name='form_add' id='form_add' action='admin_modify_pass.php' method='post'>
            <table width='100%' border='1' cellspacing='0' cellpadding='0'>
                <tr class='tt' colspan='16'><td>admin modify</td></tr>
                <tr>
                    <td  width='8%' height='35'><span style='color:#f30;'>*</span>account</td>
                    <td width='28%'><input type='text' name='admin_name' id='admin_name' value="<?=$row['admin_name']?>" disabled='disabled'/></td>
                    <td width='13%'><span style='color:#f30;'>*</span>password</td>
                    <td width='28%'>
                        <input type='password' name='admin_pass' id='admin_pass'/>
                        <span style='color:#f30;font-size:12px;'>(tip:please input password if you want to change it)</span>
                    </td>
                    <td width='23%' colspan='2'><input type='submit' name='button' id='button' value='confirm modify'/></td>
                </tr>
            </table>
        </form>
    </body>
</html>