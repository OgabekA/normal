<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php

use Database\database;

require_once '../database/database.php';
$db = new database('myitedu');
$sql = "SELECT c.id, c.`img`, c_item.`cart_id`, c_item.`id`, c_item.`item`, c_item.`qty_pount`, c_item.`price` FROM cart as c
right join cart_item as c_item
on c.id = c_item.id
where c_item.cart_id = 1;";
$res = $db->sql ($sql);
$value = [];
?>
<!-- Scrollable modal -->
<div class="modal-dialog modal-dialog-scrollable">
		<table class="table-bordered">
				<?php foreach ($res as $item=>$re){ ?>
				<tr>
						<td><?echo $value[$item['c.id']][] = $re;?></td>
						<td></td>
				</tr>
				<?php } ?>
		</table>
</div>
</body>
</html>