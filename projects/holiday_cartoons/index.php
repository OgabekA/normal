<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Holiday-Cartoon</title>
	<link rel="icon" href="img/snowman.png">
	<link rel="stylesheet" href="holiday.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="holiday.js"></script>

</head>
<body>
<?php
include_once "../database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT * FROM cartoon;";
$result = $db -> sql ($sql);

$variables = $_GET;
$dear  = $variables['essay']??null;
$text  = $variables['texts']??null;

?>


<div class="container-fluid">
	<header class="fixed-top"></header>
	<div class="body">
		<div class="box">
			<div class="card">
				<form>
					<div class="form-group">
						<h5><label>Dear:</label></h5>
						<input type="text" name="essay" value="<? echo $dear?>" placeholder="Dear: Someone">
					</div>
					<div class="form-group">
						<h5><label for="exampleFormControlTextarea1">Congrats</label></h5>
						<textarea name="texts" rows="3"></textarea>
					</div>
					<div>
						<button type="submit" class="btn btn-success">Send</button>
					</div>
				</form>
			</div>
		</div>
		<div class="box">
			<div class="card">
					<?php
					foreach ($result as $item) {
							?>
						<div class="box_1">
								<?php echo "<img data-url=\"{$item['img']}\" class='image' src='img/{$item['img']}' alt=''>" ?>
						</div>
							<?php
					}
					?>
			</div>
		</div>
		<div class="footer">
			<div class="image_div">
				<div class="text_div">
					<h5 class="card-title"><? echo $dear?></h5>
					<p class="card-text">
							<? echo $text?>
					</p>
				</div>
			<img class="footer_img" id="image" src="" alt="">
			</div><br>
			<div>
				<form>
					<button type="button" class="btn btn-info">Review</button>
					<button type="submit" class="btn btn-success">Send</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>