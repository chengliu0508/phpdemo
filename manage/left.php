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
            <tr style='height:478px;'>
              <td valign='top'>
                <div class='menu'>
                    <table width='100%' border='0' cellpadding='0' align=center>
                        <tr>
                            <td height=25>
                                <a href='javascript:d.openALL();'>
                                    <img src='../images/c.jpg' width=15 height=15 border=0 alt='nowrap'>
                                </a>
                                <a href='javascript:d.closeALL();'>
                                    <img src='../images/pn_img2.jpg' width=15 height=15 border=0 alt='nowrap'>
                                </a>
                                <a href='login.php' target='mainFrame'>system</a>
                                <a href='../' target='_blank'>home</a>
                            </td>
                        </tr>
                        <tr>
                          <td>
                            <ul style='background-color:#cfef11;'>
                                <li><a href='admin/admin_add.php'>admin_add</a></li>
                                <li><a href='admin/admin_list.php'>admin_list</a></li>
                                <!-- <li><a href='admin/admin_list_pass.php'>admin_list_pass</a></li> -->
                                <!-- <li><a href='admin/admin_modify.php'>admin_modify</a></li> -->
                                <!-- <li><a href='admin/admin_modify_pass.php'>admin_modify_pass</a></li> -->
                                <!-- <li><a href='admin/admin_delete.php'>admin_delete</a></li> -->
                            </ul>
                          </td>
                          <td>
                            <ul style='background-color:#cfef11;'>
                                <li><a href='article/article_add.php'>article_add</a></li>
                                <li><a href='article/article_list.php'>article_list</a></li>
                            </ul>
                          </td>
                          <td>
                            <ul style='background-color:#cfef11;'>
                                <li><a href='produce/produce_add.php'>produce_add</a></li>
                                <li><a href='produce/produce_list.php'>produce_list</a></li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <ul style='background-color:#11efaf;'>
                                <li><a href='config.php'>config</a></li>
                            </ul>
                            <!-- <ul style='background-color:#cfef11;'>
                                <li><a href='guestbook_add.php'>guestbook_add</a></li>
                                <li><a href='guestbook_deal.php'>guestbook_deal</a></li>
                                <li><a href='guestbook_delete.php'>guestbook_delete</a></li>
                            </ul> -->
                          </td>
                        </tr>                       
                    </table>
                </div>
              </td>
            </tr>
        </table>
    </body>
</html>;