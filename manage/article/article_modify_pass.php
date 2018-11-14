<?php
require_once('../session.php');
require_once('../conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>article_modify</title>
    </head>
    <body>
        <?php
            $content=$_POST['content'];
            if($content==''){
                echo "<script>alert('please input content!');
                    window.location.href='article_list.php'
                </script>";
                exit;
                
            }else{
                echo $content;
            }
            $sql="update article set content='".$_POST['content']."' where id='".$_GET['id']."'";
            mysql_query($sql);
            echo "<script>alert('modify success!');
                window.location.href='article_list.php'
            </script>";
            exit;
            musql_close($conn);
        ?>
    </body>
</html>