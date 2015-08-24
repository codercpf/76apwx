<?php

include 'db_config.inc';


$createTable="create table if not EXISTS $db_tableName(
        Id INT NOT NULL auto_increment,
        gameTitle VARCHAR(100) NOT NULL,
        detailGuide text,
        PRIMARY KEY (Id)
        )DEFAULT charset=utf8 auto_increment=1";

$createTableVideo="create table if NOT EXISTS $db_tableVideo(
        Id INT not NULL auto_increment,
        gameTitle VARCHAR(100) NOT NULL,
        gameVideo text,
        PRIMARY KEY (Id)
        )DEFAULT charset=utf8 auto_increment=1";


$adminTable="create table if not EXISTS $db_adminTable(
        Id int NOT NULL auto_increment,
        adminName VARCHAR(50) not NULL,
        adminPass VARCHAR(50) not NULL,
        PRIMARY KEY (Id)
        )DEFAULT charset=utf8 auto_increment=1";


// $apass=md5("admin2015");
// $Addadmin="insert into $db_adminTable(adminName, adminPass) VALUES ('admin', '$apass')";

//echo $Addadmin;


if(mysql_query($createTableVideo,$con)){
    echo "Table $db_tableVideo created successfully!";
//    echo "New admin inserted successfully!";
}
else{
    echo "Error! ".mysql_error($con);
}
mysql_close($con);


