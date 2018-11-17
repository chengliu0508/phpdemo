<?php
require_once('../session.php');
require_once('../conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>produce_add</title>
    </head>
    <body>
        <?php
            $title=$_POST['title'];
            if($title==''){
                echo "<script>alert('title can not be null!');history.go(-1)</script>";
                exit;
            }elseif(mysql_num_rows(mysql_query("select * from produce where title='".$_POST['title']."'"))>0){
                echo "<script>alert('this title is existed,please choose other one!');
                    window.location.href='produce_add.php'
                </script>";
                exit;
            }
            $href=$_POST['href'];
            if($href==''){
                echo "<script>alert('href can not be null!');history.go(-1)</script>";
                exit;
            }
            $comefrom=$_POST['comefrom'];
            $pubdate=$_POST['pubdate'];
            $sql_add="insert into produce(title,href,comefrom,pubdate) values('".$title."','".$href."','".$comefrom."','".$pubdate."')";
            mysql_query($sql_add);
            echo "<script>alert('add success!');
                window.location.href='produce_list.php'
            </script>";
            exit;
            musql_close($conn);
        ?>
    </body>
</html>