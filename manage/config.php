<?php
    require_once('session.php');
    require_once('conn.php');
    $sql='SELECT * FROM config';
    $result=mysql_query($sql);
    $r=mysql_fetch_array($result);
    echo $r['site_title'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>notitle</title>
        <link rel="stylesheet" type="text/css" href="cssadmin/main.css"/>
        <style>
            .operate span{border:1px solid #000;cursor:pointer;;}
        </style>
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    </head>
    <body margin='0'>
        <form id='form1' name='form1' method='post' action='config.php?act=save'>
            <p class='operate' style='padding-left:50px;font-size:30px;color:red;'>
                <span onclick='alert("hello1")'>base set</span>
                <span class='operate1'>operate1</span>
                <span id='operate2'>operate2</span>
                <span id='operate3'>operate3</span>
            </p>
          <ul>
            <li>site_logo:<input name='site_logo' id='site_logo' value="<?php echo $rs['site_logo']?>" type='text' size='40'/></li>
            <li>company_ewn:<input name='company_ewn' id='company_ewn' value="<?php echo $rs['company_ewn']?>" type='text' size='40'/></li>
            <li>site_url:<input name='site_url' id='site_url' value="<?php echo $rs['site_url']?>" type='text' size='40'/></li>
            <li>site_keyword:<input name='site_keyword' id='site_keyword' value="<?php echo $rs['site_keyword']?>" type='text' size='40'/></li>
            <li>site_description:<input name='site_description' id='site_description' value="<?php echo $rs['site_description']?>" type='text' size='40'/></li>
            <li>site_copyright:<input name='site_copyright' id='site_copyright' value="<?php echo $rs['site_copyright']?>" type='text' size='40'/></li>
            <li>company_name:<input name='company_name' id='company_name' value="<?php echo $rs['company_name']?>" type='text' size='40'/></li>
            <li>company_phone:<input name='company_phone' id='company_phone' value="<?php echo $rs['company_phone']?>" type='text' size='40'/></li>
            <li>company_fax:<input name='company_fax' id='company_fax' value="<?php echo $rs['company_fax']?>" type='text' size='40'/></li>
            <li>company_email:<input name='company_email' id='company_email' value="<?php echo $rs['company_email']?>" type='text' size='40'/></li>
            <li>company_weixin:<input name='company_weixin' id='company_weixin' value="<?php echo $rs['company_weixin']?>" type='text' size='40'/></li>
            <li>company_address:<input name='company_address' id='company_address' value="<?php echo $rs['company_address']?>" type='text' size='40'/></li>
            <li><input name='submit' id='submit' value="submit" type='submit' height='40'/></li>
         </ul>
        </form>
    </body>
    <script>
        function fn(a){alert(a);}
        $(function(){$('.operate1').click(function(){alert('welcome to you1');})})
        // var operate2=document.getElementById('operate2');
        // operate2.attachEvent('onclick',fn('operate2'));
        // var operate3=document.getElementById('operate3');
        // operate3.attachEventListener('click',fn('operate3'),false);
    </script>
</html>
<?php
    if($_GET['act']=='save'){
        mysql_query("UPDATE config set site_logo='".$_POST['site_logo']."',
            company_ewn='".$_POST['company_ewn']."',
            site_url='".$_POST['site_url']."',
            site_keyword='".$_POST['site_keyword']."',
            site_description='".$_POST['site_description']."',
            site_copyright='".$_POST['site_copyright']."',
            company_name='".$_POST['company_name']."',
            company_phone='".$_POST['company_phone']."',
            company_fax='".$_POST['company_fax']."',
            company_email='".$_POST['company_email']."',
            company_weixin='".$_POST['company_weixin']."',
            company_address='".$_POST['company_address']."'",$conn) or die(mysql_error());;
        
        echo "<script>alert('submit success!');window.location.href='config.php';</script>";
        exit;
    }
    mysql_close($conn);
?>