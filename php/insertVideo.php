<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/21
 * Time: 16:48
 */

include 'common/none.inc';

if (isset($_POST['submit'])) {
    include 'include/db_config.inc';

    $gName = $_POST['gName'];
    $gVideo = $_POST['gGuide'];
    $insertSql = "insert into $db_tableVideo(gameTitle, gameVideo) VALUES ('$gName', '$gVideo')";
    if (mysql_query($insertSql,$con)) {
        $alert = '添加成功！';
        $href = '../admin/adminVideo.php';
        include '../php/common/alert_href.inc';
    }
}