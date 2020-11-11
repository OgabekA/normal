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
	<style>
        body {
			width:100%;
			height:700px;
		}
		.header{
			width:100%;
			height:90px;
			text-align:center;
			background-color:darkred;
		}
		.head_box{
			width:70%;
			height:auto;
			margin:auto;
		}
		.left_div{
			width:49%;
			height:400px;
			float:left;
			border-collapse:collapse;
			border:5px solid black;
			background-color:darkgray;
		}
        .right_div{
            width:49%;
            height:400px;
            float:right;
            border-collapse:collapse;
            border:5px solid black;
            background-color: #d4c7c7;
        }
		.container-fluid{
			width:100%;
			height:60%;
			border-collapse: collapse !important;
		}
		.footer{
			width:100%;
			height:auto;
			text-align:center;
		}
	</style>
</head>
<body>
<header class="header">
<div class="head_box">
	<h3>My Dynamic Content</h3>
</div>
</header>
<div class="container-fluid">
<div class="left_div"></div>
<div class="right_div"></div>
</div>
<footer class="footer">
	<form action="">
		<input type="text" value="" name="" placeholder="Your Keyword"><br>
		<button class="btn btn-info">CREATE</button>
		<button class="btn btn-success">COPY</button>
		<button class="btn btn-dark">SAVE</button>
		<button class="btn btn-danger">BACKEND</button>
		<button class="btn btn-success">LOOKUP</button>
	</form>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>
</body>
</html>