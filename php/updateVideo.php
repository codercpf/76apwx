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

    $id = $_GET['id'];
    $gName = $_POST['gName'];
    $gVideo = $_POST['gGuide'];
    $sqlUpdate = "update $db_tableVideo set gameTitle='$gName', gameVideo='$gVideo' WHERE Id=$id";

    if (mysql_query($sqlUpdate,$con)) {
        $alert = '修改成功！';
        $href = '../admin/adminVideo.php';
        include 'common/alert_href.inc';
    }
    else {
        $alert = "出错！" . mysql_error($con) . "<br>请联系管理员";
        $href = '../admin/adminGuide.php';
        include 'common/alert_href.inc';
    }
}
