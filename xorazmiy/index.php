<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
$qty=0;
$parms = $_GET;
$id = $parms['id']??0;
$qty = $parms['qty']??0;

if ($qty>0) {
		$qty = $_SESSION['products']['qty'] += $qty;
		$_SESSION['products'] = [
				'id' => $id,
				'qty' => $qty
		];
}


function display_select_options()
{
		for ($i = 1; $i <= 10; $i++) {
				echo "<option name='product$i' value=\"$i\">$i</option>";
		}
}

?>

<div class="container-fluid">
	<div class="shopping_cart">
			<?php echo  $_SESSION['products']['qty']; ?>
	</div>
	
	<h4>Our Products</h4>
	<table class="table table-bordered">
		<tr>
			<th>Image</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>QTY</th>
		</tr>
				<tr>
					<td>
						<img class="product_icon" src="https://zdnet4.cbsistatic.com/hub/i/r/2020/10/21/25999ae5-5538-41da-b025-eb44ce8b8c81/resize/1200xauto/b82044831c8ab0ed40a66911565aeb10/iphone-12-pro-max-blue-hero.png">
					</td>
					<td>Iphone 12 Pro Max</td>
					<td>Iphone 12 Pro Max 2020 512 GB</td>
					<td>$1,299.99</td>
					<td>
						<form>
							<select name="qty">
									<?php
									display_select_options();
									?>
							</select>
							<input name="id" type="hidden" value="10">
							<input value="" class="product" type="submit" name="sbt_btn">
						</form>
					</td>
				</tr>
		<tr>
			<td>
				<img class="product_icon" src="https://images.samsung.com/is/image/samsung/levant/galaxy-note20/gallery/levant-galaxy-note20-ultra-n985-sm-n985fzngmid-frontmysticbronze-thumb-274061473?">
			</td>
			<td>Note 20 Ultra 5G</td>
			<td>Samsung Galaxy Note 20 Ultra 5G</td>
			<td>$1,299.99</td>
			<td>
				<form>
					<select name="qty">
							<?php
							display_select_options();
							?>
					</select>
					<input name="id" type="hidden" value="10">
					<input value="" class="product" type="submit" name="sbt_btn">
				</form>
			</td>
		</tr>
		<tr>
			<td>
				<img class="product_icon" src="https://i2.wp.com/www.mac-ave.com/wp-content/uploads/2016/10/MBP13RD-2016_PSOpen_US-EN-SCREEN.png?fit=1024%2C910&ssl=1">
			</td>
			<td>MacBook</td>
			<td>MacBook Pro 13 inch</td>
			<td>$1,999.99</td>
			<td>
				<form>
					<select name="qty">
							<?php
							display_select_options();
							?>
					</select>
					<input name="id" type="hidden" value="10">
					<input value="" class="product" type="submit" name="sbt_btn">
				</form>
			</td>
		</tr>
	</table>
</div>
<style>
	.product {
		background-image: url("https://cdn3.iconfinder.com/data/icons/ecommerce-flat-style-2/512/e_-_Commerce_-_Flat_Style_2-05-128.png");
		background-size: 100% 100%;
		background-position: center;
		width: 29px;
		position: relative;
		top: 9px;
	}
	
	.shopping_cart {
		width: 40px;
		height: 40px;
		position: absolute;
		right: 20px;
		top: 20px;
		z-index: 100;
		background-image: url("https://i.pinimg.com/originals/5d/26/a1/5d26a173f443cbd190e34481438d474b.png");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		line-height: 38px;
		color: red;
		font-weight: bolder;
		border: none !important;
	}
	
	.sh_add_btn {
		width: 30px;
	}
	
	tr:hover {
		background-color: #b3e096 !important;
		cursor: pointer;
	}
	
	th {
		background-color: #033b6e;
		color: whitesmoke;
	}
	
	tr:nth-child(even) {
		background-color: lightgrey;
	}
	
	.product_icon {
		width: 70px;
	}
	
	h4 {
		color: lightgreen;
	}
	
	table {
		background-color: whitesmoke;
	}
	
	.container-fluid {
		text-align: center;
	}
	
	body {
		background-color: #392222;
	}
</style>
</body>
</html>
