<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>admin 1.0</title>
        <link rel="stylesheet" type="text/css" href="cssadmin/login.css"/>
        <script type="text/javascript">
            function chk(theForm){
                if(theForm.admin_name.value==''){
                    alert('please input name first');
                    theForm.admin_name.focus();
                    return(false);
                }
                else if(theForm.admin_pass.value==''){
                    alert();
                    the.admin_pass.focus();
                    return(false);
                }
            }else{
                return(true);
            }
        </script>
    </head>
    <body>
        <div id='mian'>
            <div id='wrapper'>
                <form action='login_check.php' method='Post' id='form1' onSubmit="return chk(this)">
                    <div id='sys_name'>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>company admin system</p>
                    </div>
                    <ul id='cont'>
                        <li>
                            <label class='lb' for='uname'>admin name</label>
                            <input name='admin_name' id='uname' type='text' class='ip' value='' maxlength='18'/>
                        </li>
                        <li>
                            <label class='lb' for='pwd'>admin password</label>
                            <input name='admin_pass' id='pwd' type='password' class='ip' value='' maxlength='10'/>                           
                        </li>
                        <li>
                            <span>
                                <input type='image' src='../images/submit.png' title='login system'/>
                            </span>
                        </li>
                    </ul>
                    <p id='copy'>
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>