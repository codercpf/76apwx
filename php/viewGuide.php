<?php
include 'include/db_config.inc';

$id=$_GET['id'];
$sql="select * from $db_tableName where Id=$id";
$query=mysql_query($sql,$con);
$row=mysql_fetch_assoc($query);

$h5title = $row['gameTitle'];
include 'common/h5_partion.inc';
?>
    <div data-role="header" >
        <a href="#" data-rel="back"  data-icon = "arrow-l"  data-transition="slide" data-direction="reverse">返回</a>
        <h1><?php echo $row['gameTitle']; ?></h1>
    </div>
        <div data-role="content">
            <style type="text/css">
                .ptext
                {
                    white-space: normal;
                    width: 100%;
                    font-size:14px;
                    line-height:15px;
                    word-wrap:break-word;
                    word-break:normal;
                }
                .ui-listview>li p
                {
                    white-space: normal !important;
                }
            </style>

            <div style="width: auto;">
                <ul data-role="listview">
<!--                    <li data-role="list-divider">游戏攻略</li>-->
                    <li>
                        <div class="ptext">
                            <?php echo $row['detailGuide']; ?>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
    </div>
    </body>
    </html>