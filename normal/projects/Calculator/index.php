<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My-Calculator</title>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="https://icons.iconarchive.com/icons/paomedia/small-n-flat/512/calculator-icon.png">
	<script type="text/javascript" src="/bootstrap/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		
		$(function () {
			let sign = '';
			let number = '';
			let number1 = '';
			let number2 = '';
			let formula = '';
			$(".number").click(function () {
				number = $(this).text();
				if (sign !== '') {
					number = number1 += $(this).text();
				} else {
					number = number2 += $(this).text();
				}
				$(".screen").html(number);
				display_result(number1 + sign + number2);
				formula = eval(number1 + sign + number2);
			});
			$(".sign").click(function () {
				sign = $(this).text();
				if (sign == '×') {
					sign = '*';
				}
				if (sign == '÷') {
					sign = '/';
				}
				if (sign == '+') {
					sign = '+';
				}
				if (sign == '-') {
					sign = '-';
				}
				if (sign == 'AC') {
					AC_buttons();
				}
				if (sign == '=') {
					display_result();
				}
			});
		});
		
		function AC_buttons(reset = false) {
			sign = '';
			number = '';
			number1 = '';
			number2 = '';
			if (!reset) {
				$(".screen").html(0);
			}
		}
		
		function display_result(num) {
			if (formula === '') {
				return false;
			}
		}
	</script>
	<style type="text/css">
        html, body {
            width: 100%;
            height: 500px;
            background: linear-gradient(to right, #037cff, #00ff44);
        }

        .container-fluid {
            width: 300px;
            height: 450px;
            padding: unset;
            border-radius: 20px;
            text-align: center;
            margin: 100px auto;
            border: 15px solid darkgray;
            background-color: white;
        }

        .origin {
            width: 100%;
            height: 20%;
            background-color: darkgray;
        }

        .display {
            width: 100%;
            height: 100%;
            text-align: right;
            border-radius: 10px;
            border-bottom: 10px solid #6b5e4a;
            background-color: #6b5e4a;
        }

        .back {
            height: 80%;
            width: 100%;
            background-color: darkgray;
        }

        .box {
            height: 100%;
            width: 100%;
            border-radius: 10px;
            background-color: black;
        }

        table {
            width: 100%;
            height: 100%;
            border: none !important;
            border-collapse: collapse;
        !important;
        }

        button {
            width: 100%;
            height: 100%;
            border: none;
            font-size: 160%;
            font-weight: bold;
            padding: 5px 5px;
            border-collapse: collapse;
            border-radius: 45% !important;
        }

        button:hover {
            border: unset !important;
            background-color: #a1a1a1;
        }

        td {
            width: 70px;
            border: none !important;
            padding: 5px 5px;
            border-radius: 45% !important;
            border-collapse: collapse;
        }

        td:hover {
            border: unset !important;
        }

        h3 {
            top: 50px;
            right: 5px;
            position: relative;
        }
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="origin">
		<div class="display">
			<h3 id="screen" class="screen">0</h3>
		</div>
	</div>
	<div class="back">
		<div class="box">
			<table class="table-bordered">
				<tr>
					<td>
						<button id="sign" class="sign btn btn-dark">AC</button>
					</td>
					<td>
						<button id="sign" class="sign btn btn-dark">( )</button>
					</td>
					<td>
						<button id="sign" class="sign btn btn-dark">%</button>
					</td>
					<td>
						<button id="sign" class="sign btn btn-warning">&divide;</button>
					</td>
				</tr>
				<tr>
					<td>
						<button class="number">7</button>
					</td>
					<td>
						<button class="number">8</button>
					</td>
					<td>
						<button class="number">9</button>
					</td>
					<td>
						<button id="sign" class="sign btn btn-primary">&times;</button>
					</td>
				</tr>
				<tr>
					<td>
						<button class="number">4</button>
					</td>
					<td>
						<button class="number">5</button>
					</td>
					<td>
						<button class="number">6</button>
					</td>
					<td>
						<button id="sign" class="sign btn btn-danger">&minus;</button>
					</td>
				</tr>
				<tr>
					<td>
						<button class="number">1</button>
					</td>
					<td>
						<button class="number">2</button>
					</td>
					<td>
						<button class="number">3</button>
					</td>
					<td>
						<button id="sign" class="sign btn btn-info">&plus;</button>
					</td>
				</tr>
				<tr>
					<td>
						<button id="sign">+/-</button>
					</td>
					<td>
						<button class="number">0</button>
					</td>
					<td>
						<button id="sign">.</button>
					</td>
					<td>
						<button id="sign" class="sign btn btn-success">&equals;</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>