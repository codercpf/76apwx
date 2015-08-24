<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/21
 * Time: 16:01
 */


include 'php/include/db_config.inc';
$sql="select * from $db_tableVideo";
$query=mysql_query($sql,$con);

$h5title="游戏视频";
include 'php/common/h5_partion.inc';
?>
<div data-role="header">
    <h1>游戏视频</h1>
</div>
<div data-role="content">
    <ul data-role="listview" data-filter="true" data-inset="true" data-filter-placeholder="搜索游戏视频">
        <li data-role="list-divider">所有游戏视频</li>
        <?php
        while($row=mysql_fetch_array($query))
        {
            ?>
            <li>
                <a data-transition="slide" href="php/viewVideo.php?id=<?php echo $row['Id']; ?>">
                    <?php echo $row['gameTitle'];?>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
</div>
</body>
</html>