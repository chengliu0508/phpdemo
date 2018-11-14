<?php
    session_start();
    if(empty($_SESSION['zh']) && $_SESSION['ischecked']!='ok'){
        echo "<script>alert('please login first!');window.location.href='login.php'</script>";
        exit;
    }
?>