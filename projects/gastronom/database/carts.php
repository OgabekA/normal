<?php

use Database\database;

require_once 'database.php';
$db = new database('myitedu');
$sql = "SELECT * FROM cart;";
$result = $db->sql ($sql);
?>