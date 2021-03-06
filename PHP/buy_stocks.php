 <?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buy stocks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.block {
    border: 1px solid grey;
    text-align: center;
    vertical-align: middle;
}
.circle {
    background: grey;
    border-radius: 200px;
    color: black;
    height: 200px;
    font-weight: bold;
    width: 200px;
    display: table;
    margin: 20px auto;
}
.circle p {
    vertical-align: middle;
    display: table-cell;
}
.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color:white;
    margin: 6px 0;
    transition: 0.4s;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
    transform: rotate(-45deg) translate(-9px, 6px) ;
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
    transform: rotate(45deg) translate(-8px, -8px) ;
}
.vertical-menu {
    width: 500px;
}
.rate {
	width:200px;
}
.rate a {
	background-color:black;
    color:white;
    display: block;
    padding: 12px;
    text-decoration: none;
}
.rate a:hover {
	background-color: #ccc;
}

.vertical-menu a {
    background-color:black;
    color:white;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}

.container {
    width: 30em;
    height: 25em;
    margin: 1em auto;
    overflow: hidden;
    background: white;
    position: relative;
    box-sizing: border-box;
}

.marquee {
    top: 6em;
    position: relative;
    box-sizing: border-box;
    animation: marquee 5s linear infinite;
}

.marquee:hover {
    animation-play-state: paused;
}

/* Make it move! */
@keyframes marquee {
    0%   { top:   8em }
    100% { top: -11em }
}

/* Make it look pretty */
.microsoft .marquee {
	margin: 0;
    padding: 0 1em;
    line-height: 1.5em;
    font: 1em 'Segoe UI', Tahoma, Helvetica, Sans-Serif;
}

.microsoft:before, .microsoft::before,
.microsoft:after,  .microsoft::after {
    left: 0;
    z-index: 1;
    content: '';
    position: absolute;
    pointer-events: none;
    width: 100%; height: 2em;
    background-image: linear-gradient(top, #FFF, rgba(255,255,255,0));
}

.microsoft:after, .microsoft::after {
    bottom: 0;
    transform: rotate(180deg);
}

.microsoft:before, .microsoft::before {
    top: 0;
}

/* Style the links */
.vanity {
    color: #333;
    text-align: center;
    font: .75em 'Segoe UI', Tahoma, Helvetica, Sans-Serif;
}

.vanity a, .microsoft a {
    color: #1570A6;
    transition: color .5s;
    text-decoration: none;
}

.vanity a:hover, .microsoft a:hover {
    color: #F65314;
}

<!-- Style toggle button -->
.toggle {
	display: block;
    margin: 2em auto;
}

.green {
	color:green;
}

.red {
	color:red;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-menu a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-menu {
  display: block;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 35px;
    right: 15px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#bord {
    border: 1px solid;
    padding: 10px;
    }
	#bord:hover {
	box-shadow: 5px 10px 18px #888888;
}
//for table
table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.btn {
  background-color: #f4511e;
  border: none;
  color:black;
  padding: 16px 26px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
}
</style>
</head>

<body>
<div id="mySidenav" class="sidenav">
	<br><br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <center><img src="user.png" width="100" height="100"></center>
  
  <a href="chart.php">Your account</a>
  <!--a href="#">Services</a-->
  <a href="pref.php">Preference</a>
  <a href="logout.php">Logout</a>
</div>
<div id="main">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<!--<a href="#"><img src="logo.jpg" width="100" height="60"></a> -->
			<a class="navbar-brand" href="#">Stock Market</a>
		</div>
		<ul class="nav navbar-nav">
			<!--<li>
				<a href="#demo1" data-toggle="collapse" onclick="myFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</a>
			</li>-->
			<li class="active"><a href="index2.php">Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Finance
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="jpm.php">JP Morgan</a></li>
					<li><a href="ms.php">Morgan Stanley</a></li>
					<li><a href="aig.php">American International Group Inc.</a></li>
					<li><a href="syf.php">Synchrony Financial</a></li>
					<li><a href="bac.php">Bank Of America Corp.</a></li>
					<li><a href="key.php">KeyCorp</a></li>
					<li><a href="gs.php">Goldman Sachs Group Inc.</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Consumer Goods
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="apple.php">Apple Inc.</a></li>
					<li><a href="tsla.php">Tesla</a></li>
					<li><a href="whr.php">Whirlpool Corporation</a></li>
					<li><a href="fit.php">Fitbit Inc.</a></li>
					<li><a href="zoes.php">Zoe's Kitchen Inc.</a></li>
					<li><a href="bluestar.php">Blue Star Ltd.</a></li>
					<li><a href="hog.php">Harley-Davidson Inc.</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Healthcare
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="jnj.php">Johnson & Johnson</a></li>
					<li><a href="#">Pfizer Inc.</a></li>
					<li><a href="#">Align Technology, Inc.</a></li>
					<li><a href="#">AbbVie Inc</a></li>
					<li><a href="#">Celgene Corporation</a></li>
					<li><a href="#">Apollo Hospitals Enterprise Limited</a></li>
					<li><a href="#">Fortis Healthcare Limited</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Industrial Goods
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">The Boeing Company</a></li>
					<li><a href="#">Rockwell Automation</a></li>
					<li><a href="#">United Technologies Corporation</a></li>
					<li><a href="#">Snap-on Incorporated</a></li>
					<li><a href="#">Cummins India Ltd</a></li>
					<li><a href="#">Crompton Greaves Consumer Electricals Ltd</a></li>
					<li><a href="#">Voltas Limited</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="Netflix Inc.php">Netflix, Inc.</a></li>
					<li><a href="#">FedEx</a></li>
					<li><a href="#">Amazon.com, Inc</a></li>
					<li><a href="#">Asian Paints Ltd</a></li>
					<li><a href="#">ICICI BANK LTD</a></li>
					<li><a href="#">Vakrangee Ltd.</a></li>
					<li><a href="#">State Bank Of India</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Technology
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Alphabet Inc</a></li>
					<li><a href="#">Intel Corporation</a></li>
					<li><a href="#">Microsoft Corporation</a></li>
					<li><a href="#">Facebook, Inc. Common Stock</a></li>
					<li><a href="#">NVIDIA Corporation</a></li>
					<li><a href="#">Autodesk, Inc.</a></li>
					<li><a href="#">Oracle Corporation</a></li>
					<li><a href="#">Godadday Inc</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Utilities
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Duke Energy Corp.</a></li>
					<li><a href="#">Liberty Oilfield Services Inc</a></li>
					<li><a href="#">Oil & Natural Gas Corporation</a></li>
					<li><a href="#">AES Corp</a></li>
					<li><a href="#">NTPC Limited</a></li>
					<li><a href="#">Reliance Power Ltd</a></li>
					<li><a href="#">NextEra Energy Inc.</a></li>
				</ul>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<!--	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="caret"></span> Hello,!</a>
		<ul class="dropdown-menu">
          <li><a href="#">PORTFOLIO </a></li>
		  <li><a href="#">ACCOUNT </a></li>
		  <li><a href="#">SETTINGS </a></li>
		  <li><a href="index.html">LOGOUT</a></li>
		</ul>	
	  </li>-->
			<li><span style="font-size:30px;cursor:pointer" onclick="openNav()"> 
			<?php
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		echo '<span style="color:grey;"> ' . $_SESSION['username'] . '!';
	} else {
		echo "Please log in first to see this page.";
		header("location:index.html");
	}
	?>
			<span class="glyphicon glyphicon-user" style="color:white"></span>
	</span>
		</li>
		</ul>
	</div>
	</nav>
	<br><br><br><br>
	<div class="container-fluid">
		<?php
			$fetch=mysql_query("select * from company limit 55");
			if(mysql_num_rows($fetch))
          {
		?>
		<marquee onmouseover="stop();"  onmouseout="start();">
		<?php 
                while($row=mysql_fetch_array($fetch))
                 {
                 $id=$row['comp_id'];
                 $feed=$row['tickr'];
				 $prices=$row['price'];
				 $pol=$row['polarity'];
               ?>
                 <?php 
				 $eq="=";
				 echo $feed,$eq,$prices;  ?>
				 <?php 
				 if ($pol==0) { ?>
				 <span class="glyphicon glyphicon-triangle-bottom red"></span>&nbsp &nbsp &nbsp &nbsp
				 <?php }  ?>
				 <?php 
				 if ($pol==1) { ?>
				 <span class="glyphicon glyphicon-triangle-top green"></span>&nbsp &nbsp &nbsp &nbsp
                 <?php }  ?>
				 <?php }  ?>
                 <?php }  ?>
		</marquee>
		<div class="col-md-12">
				<br><br>
				<div class="col-md-4" id="bord">
					<center><h1>News</h1></center>
					<marquee direction = "up" scrollamount="5" onmouseover="stop();"  onmouseout="start();">
						<?php
						$file = fopen("news.txt","r");
						while(! feof($file))
						{
						echo fgets($file). "<br> <br>";
						}
						fclose($file);
						?>
					</marquee>
				</div>
				<div class="col-md-8" id="bord">
					<?php 
						if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
									$name= $_SESSION['username'];
								}
						$result_c3=mysql_query("SELECT balance 
									FROM users 
									WHERE name='".$name."'");
						while ($row_c3 = mysql_fetch_assoc($result_c3))
						$c3= $row_c3['balance'];
					?>
					<h3>Balance:- <?php echo $c3 ?></h3>
					<?php 
						$result=mysql_query("SELECT pref
								FROM login
								WHERE username='".$name."'");
						while ($row=mysql_fetch_assoc($result))
							$pref=$row['pref'];
					?>
					<table class="data-table">
						<caption class="title"><h2>Stocks:</h2></caption>
						<thead>
							<tr>
								<th>Stock Id</th>
								<th>Stock name</th>
								<th>Stock Tickr</th>
								<th>Domain</th>
								<th>Current cost of one share</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql1 = mysql_query("SELECT *
													FROM company
													WHERE domain='".$pref."'");
								//$no=1;		
								while ($row = mysql_fetch_assoc($sql1))
								{
									echo '<tr>
											<td>'.$row['comp_id'].'</td>
											<td>'.$row['comp_name'].'</td>
											<td>'.$row['tickr'].'</td>
											<td>'.$row['domain']. '</td>
											<td>'.$row['price']. '</td>
											<td> <form action=buy.php>
												<input name=id type=hidden value='.$row['comp_id'].'>					
												<button class="btn">BUY</button>
												</form> </td>
									</tr>';
									//$no++;
								}
								$sql = mysql_query("SELECT *
													FROM company
													WHERE NOT domain='".$pref."'");
								//$no=1;		
								while ($row = mysql_fetch_assoc($sql))
								{
									echo '<tr>
											<td>'.$row['comp_id'].'</td>
											<td>'.$row['comp_name'].'</td>
											<td>'.$row['tickr'].'</td>
											<td>'.$row['domain']. '</td>
											<td>'.$row['price']. '</td>
											<td> <form action=buy.php>
												<input name=id type=hidden value='.$row['comp_id'].'>					
												<button class="btn">BUY</button>
												</form> </td>
									</tr>';
									//$no++;
								}
							?>	
						</tbody>
				</div>
		</div>		
	<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
</body>