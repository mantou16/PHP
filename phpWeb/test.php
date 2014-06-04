<?php
	$connection=mysql_connect("localhost","php","php");
	if($connection)
	{
		$db = mysql_select_db("test",$connection);
		if($db)
			echo "connect to test successfully";
		else
			echo "failed to select db";
	}
	else
	{
		echo "not able to establish the connection to localhost mysql instance";
	}
	
	$sql="select * from em";
	$query = @mysql_query($sql,$connection) or die(mysql_error());
	while($result = mysql_fetch_array($query))
	{
		echo $result['name']."<br>";
	}
	print_r($result['name']."<br>");
	print_r("好的");
	echo "好的";
	//echo $result['name'];
	//$sql="insert into em value(7, 'zdf', 33)";
	//$query = @mysql_query($sql,$connection) or die(mysql_error("Error to get result"));
	//echo $result;
	$sql="select * from em";
	$query = @mysql_query($sql,$connection) or die(mysql_error());
	echo mysql_num_rows($query)."<br>";
	echo mysql_close($connection);

	include ("conn.php");
	$pagesize=5;
	$url=$_SERVER["REQUEST_URI"];
	print_r($url);
	$url=parse_url($url);
	//print_r($url);
	print_r($url['path']);
	$sql = "select * from em";
	echo $sql."<br>";
	$query = mysql_query($sql);
	echo mysql_num_rows($query)."<br>";
	while ($row=mysql_fetch_array($query))
		echo "<hr><b>".$row['name']." | ".$row['age'];
	
	
?>
<br>

<?php
$abc = 123;
echo $abc;
$test=array(1, 2, 2,4);
echo $test;
$a=2;
$a+=2;
$a*=3;

$d=md5("y-m-d");
echo $d;

function func($var)
{
echo "var is $var";
}

func("test");

echo $a;

if ($a==9)
echo "a=9";
else
echo "a!=9";

$f = array("id"=>2,"title"=>3);
$kk = array("test", "dddd", "hello");
echo $f["title"];
print_r($kk[0]);
$kk[0]="kkk";
print_r($kk[0]);

echo count($kk);
if(is_array($kk))
	echo "yes, it is an array";

$dt="a-b-c-d";
$tf=explode("-", $dt);
print_r($tf);

foreach($tf as $key=>$value)
{
 echo $key;
 echo " = ";
 echo $value;
 echo "<br>";
}

$ua=parse_url("http://username:password@hostname/path?arg=value#anchor");
print_r($ua);

?>

<font color=red>
hello
</font>

<form action="" method="GET" >
<input type="text" size=10 name="user"/>
<input type="text" size=20  name="title"/>
<textarea name="content"></textarea>
<input type="submit" name="submit"/>
</form>

