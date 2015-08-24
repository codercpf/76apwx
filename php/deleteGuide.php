<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/18
 * Time: 14:12
 */

include 'common/none.inc';

include 'include/db_config.inc';
$id=$_GET['id'];
$sql="delete from $db_tableName where Id=$id";
if (mysql_query($sql,$con))
{
    $href="../admin/adminGuide.php";
    include 'common/href_only.inc';
}
else
{
    $alert='删除错误，请联系管理员';
    include 'common/alert_only.inc';
}



