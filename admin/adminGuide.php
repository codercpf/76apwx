<?php
    $adminTitle="游戏攻略管理";
    $adminType="<a href='adminVideo.php'>视频管理</a>";
    $addNew = "<a href='../php/addGuide.php'>添加新攻略</a>";
    $type="攻略";
    include '../php/common/admin.inc';

    $sql="select * from $db_tableName order by Id";
    $query=mysql_query($sql,$con);
    while($row=mysql_fetch_array($query))
        {
?>

            <tr>
                <td style="vertical-align: middle;">
                    <div style="padding-left: 10px;">
                        <?php echo $row['gameTitle']; ?>
                    </div>
                </td>
                <td style="vertical-align: middle;">
                    <div style="text-align: right;height: 30px; font-size: 16px; padding-right: 10px;">
                        <a href="../php/viewGuide.php?id=<?php echo $row['Id']; ?>" target="_blank" >预览</a> |
                        <a href="../php/editGuide.php?id=<?php echo $row['Id'];?>" target="_blank">编辑</a> |
                        <a href="../php/deleteGuide.php?id=<?php echo $row['Id']; ?>"
                           onclick="return confirm('确定要删除该条记录吗？该操作无法恢复');">删除</a>
                    </div>
                </td>
            </tr>
<?php
        }
    include '../php/common/adminfooter.inc';
?>
