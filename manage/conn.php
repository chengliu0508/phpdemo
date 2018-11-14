<?php
    ini_set('display_errors', false);
    $conn=mysql_connect('localhost','root','');
    if(!$conn)
    {
        die('could not connect:'.mysql_error());
    }
    $dbselect=mysql_select_db('company',$conn);
    if(!$dbselect)
    {
        die('could not use database:'.mysql_error());
    }
    mysql_query("set names utf8");
?>