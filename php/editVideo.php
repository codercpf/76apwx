<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/21
 * Time: 16:47
 */

include 'common/none.inc';

$title="修改视频";
include 'common/header.inc';

include 'include/db_config.inc';
$masthead="修 改 游 戏 视 频";
$id=$_GET['id'];
$sql="select * from $db_tableVideo WHERE Id=$id";
$query=mysql_query($sql,$con);
$row=mysql_fetch_assoc($query);

$faction="updateVideo.php?id=$id";

$gName=htmlspecialchars_decode($row['gameTitle']);
$gGuide=htmlspecialchars_decode($row['gameVideo']);
include 'common/content.inc';

$cancel="../admin/adminVideo.php";
include 'common/footer.inc';