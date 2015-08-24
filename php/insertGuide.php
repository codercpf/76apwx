<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/17
 * Time: 13:52
 */


include 'common/none.inc';

if (isset($_POST['submit'])) {
    include 'include/db_config.inc';

    $gName = $_POST['gName'];
    $gGuide = $_POST['gGuide'];
    $insertSql = "insert into $db_tableName(gameTitle, detailGuide) VALUES ('$gName', '$gGuide')";
    if (mysql_query($insertSql,$con)) {
        $alert = '添加成功！';
        $href = '../admin/adminGuide.php';
        include '../php/common/alert_href.inc';
    }
}




