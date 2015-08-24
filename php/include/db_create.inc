<?php

include 'db_config.inc';


$db_create = "create database if not exists $db_database_name default charset=utf8";


if (!$con) {
    echo "Error!" . mysql_error($con);
}
else {
    if (mysql_query($db_create, $con))
    {
        echo "Database $db_database_name created successfully!";
    }
    else {
        echo "Error! " . mysql_error($con);
    }
}

mysql_close($con);
