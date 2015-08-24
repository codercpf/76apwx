<?php
$db_server_name='localhost';
//$db_user_name='root';
//$db_user_pass='103hxyx!#%';
//$db_database_name='76apwx';

$db_user_name='root';
$db_user_pass='root';
$db_database_name='mydb';

$db_tableName='gameGuide';
$db_adminTable='adminCount';
$db_tableVideo='gameVideo';

$con = mysql_connect($db_server_name, $db_user_name, $db_user_pass);

mysql_set_charset('utf8',$con);
mysql_select_db($db_database_name,$con);