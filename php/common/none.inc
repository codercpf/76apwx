<?php
session_start();

if (!isset($_SESSION['admin_name']))
{
    $login = '../admin/index.html';
    echo "<script>window.location.href='$login'</script>";
}

