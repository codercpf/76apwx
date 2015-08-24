
<body>
<div class="container" align="center" style="width:60%; margin: 0 auto;">
    <div class="bs-docs-masthead">
        <h1><?php echo $masthead; ?></h1>
    </div>
    <form name="AddForm" action="<?php echo $faction; ?>" method="post">
        <div style="height: 20px;"></div>
        <div align="right" style="padding-right: 5%;">
            <input class="btn btn-primary" type="button" align="right" value="编&nbsp;&nbsp;辑" name="modify" />
            <input class="btn btn-primary" type="submit" align="right" value="提&nbsp;&nbsp;交" name="submit" />
            <input class="btn btn-primary" type="button" align="right" value="取&nbsp;&nbsp;消"
                   onclick="InsertCancel()" />
        </div>

        <div class="fill_block">
            <div align="left" >
                <h4 style="display: inline; padding-left: 10%; font-weight: bold;">游戏攻略名称：</h4>
                <input type="text" style="height: 30px; width: 40%;" name="gName"
                       value="<?php echo $gName; ?>" required />
            </div>
            <br>
            <div class="panel panel-default" style="width: 80%; margin-left: auto;margin-right: auto;">
                <div class="panel-heading" align="center">
                    <h4 class="panel-title" style=" font-weight: bold;">攻略详情</h4>
                </div>
                <div class="panel-body">
                    <textarea name="gGuide" id="gameGuide" style="height: 500px; width: 100%;">
                        <?php echo $gGuide;?>
                    </textarea>
                </div>
            </div>
        </div>
    </form>
</div>
</body>




















