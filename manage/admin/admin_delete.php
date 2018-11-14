<?php
require_once('../session.php');
require_once('../conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>admin_delete</title>
    </head>
    <body>
        <?php
            $admin_name=$_POST['admin_name'];
            $sql="delete from admin where id='".$_GET['id']."'";
            mysql_query($sql);
            echo "<script>alert('delete success!');
                window.location.href='admin_list.php'
            </script>";
            exit;
            musql_close($conn);
        ?>
    </body>
</html>