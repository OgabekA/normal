<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Document</title>
	<style>
        body {
            width: 100%;
            height: 700px;
            background-color: darkgray;
        }

        .my_from {
            width: 100%;
            border-top: 5px solid #e1c089;
            border-bottom: 5px solid #daba89;
            height: auto;
            text-align: center;
            background-color: antiquewhite;
        }

        .box {
            width: 80%;
            height: 100%;
            margin: auto;
            text-align: center !important;
        }

        .my_table {
            width: 100%;
            border-top: 5px solid #e1c089;
            border-bottom: 5px solid #daba89;
            height: auto;
            text-align: center;
            background-color: antiquewhite;
        }

        .box table {
            width: 60%;
            height: auto;
            margin: auto;
        }

        .box table td {
            text-align: left;
        }

        .box table tr {
            text-align: right;
        }

        .button {
            text-align: center !important;
        }
	</style>
</head>
<body>
<?php
$rows = $_GET['rows'] ?? 5;
$cols = $_GET['cols'] ?? 5;
$color = $_GET['color'] ?? '#fff';
?>
<div class="container-fluid">
	<div class="my_from">
		<div class="box">
			<form>
				<table class="table table-bordered">
					<tr>
						<th><label for="exampleInputPassword1">Rows</label></th>
						<td><input min="0" max="100" type="number" value="<? echo $rows; ?>" name="rows" required="required"></td>
					</tr>
					<tr>
						<th><label for="exampleInputEmail1">Cols</label></th>
						<td><input min="0" max="100" type="number" value="<? echo $cols; ?>" name="cols" required="required"></td>
					</tr>
					<tr>
						<th><label for="exampleInputPassword1">is Even</label></th>
						<td><input type="checkbox"></td>
					</tr>
					<tr>
						<th><label for="exampleInputPassword1">Color</label></th>
						<td><input type="color" name="color" value="<?php echo $color; ?>"></td>
					</tr>
					<tr>
						<td class="button" colspan="2">
							<button type="submit" class="btn btn-primary">GENERATE</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<hr>
	<div class="my_table">
		<table class="table table-bordered">
				<?php
				$number = 0;
				for ($row = 0; $row < $rows; $row ++) {
						echo "<tr>";
						for ($col = 0; $col < $cols; $col ++) {
								$number ++;
								if ($number % 2 === 0) {
										echo "<td style='background-color:$color'>$number</td>";
								} else {
										echo "<td>$number</td>";
								}
						}
						echo "</tr>";
				}
				?>
		</table>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>
</body>
</html>