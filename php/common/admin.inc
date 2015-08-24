<?php
include '../php/common/none.inc';
include '../php/include/db_config.inc';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $adminTitle; ?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style type="text/css">
        body{
            background: url("../images/mooning.png") repeat scroll 0 0 #E5E5E5;
            overflow-x: hidden;
            color: #5a5a5a;
        }
        .table_row{
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 1px 8px 1.5px rgba(0, 0, 0, 0.35), 0 20px 70px 8px rgba(0, 0, 0, 0.25);
            display: table;
            width: 100%;
            padding: 0;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
<div class="container" style="width: 50%">
    <br><br>
    <div style="text-align: right;height: 30px;font-size: 16px; font-weight: bold">
        <?php echo $adminType;?> | <a href="logout.php">退出系统</a>
    </div>
    <br><br>
    <div class="table_row">
        <table class="table table-hover table-bordered">
            <caption style='padding-bottom:20px;padding-top:20px;font-size:20px;font-weight: bold;'>
                <?php echo $addNew; ?>
            </caption>
            <thead>
            <tr>
                <th style="text-align: center"><?php echo $type; ?>名称</th>
                <th style="text-align: center">操作</th>
            </tr>
            </thead>
            <tbody>