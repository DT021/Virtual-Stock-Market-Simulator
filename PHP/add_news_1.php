<!DOCTYPE html>
<html>
<head><title>Add news</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#bord {
    border: 1px solid;
    padding: 15px;
    }
	#bord:hover {
	box-shadow: 5px 10px 18px #888888;
}
/*FOR CHECKBOXES*/
/* The container */
.container-fluid {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container-fluid input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.container-fluid .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container-fluid:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container-fluid input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.container-fluid .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container-fluid input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container-fluid .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
</head>
<body>
<!--Check-box-->
  <div class="box" id="bord">
  <h1>Which domain companies will be affected by the news</h1>
  <form action="add_news_2.php" method="post">
  <label class="container-fluid">Consumer goods
    <input type="checkbox" checked="checked" name="domain[]" id="domain1" value="domain1">
    <span class="checkmark"></span>
  </label>
  <label class="container-fluid">Services
    <input type="checkbox" name="domain[]" id="domain2"value="domain2">
    <span class="checkmark"></span>
  </label>
  <label class="container-fluid">Technology
    <input type="checkbox" name="domain[]" id="domain3"value="domain3">
    <span class="checkmark"></span>
  </label>
  <label class="container-fluid">Finance
    <input type="checkbox" name="domain[]" id="domain4"value="domain4">
    <span class="checkmark"></span>
  </label>
  <label class="container-fluid">Industrial goods
    <input type="checkbox" name="domain[]" id="domain5"value="domain5">
    <span class="checkmark"></span>
  </label>
  <label class="container-fluid">Utilities
    <input type="checkbox" name="domain[]" id="domain6"value="domain6">
    <span class="checkmark"></span>
  </label>
  <label class="container-fluid">Healthcare
    <input type="checkbox" name="domain[]" id="domain7" value="domain7">
    <span class="checkmark"></span>
  </label>
  <input type="submit" value="Submit" name="login_btn" class="btn btn-success">
 </form>
</div>
 </body>
</html>
<?php
//$con=mysqli_connect('localhost','root','')or die("cannot connect to server");

//$sel=mysqli_select_db('stock market',$con)or die("cannot connect to database");
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
$radioVal = $_POST["radio"];

if($radioVal == "fact1")
{
	echo('<script>document.getElementById("domain6").disabled = true</script>');
	echo('<script>document.getElementById("domain7").disabled = true</script>');
}
else if ($radioVal == "fact2")
{
    echo('<script>document.getElementById("domain3").disabled = true</script>');
	echo('<script>document.getElementById("domain4").disabled = true</script>');
	echo('<script>document.getElementById("domain5").disabled = true</script>');
}
else if ($radioVal == "fact3")
{
    
}
else if ($radioVal == "fact4")
{
    
}
else
{
    echo('<script>document.getElementById("domain2").disabled = true</script>');
	echo('<script>document.getElementById("domain3").disabled = true</script>');
	echo('<script>document.getElementById("domain6").disabled = true</script>');
	echo('<script>document.getElementById("domain7").disabled = true</script>');
}
?>