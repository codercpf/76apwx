<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/17
 * Time: 11:32
 */

include '../php/include/db_config.inc';

$uName=$_POST['userName'];
$uPass=md5($_POST['passWord']);
$url="index.html";
session_start();

if(isset($_SESSION['admin_name']) && $_SESSION['admin_name']==$uName)
{
    $alert="该账号已经登录，请使用其他账号";
    $href=$url;
    include '../php/common/alert_href.inc';
}
else
{
    $QuerySql="select * from $db_adminTable where adminName='$uName' and adminPass='$uPass'";
    $result=mysql_query($QuerySql,$con);
    $row=mysql_fetch_assoc($result);
    $rowNum=mysql_num_rows($result);

    //echo $QuerySql;

    if($rowNum==1)
    {
        $_SESSION['admin_name']=$row['adminName'];
        $href='adminGuide.php';
        include '../php/common/href_only.inc';
    }
    else
    {
        $alert='用户名或密码错误，请重新输入';
        $href=$url;
        include '../php/common/alert_href.inc';
    }
}


