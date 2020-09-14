<?php
 require_once ('MysqliDb.php');

 $mysqli = new mysqli ('localhost', 'root', '', 'ark_admin');
 $db = new MysqliDb ($mysqli);
?>