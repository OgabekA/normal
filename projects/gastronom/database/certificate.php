<?php

use Database\database;

require_once 'database.php';
$db = new database('myitedu');
$sql = "SELECT * FROM certificates;";
$certificates = $db->sql ($sql);
?>
