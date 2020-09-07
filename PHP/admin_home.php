 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<!--<a href="#"><img src="logo.jpg" width="100" height="60"></a> -->
			<a class="navbar-brand" href="#">Stock Market</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="caret"></span> Hello,!</a>
		<!--ul class="dropdown-menu">
          <li><a href="#">PORTFOLIO </a></li>
		  <li><a href="#">ACCOUNT </a></li>
		  <li><a href="#">SETTINGS </a></li>
		  <li><a href="admin.html">LOGOUT</a></li>
		</ul-->	
	  </li>
		</ul>
	</div>
	</nav>
	<br><br><br><br><br>
	<div class="col-md-2">
	</div>
	<div class="col-md-4">
	<h3>News</h3><br>
	<marquee direction = "up" scrollamount="8" height="500" onmouseover="stop();"  onmouseout="start();">
		<h4> Technology </h4>
		<?php
						$file = fopen("technology news.txt","r");
						while(! feof($file))
						{
						echo fgets($file). "<br> <br>";
						}
						fclose($file);
						?>
		<h4> Utilities </h4>
		<?php
						$file1 = fopen("utilities news.txt","r");
						while(! feof($file1))
						{
						echo fgets($file1). "<br> <br>";
						}
						fclose($file1);
						?>
		<h4> Services </h4>
		<?php
						$file = fopen("services news.txt","r");
						while(! feof($file))
						{
						echo fgets($file). "<br> <br>";
						}
						fclose($file);
						?>
		<h4> Industrial Goods </h4>
		<?php
						$file = fopen("industrial goods news.txt","r");
						while(! feof($file))
						{
						echo fgets($file). "<br> <br>";
						}
						fclose($file);
						?>
		<h4> Healthcare </h4>
		<?php
						$file = fopen("healthcare news.txt","r");
						while(! feof($file))
						{
						echo fgets($file). "<br> <br>";
						}
						fclose($file);
						?>
		<h4> Finance </h4>
		<?php
						$file = fopen("finance news.txt","r");
						while(! feof($file))
						{
						echo fgets($file). "<br> <br>";
						}
						fclose($file);
						?>
		<h4> Consumer Goods </h4>
		<?php
						$file = fopen("consumer goods news.txt","r");
						while(! feof($file))
						{
						echo fgets($file). "<br> <br>";
						}
						fclose($file);
						?>
	</marquee>
	</div>
	<div class="col-md-6">
		<h3>Factors that can be changed:</h3><br>
		<i class="fa fa-circle"></i>&nbsp &nbsp Change in dollar prices &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				<a href="#factor1" data-toggle="collapse"> <span class="glyphicon glyphicon-option-vertical"></span></a><br><br>
				<div id="factor1" class="collapse">
					<form role="form" method="post" action="dollar.php">
						<input type="text" class="form-control" id="u" name="u" placeholder="Enter the percentage by which you want to change the prices" required>
						<input type="submit" name="increase_btn" class="btn btn-success btn-block-lg"
							 value="Increase rate"onClick="myFunction(this)"> 
						<input type="submit" name="decrease_btn" class="btn btn-success btn-block-lg"
							value="Decrease rate" onClick="myFunction(this)">
						</a>
					</form>
				</div>
		<!--i class="fa fa-circle"></i>&nbsp &nbsp Company news and performance &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				<a href="#factor2" data-toggle="collapse"> <span class="glyphicon glyphicon-option-vertical"></span></a><br><br>
		<i class="fa fa-circle"></i>&nbsp &nbsp Natural Calamity &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				<a href="#factor3" data-toggle="collapse"> <span class="glyphicon glyphicon-option-vertical"></span></a><br><br>
		<i class="fa fa-circle"></i>&nbsp &nbsp Government policies &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				<a href="#factor4" data-toggle="collapse"> <span class="glyphicon glyphicon-option-vertical"></span></a><br><br>
		<i class="fa fa-circle"></i>&nbsp &nbsp Sudden shift &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<a href="#factor5" data-toggle="collapse"> <span class="glyphicon glyphicon-option-vertical"></span></a><br-->
		<br><br><br><br><br><br>
		<a href="hstory.php" class="btn btn-success btn-btn-block-lg">Add new company &nbsp <span class="glyphicon glyphicon-upload"></span> </a>		
		<a href="delete.html" class="btn btn-success btn-btn-block-lg">Delete company &nbsp <span class="glyphicon glyphicon-download"></span> </a><br><br>
		<a href="#factor2" class="btn btn-success btn-btn-block-lg" data-toggle="collapse">Add news &nbsp <span class="glyphicon glyphicon-download"></span> </a>
		<a href="#factor3" class="btn btn-success btn-btn-block-lg" data-toggle="collapse">Add user &nbsp <span class="glyphicon glyphicon-user"></span> </a>
		<div id="factor2" class="collapse">
			<form role="form" method="post" action="py.php">
				<div class="form-group">
					<label for="u"><span class="glyphicon glyphicon-user"></span> Enter news</label>
					<input type="text" class="form-control" id="news" name="news" placeholder="News" required>
				</div>
			</a>
			</form>
		</div>
		<div id="factor3" class="collapse">
			<form role="form" method="post" action="add_user.php">
				<div class="form-group">
					<br><label for="u"><span class="glyphicon glyphicon-user"></span> Enter username</label>
					<input type="text" class="form-control" id="uname" name="uname" placeholder="Username" required><br>
					<label for="no"><span class="glyphicon glyphicon-plus-sign"></span> Enter no. of companies</label>
					<input type="text" class="form-control" id="no" name="no" placeholder="No. of companies" required><br>
					<input type="submit" class="btn btn-warning" value="Submit" name="Submit">
				</div>
			</a>
			</form>
		</div>
		</div>
	<script>
		function myFunction() {
				alert("Value Updated");
			}
	</script>
</body>
</html>