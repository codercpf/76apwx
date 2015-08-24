<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/17
 * Time: 11:32
 */

include '../php/include/db_config.inc';
session_start();
session_unset();
session_destroy();

$href="index.html";
include '../php/common/href_only.inc';