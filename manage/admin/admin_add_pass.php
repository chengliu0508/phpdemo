<?php
require_once('../session.php');
require_once('../conn.php');
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
        <?php
            $admin_name=$_POST['admin_name'];
            if($admin_name==''){
                echo "<script>alert('adminname can not be null!');history.go(-1)</script>";
                exit;
            }elseif(mysql_num_rows(mysql_query("select * from admin where admin_name='".$_POST['admin_name']."'"))>0){
                echo "<script>alert('this account is existed,please choose other one!');
                    window.location.href='admin_add.php'
                </script>";
                exit;
            }
            $admin_pass=$_POST['admin_pass'];
            if($admin_pass==''){
                echo "<script>alert('adminpass can not be null!');history.go(-1)</script>";
                exit;
            }
            $sql_add="insert into admin(admin_name,admin_pass) values('".$admin_name."','".$admin_pass."')";
            mysql_query($sql_add);
            echo "<script>alert('add success!');
                window.location.href='admin_list.php'
            </script>";
            exit;
            musql_close($conn);
        ?>
    </body>
</html>