<?php
session_start();
$errors=array();
//$con=mysqli_connect('localhost','root','')or die("cannot connect to server");

//$sel=mysqli_select_db('stock market',$con)or die("cannot connect to database");
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database

//reading check-box
$domains="No languages selected";
if(isset($_POST['domain'])){
	$domains=implode(' ',$_POST['domain']);
}
//echo $domains;
//list($dom1,$dom2,$dom3,$dom4,$dom5,$dom6,$dom7)=split('[ ]',$domains);
//echo $dom1,$dom2,$dom3,$dom4,$dom5,$dom6,$dom7;
$myfile = fopen("check_boxes.txt", "wr") or die("Unable to open file!");
$txt=$domains;
fwrite($myfile,$txt);
fclose($myfile);
//$delimiter =",";           
//$file_handle = fopen("check_boxes.txt" , "r");
//while(!feof($file_handle)) {
	//$line=fgets($file_handle);
	//$dat_txt = str_getcsv($line , $delimiter);
	//echo $line;
	//print_r($dat_txt);
//}
//fclose($file_handle);

$filecontents = file_get_contents('check_boxes.txt');

$words = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
//echo count($words);
//fclose($file_handle);
//$out=fopen("output.txt","r");
$out = file_get_contents('output.txt');
if($out=="pos")
	$val=+1;
else $val=-1;
//echo $out;
//echo $val;
$n = count($words);
$m = 7;

$domains_list=array("domain1","domain2","domain3","domain4","domain5","domain6","domain7");

$conne= mysql_connect('localhost','root','');
$selected = mysql_select_db("stock market",$con);

$sql = "SELECT COUNT(domain) FROM company";
$verdict = mysql_query($sql);

echo $verdict;

/*
for($i=0;$i<$n;$i++)
	for($j=0;$j<$m;$i++) {
		if($words[$i]==$domains_list[$j]) {
			$val1=mt_rand(0,1)*$val;
			
			
			
			$sql = "SELECT COUNT(domain) FROM company";
			$result = $con->query($sql);
			
			echo $result;
		}
	}

/*
for($i=0;$i<$n;$i++)
{
	if ($words[$i]=="domain1")
	{
		$val1=mt_rand(0,1)*$val;
		$sql = "SELECT COUNT(domain) FROM company";
		$result = $con->query($sql);
		echo $result;
	}
	
	if ($words[$i]=="domain2")
	{
		
	}
	if ($words[$i]=="domain3")
	{
		
	}
	if ($words[$i]=="domain4")
	{
		
	
	if ($words[$i]=="domain5")
	{
		
	}
	if ($words[$i]=="domain6")
	{
		
	}
	if ($words[$i]=="domain7")
	{
		
	}*/
//}
               
/*$name = $_POST['domain'];

    echo "You chose the following domain(s): <br>";
    echo "<ul>";
    foreach ($name as $domain){
        echo $domain. "<br>";
    }
    echo "</ul>";
/*if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
	}
}*/?>