<?php
require_once('../session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>admin_add</title>
        <style type='text/css'>
            body{
                margin:0;
            }
        </style>
    </head>
    <body>
        <form name='form_add' id='form_add' action='admin_add_pass.php' method='post'>
            <table width='100%' border='1' cellspacing='0' cellpadding='0'>
                <tr style='color:red;text-align:center;background-color:yellow;' colspan='16'><td></td><td>admin add</td><td></td><td></td><td></td></tr>
                <tr>
                    <td  width='8%' height='35'><span style='color:#f30;'>*</span>account</td>
                    <td width='28%'><input type='text' name='admin_name' id='admin_name'/></td>
                    <td width='13%'><span style='color:#f30;'>*</span>password</td>
                    <td width='28%'><input type='password' name='admin_pass' id='admin_pass'/></td>
                    <td width='23%' colspan='2'><input type='submit' name='button' id='button' value='add'/></td>
                </tr>
            </table>
        </form>
    </body>
</html>