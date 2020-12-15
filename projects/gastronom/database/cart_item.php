<?php
use Database\database;

require_once 'database.php';
$db = new database('myitedu');
$sql = "SELECT c.id, c.`img`, c_item.`cart_id`, c_item.`id`, c_item.`item`, c_item.`qty_pount`, c_item.`price` FROM cart as c
right join cart_item as c_item
on c.id = c_item.id
where c_item.cart_id = 1;";
$res = $db->sql ($sql);
$value = [];
echo "<pre>";
print_r($res);
?>