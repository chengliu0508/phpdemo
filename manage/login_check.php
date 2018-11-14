<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>no title 1.0</title>
    </head>
    <body>
        <?php 
            require_once 'conn.php';
            $admin_name=$_POST['admin_name'];
            $admin_pass=$_POST['admin_pass'];
            $sql="SELECT * FROM admin WHERE admin_name='".$admin_name."' and admin_pass='".$admin_pass."'";
            $result=mysql_query($sql);
            if($result){
                $row=mysql_num_rows($result);
                if($row>0){
                    $_SESSION['ischecked']='ok';
                    $_SESSION['admin_name']=$_POST['admin_name'];
                    echo "<script>alert('login success!');window.location.href='index.php'</script>";
                }else{
                    echo "<script>alert('login failed!');window.location.href='login.php'</script>";
                    exit;
                }
            }
            mysql_close($conn);
        ?>
    </body>
</html>