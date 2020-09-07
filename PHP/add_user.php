 <?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
session_start();
$txt = $_POST['uname'];
$comp = $_POST['no'];
mysql_query("INSERT INTO login (username,password,eid,pref) VALUES ('".$txt."','admin123','admin@abc.com','Finance')");
mysql_query("INSERT INTO users (name,balance) VALUES ('".$txt."','10000')");
mysql_query("CREATE TABLE $txt
  (sid   INT      AUTO_INCREMENT     NOT NULL,
   no_of_shares  INT     NOT NULL,
   buy_cost  double     NOT NULL,
   comp_id  INT     NOT NULL,
   time  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
   sold   INT     NOT NULL,
   PRIMARY KEY (sid))");
$txt1=$txt.'buy';
mysql_query("CREATE TABLE $txt1
  (sid   INT      AUTO_INCREMENT     NOT NULL,
   no_of_shares  INT     NOT NULL,
   sell_cost  double     NOT NULL,
   comp_id  INT     NOT NULL,
   time  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (sid))");
for ($x = 0; $x < $comp; $x++) {
    $id=mt_rand(1,50);
	$nof=mt_rand(2,8);
	$result_c3=mysql_query("SELECT * 
							FROM company 
							WHERE comp_id='".$id."'");
	while ($row_c3 = mysql_fetch_assoc($result_c3))
	$price= $row_c3['price'];
	mysql_query("INSERT INTO ".$txt." (no_of_shares,buy_cost,comp_id,sold) VALUES ('".$nof."','".$price."','".$id."','1')");
	mysql_query("INSERT INTO ".$txt1." (no_of_shares,sell_cost,comp_id) VALUES ('".$nof."','".$price."','".$id."')");
} 			
header("location:admin_home.php");
?>