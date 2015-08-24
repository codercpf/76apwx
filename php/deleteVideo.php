<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/21
 * Time: 16:48
 */

include 'common/none.inc';

include 'include/db_config.inc';
$id=$_GET['id'];
$sql="delete from $db_tableVideo where Id=$id";
if (mysql_query($sql,$con))
{
    $href="../admin/adminVideo.php";
    include 'common/href_only.inc';
}
else
{
    $alert='删除错误，请联系管理员';
    include 'common/alert_only.inc';
}
