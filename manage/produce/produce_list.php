<?php
require_once('../session.php');
require_once('../conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>produce_list</title>
    </head>
    <body>
        <form name='form_add' id='form_add' action='produce_add_pass.php' method='post'>
            <table width='100%' border='1' cellspacing='0' cellpadding='0'>
                <tr style='color:red;text-align:center;background-color:yellow;'>
                    <td>produce list</td>
                    <td></td>
                    <td><input type="button" value="add produce" onclick="window.location.href='produce_add.php?'"/></td>
                </tr>
                <tr>
                    <td height='35'>title</td>
                    <td height='35'>href</td>
                    <td height='35'>comefrom</td>
                    <td height='35'>pubdate</td>
                    <td width='25%'>operate</td>
                </tr>
                <?php
                    $total_num=mysql_num_rows(mysql_query("select id from produce"));
                    $pagesize=5;
                    $page_num=ceil($total_num/$pagesize);
                    $page=$_GET['page'];
                    if($page<1||$page==''){
                        $page=1;
                    }
                    if($page>$page_num){
                        $page=$page_num;
                    }
                    $offset=$pagesize*($page-1);
                    $prepage=($page<>1)?$page-1:$page;
                    $nextpage=($page<>$page_num)?$page+1:$page;
                    $sql="select * from produce order by id asc limit $offset,$pagesize";
                    $result=mysql_query($sql);
                    while($row=mysql_fetch_array($result)){
                ?>
                    <tr>
                        <td height='20'><?=$row['title']?></td>
                        <td height='20'><?=$row['href']?></td>
                        <td height='20'><?=$row['comefrom']?></td>
                        <td height='20'><?=$row['pubdate']?></td>
                        <td width='28%'>
                            <input type="button" name="button" id="button" value="modify" onclick="window.location.href='produce_modify.php?id=<?=$row['id']?>'" />&nbsp;&nbsp;
                            <input type='button' name='button2' id='button2' value='delete' onclick="window.location.href='produce_delete.php?id=<?=$row['id']?>'" />
                        </td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td height='35' colspan='2' align='center'>
                            <?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">first</a>&nbsp;&nbsp;<a href="?page=<?=$prepage?>">pre</a>
                            &nbsp;&nbsp;<a href="?page=<?=$nextpage?>">next</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">last</a>
                        </td>
                    </tr>
            </table>
        </form>
    </body>
</html>