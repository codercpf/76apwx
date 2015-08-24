<?php


include 'common/none.inc';

$title="修改攻略";
include 'common/header.inc';

include 'include/db_config.inc';
$masthead="修 改 游 戏 攻 略";
$id=$_GET['id'];
$sql="select * from $db_tableName WHERE Id=$id";
$query=mysql_query($sql,$con);
$row=mysql_fetch_assoc($query);

$faction="updateGuide.php?id=$id";

$gName=htmlspecialchars_decode($row['gameTitle']);
$gGuide=htmlspecialchars_decode($row['detailGuide']);
include 'common/content.inc';

$cancel="../admin/adminGuide.php";
include 'common/footer.inc';
