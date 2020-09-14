<?php
session_start();
require_once('model/db_connect.php');
require_once('model/config.php');

if(!isset($_SESSION["arkAdminLoginKey"]))
{
 header('location:index');
}
?>