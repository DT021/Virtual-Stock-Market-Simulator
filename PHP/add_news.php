<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
/*connection with database*/
$selected = mysql_select_db("stock market",$con);

/*Running code for infinite time*/
ini_set('max_execution_time',1000);

/*Entering values in a file*/
//$myfile = fopen("input.txt", "wr") or die("Unable to open file!");
//$txt = $_POST['news']; 
//fwrite($myfile, $txt);
//fclose($myfile);


/*Running python code for domain */
/*exec('python C:\xampp\htdocs\domainpickle.py ');
$command=escapeshellcmd('Python C:\xampp\htdocs\BeProject\domainpickle.py');
shell_exec($command);*/

$domain = 'output_domain.txt';
$command = file_get_contents($domain);

echo $command;

/* Printing Output */
//echo "<h2>".$command."<h2>";


/* Running python code for sentiment */
/*exec('python C:\xampp\htdocs\defi.py ');
$command1=escapeshellcmd('Python C:\xampp\htdocs\BeProject\defi.py');
shell_exec($command1);

sleep(120);*/
$sentiment = 'output.txt';
$command1 = file_get_contents($sentiment);

$compare = strcmp($command1 , "pos");

if($compare > "-1")
{
		$pol=1;
}
else	$pol=-1; 

echo $pol;

/* Printing Output */
//echo "<h2>".$command1."<h2>";
//echo "<h2>".$pol."<h2>";

//$command="tech";
//$pol=1;

/*Changes in database*/
switch($command) {
	case "tech":
		{
			echo "The news belongs to Technology Domain";
			$result_t1=mysql_query("SELECT price FROM company WHERE tickr='GOOGL'");
			while ($row_t1 = mysql_fetch_assoc($result_t1))
				$t1= $row_t1['price'];
			echo "before value";
			$t1=$t1+($pol*($t1*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$t1' WHERE tickr='GOOGL'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GOOGL'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GOOGL'");
			}
			
			$result_t2=mysql_query("SELECT price FROM company WHERE tickr='INTC'");
			while ($row_t2 = mysql_fetch_assoc($result_t2))
				$t2= $row_t2['price'];
			$t2=$t2+($pol*($t2*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$t2' WHERE tickr='INTC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='INTC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='INTC'");
			}
			
			$result_t3=mysql_query("SELECT price FROM company WHERE tickr='MSFT'");
			while ($row_t3 = mysql_fetch_assoc($result_t3))
				$t3= $row_t3['price'];
			$t3=$t3+($pol*($t3*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$t3' WHERE tickr='MSFT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MSFT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MSFT'");
			}
			
			$result_t4=mysql_query("SELECT price FROM company WHERE tickr='FB'");
			while ($row_t4 = mysql_fetch_assoc($result_t4))
				$t4= $row_t4['price'];
			$t4=$t4+($pol*($t4*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$t4' WHERE tickr='FB'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FB'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FB'");
			}
			
			$result_t5=mysql_query("SELECT price FROM company WHERE tickr='NVDA'");
			while ($row_t5 = mysql_fetch_assoc($result_t5))
				$t5= $row_t5['price'];
			$t5=$t5+($pol*($t5*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$t5' WHERE tickr='NVDA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NVDA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NVDA'");
			}
			
			$result_t6=mysql_query("SELECT price FROM company WHERE tickr='ADSK'");
			while ($row_t6 = mysql_fetch_assoc($result_t6))
				$t6= $row_t6['price'];
			$t6=$t6+($pol*($t6*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$t6' WHERE tickr='ADSK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ADSK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ADSK'");
			}
			
			$result_t7=mysql_query("SELECT price FROM company WHERE tickr='ORCL'");
			while ($row_t7 = mysql_fetch_assoc($result_t7))
				$t7= $row_t7['price'];
			$t7=$t7+($pol*($t7*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$t7' WHERE tickr='ORCL'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ORCL'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ORCL'");
			}
			
			$result_t8=mysql_query("SELECT price FROM company WHERE tickr='GDDY'");
			while ($row_t8 = mysql_fetch_assoc($result_t8))
				$t8= $row_t8['price'];
			$t8=$t8+($pol*($t8*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$t8' WHERE tickr='GDDY'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GDDY'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GDDY'");
			}
		}
		break;
	case "fin":
		{
			echo "The news belongs to Finance Domain";
			$result_f1=mysql_query("SELECT price FROM company WHERE tickr='JPM'");
			while ($row_f1 = mysql_fetch_assoc($result_f1))
				$f1= $row_f1['price'];
			echo "";
			$f1=$f1+($pol*($f1*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$f1' WHERE tickr='JPM'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JPM'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JPM'");
			}
			
			$result_f2=mysql_query("SELECT price FROM company WHERE tickr='MS'");
			while ($row_f2 = mysql_fetch_assoc($result_f2))
				$f2= $row_f2['price'];
			$f2=$f2+($pol*($f2*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$f2' WHERE tickr='MS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MS'");
			}
			
			$result_f3=mysql_query("SELECT price FROM company WHERE tickr='AIG'");
			while ($row_f3 = mysql_fetch_assoc($result_f3))
				$f3= $row_f3['price'];
			$f3=$f3+($pol*($t3*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$f3' WHERE tickr='AIG'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AIG'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AIG'");
			}
			
			$result_f4=mysql_query("SELECT price FROM company WHERE tickr='SYF'");
			while ($row_f4 = mysql_fetch_assoc($result_f4))
				$f4= $row_f4['price'];
			$f4=$f4+($pol*($f4*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$f4' WHERE tickr='SYF'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SYF'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SYF'");
			}
			
			$result_f5=mysql_query("SELECT price FROM company WHERE tickr='BAC'");
			while ($row_f5 = mysql_fetch_assoc($result_f5))
				$f5= $row_f5['price'];
			$f5=$f5+($pol*($f5*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$f5' WHERE tickr='BAC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BAC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BAC'");
			}
			
			$result_f6=mysql_query("SELECT price FROM company WHERE tickr='KEY'");
			while ($row_f6 = mysql_fetch_assoc($result_f6))
				$f6= $row_f6['price'];
			$f6=$f6+($pol*($f6*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$f6' WHERE tickr='KEY'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='KEY'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='KEY'");
			}
			
			$result_f7=mysql_query("SELECT price FROM company WHERE tickr='GS'");
			while ($row_f7 = mysql_fetch_assoc($result_f7))
				$f7= $row_f7['price'];
			$f7=$f7+($pol*($f7*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$f7' WHERE tickr='GS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GS'");
			}
		}
		break;
	case "ig":
		{
			echo "The news belongs to Industrial Goods Domain";
			$result_i1=mysql_query("SELECT price FROM company WHERE tickr='BA'");
			while ($row_i1 = mysql_fetch_assoc($result_i1))
				$i1= $row_i1['price'];
			echo "";
			$i1=$i1+($pol*($i1*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$i1' WHERE tickr='BA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BA'");
			}
			
			$result_i2=mysql_query("SELECT price FROM company WHERE tickr='ROK'");
			while ($row_i2 = mysql_fetch_assoc($result_i2))
				$i2= $row_i2['price'];
			$i2=$i2+($pol*($i2*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$i2' WHERE tickr='ROK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ROK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ROK'");
			}
			
			$result_i3=mysql_query("SELECT price FROM company WHERE tickr='UTX'");
			while ($row_i3 = mysql_fetch_assoc($result_i3))
				$i3= $row_i3['price'];
			$i3=$i3+($pol*($i3*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$i3' WHERE tickr='UTX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='UTX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='UTX'");
			}
			
			$result_i4=mysql_query("SELECT price FROM company WHERE tickr='SNA'");
			while ($row_i4 = mysql_fetch_assoc($result_i4))
				$i4= $row_i4['price'];
			$i4=$i4+($pol*($i4*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$i4' WHERE tickr='SNA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SNA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SNA'");
			}
			
			$result_i5=mysql_query("SELECT price FROM company WHERE tickr='CUMMINSIND'");
			while ($row_i5 = mysql_fetch_assoc($result_i5))
				$i5= $row_i5['price'];
			$i5=$i5+($pol*($i5*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$i5' WHERE tickr='CUMMINSIND'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CUMMINSIND'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CUMMINSIND'");
			}
			
			$result_i6=mysql_query("SELECT price FROM company WHERE tickr='CROMPTON'");
			while ($row_i6 = mysql_fetch_assoc($result_i6))
				$i6= $row_i6['price'];
			$i6=$i6+($pol*($i6*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$i6' WHERE tickr='CROMPTON'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CROMPTON'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CROMPTON'");
			}
			
			$result_i7=mysql_query("SELECT price FROM company WHERE tickr='VOLTAS'");
			while ($row_i7 = mysql_fetch_assoc($result_i7))
				$i7= $row_i7['price'];
			$i7=$i7+($pol*($i7*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$i7' WHERE tickr='VOLTAS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VOLTAS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VOLTAS'");
			}
		}
		break;
	case "cg":
		{
			echo "The news belongs to Consumer Goods Domain";
			$result_c1=mysql_query("SELECT price FROM company WHERE tickr='APPL'");
			while ($row_c1 = mysql_fetch_assoc($result_c1))
				$c1= $row_c1['price'];
			echo "";
			$c1=$c1+($pol*($c1*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$c1' WHERE tickr='APPL'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APPL'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APPL'");
			}
			
			$result_c2=mysql_query("SELECT price FROM company WHERE tickr='TSLA'");
			while ($row_c2 = mysql_fetch_assoc($result_c2))
				$c2= $row_c2['price'];
			$c2=$c2+($pol*($c2*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$c2' WHERE tickr='TSLA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='TSLA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='TSLA'");
			}
			
			$result_c3=mysql_query("SELECT price FROM company WHERE tickr='WHR'");
			while ($row_c3 = mysql_fetch_assoc($result_c3))
				$c3= $row_c3['price'];
			$c3=$c3+($pol*($c3*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$c3' WHERE tickr='WHR'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='WHR'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='WHR'");
			}
			
			$result_c4=mysql_query("SELECT price FROM company WHERE tickr='FIT'");
			while ($row_c4 = mysql_fetch_assoc($result_c4))
				$c4= $row_c4['price'];
			$c4=$c4+($pol*($c4*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$c4' WHERE tickr='FIT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FIT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FIT'");
			}
			
			$result_c5=mysql_query("SELECT price FROM company WHERE tickr='ZOES'");
			while ($row_c5 = mysql_fetch_assoc($result_c5))
				$c5= $row_c5['price'];
			$c5=$c5+($pol*($c5*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$c5' WHERE tickr='ZOES'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ZOES'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ZOES'");
			}
			
			$result_c6=mysql_query("SELECT price FROM company WHERE tickr='BLUESTARCO'");
			while ($row_c6 = mysql_fetch_assoc($result_c6))
				$c6= $row_c6['price'];
			$c6=$c6+($pol*($c6*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$c6' WHERE tickr='BLUESTARCO'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BLUESTARCO'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BLUESTARCO'");
			}
			
			$result_c7=mysql_query("SELECT price FROM company WHERE tickr='HOG'");
			while ($row_c7 = mysql_fetch_assoc($result_c7))
				$c7= $row_c7['price'];
			$c7=$c7+($pol*($c7*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$c7' WHERE tickr='HOG'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='HOG'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='HOG'");
			}
		}
		break;
	case "utl":
		{
			echo "The news belongs to Utilities Domain";
			$result_u1=mysql_query("SELECT price FROM company WHERE tickr='DUK'");
			while ($row_u1 = mysql_fetch_assoc($result_u1))
				$u1= $row_u1['price'];
			echo "before value";
			echo $u1;
			echo "";
			//$dummy=$pol*($u1*mt_rand(10,80))/100;
			$u1=$u1+($pol*($u1*mt_rand(10,80))/100);
			//$u1=$u1+$dummy;
			echo "after value";
			echo $u1;
			mysql_query("UPDATE company SET price='$u1' WHERE tickr='DUK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='DUK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='DUK'");
			}
			
			$result_u2=mysql_query("SELECT price FROM company WHERE tickr='LBRT'");
			while ($row_u2 = mysql_fetch_assoc($result_u2))
				$u2= $row_u2['price'];
			$u2=$u2+($pol*($u2*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$u2' WHERE tickr='LBRT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='LBRT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='LBRT'");
			}
			
			$result_u3=mysql_query("SELECT price FROM company WHERE tickr='ONGC'");
			while ($row_u3 = mysql_fetch_assoc($result_u3))
				$u3= $row_u3['price'];
			$u3=$u3+($pol*($u3*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$u3' WHERE tickr='ONGC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ONGC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ONGC'");
			}
			
			$result_u4=mysql_query("SELECT price FROM company WHERE tickr='AES'");
			while ($row_u4 = mysql_fetch_assoc($result_u4))
				$u4= $row_u4['price'];
			$u4=$u4+($pol*($u4*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$u4' WHERE tickr='AES'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AES'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AES'");
			}
			
			$result_u5=mysql_query("SELECT price FROM company WHERE tickr='NTPC'");
			while ($row_u5 = mysql_fetch_assoc($result_u5))
				$u5= $row_u5['price'];
			$u5=$u5+($pol*($u5*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$u5' WHERE tickr='NTPC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NTPC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NTPC'");
			}
			
			$result_u6=mysql_query("SELECT price FROM company WHERE tickr='RPOWER'");
			while ($row_u6 = mysql_fetch_assoc($result_u6))
				$u6= $row_u6['price'];
			$u6=$u6+($pol*($u6*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$u6' WHERE tickr='RPOWER'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='RPOWER'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='RPOWER'");
			}
			
			$result_u7=mysql_query("SELECT price FROM company WHERE tickr='NEE'");
			while ($row_u7 = mysql_fetch_assoc($result_u7))
				$u7= $row_u7['price'];
			$u7=$u7+($pol*($u7*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$u7' WHERE tickr='NEE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NEE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NEE'");
			}
		}
		break;
	case "ser":
		{
			echo "The news belongs to Services Domain";
			$result_s1=mysql_query("SELECT price FROM company WHERE tickr='NFLX'");
			while ($row_s1 = mysql_fetch_assoc($result_s1))
				$s1= $row_s1['price'];
			echo "";
			$s1=$s1+($pol*($s1*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$s1' WHERE tickr='NFLX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NFLX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NFLX'");
			}
			
			$result_s2=mysql_query("SELECT price FROM company WHERE tickr='FDX'");
			while ($row_s2 = mysql_fetch_assoc($result_s2))
				$s2= $row_s2['price'];
			$s2=$s2+($pol*($s2*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$s2' WHERE tickr='FDX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FDX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FDX'");
			}
			
			$result_s3=mysql_query("SELECT price FROM company WHERE tickr='AMZN'");
			while ($row_s3 = mysql_fetch_assoc($result_s3))
				$s3= $row_s3['price'];
			$s3=$s3+($pol*($s3*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$s3' WHERE tickr='AMZN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AMZN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AMZN'");
			}
			
			$result_s4=mysql_query("SELECT price FROM company WHERE tickr='ASIANPAINT'");
			while ($row_s4 = mysql_fetch_assoc($result_s4))
				$s4= $row_s4['price'];
			$s4=$s4+($pol*($s4*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$s4' WHERE tickr='ASIANPAINT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ASIANPAINT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ASIANPAINT'");
			}
			
			$result_s5=mysql_query("SELECT price FROM company WHERE tickr='ICICIBANK'");
			while ($row_s5 = mysql_fetch_assoc($result_s5))
				$s5= $row_s5['price'];
			$s5=$s5+($pol*($s5*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$s5' WHERE tickr='ICICIBANK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ICICIBANK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ICICIBANK'");
			}
			
			$result_s6=mysql_query("SELECT price FROM company WHERE tickr='VAKRANGEE'");
			while ($row_s6 = mysql_fetch_assoc($result_s6))
				$s6= $row_s6['price'];
			$s6=$s6+($pol*($s6*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$s6' WHERE tickr='VAKRANGEE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VAKRANGEE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VAKRANGEE'");
			}
			
			$result_S7=mysql_query("SELECT price FROM company WHERE tickr='SBIN'");
			while ($row_s7 = mysql_fetch_assoc($result_s7))
				$s7= $row_s7['price'];
			$s7=$s7+($pol*($s7*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$s7' WHERE tickr='SBIN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SBIN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SBIN'");
			}
		}
		break;
	case "hce":
		{
			$result_h1=mysql_query("SELECT price FROM company WHERE tickr='JNJ'");
			while ($row_h1 = mysql_fetch_assoc($result_h1))
				$h1= $row_h1['price'];
			echo "";
			$h1=$h1+($pol*($h1*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$h1' WHERE tickr='JNJ'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JNJ'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JNJ'");
			}
			
			$result_h2=mysql_query("SELECT price FROM company WHERE tickr='PFE'");
			while ($row_h2 = mysql_fetch_assoc($result_h2))
				$h2= $row_h2['price'];
			$h2=$h2+($pol*($h2*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$h2' WHERE tickr='PFE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='PFE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='PFE'");
			}
			
			$result_h3=mysql_query("SELECT price FROM company WHERE tickr='ALGN'");
			while ($row_h3 = mysql_fetch_assoc($result_h3))
				$h3= $row_h3['price'];
			$h3=$h3+($pol*($h3*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$h3' WHERE tickr='ALGN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ALGN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ALGN'");
			}
			
			$result_h4=mysql_query("SELECT price FROM company WHERE tickr='ABBV'");
			while ($row_h4 = mysql_fetch_assoc($result_h4))
				$h4= $row_h4['price'];
			$h4=$h4+($pol*($h4*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$h4' WHERE tickr='ABBV'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ABBV'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ABBV'");
			}
			
			$result_h5=mysql_query("SELECT price FROM company WHERE tickr='CELG'");
			while ($row_h5 = mysql_fetch_assoc($result_h5))
				$h5= $row_h5['price'];
			$h5=$h5+($pol*($h5*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$h5' WHERE tickr='CELG'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CELG'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CELG'");
			}
			
			$result_h6=mysql_query("SELECT price FROM company WHERE tickr='APOLLOHOSP'");
			while ($row_h6 = mysql_fetch_assoc($result_h6))
				$h6= $row_h6['price'];
			$h6=$h6+($pol*($h6*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$h6' WHERE tickr='APOLLOHOSP'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APOLLOHOSP'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APOLLOHOSP'");
			}
			
			$result_h7=mysql_query("SELECT price FROM company WHERE tickr='FORTIS'");
			while ($row_h7 = mysql_fetch_assoc($result_h7))
				$h7= $row_h7['price'];
			$h7=$h7+($pol*($h7*mt_rand(10,80))/100);
			mysql_query("UPDATE company SET price='$h7' WHERE tickr='FORTIS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FORTIS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FORTIS'");
			}
		}
		break;
	default:
		echo "Wrong choice!!";
	}
	header("location:admin_home.php");
?>
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
</style>
</head>
<body>
	
</body>
</html>