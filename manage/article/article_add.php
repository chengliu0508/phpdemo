<?php
require_once('../session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>admin_add</title>
    </head>
    <body>
        <form name='form_add' id='form_add' action='article_add_pass.php' method='post'>
            <table width='100%' border='1' cellspacing='0' cellpadding='0'>
                <tr style='color:red;text-align:center;background-color:yellow;' colspan='16'>
                    <td></td><td>article add</td><td></td><td></td><td style='background-color:yellow;'></td>
                </tr>
                <tr>
                    <td  width='8%' height='35'><span style='color:#f30;'>*</span>tite</td>
                    <td width='28%'><input type='text' name='title' id='title'/></td>
                    <td width='13%'><span style='color:#f30;'>*</span>content</td>
                    <td width='28%'><input type='text' name='content' id='content'/></td>
                    <td width='23%' colspan='2'><input type='submit' name='button' id='button' value='add'/></td>
                </tr>
                <tr>
                    <td  width='8%' height='35'><span style='color:#f30;'></span>pubdate</td>
                    <td width='28%'><input type='text' name='pubdate' id='pubdate' value="<?php date_default_timezone_set('UTC');echo date("y-m-d");?>"/>
                    </td>
                    <td width='13%'><span style='color:#f30;'></span>comefrom</td>
                    <td width='28%'><select name="comefrom">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                        </select>
                    </td>
                    <td width='23%' colspan='2'></td>
                </tr>
            </table>
        </form>
    </body>
</html>