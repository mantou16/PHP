<?php

$pattern = "/df/";
$subject = "as;dfjalsdjf;asldjf;lsdjf";

echo "<hr>";

if(preg_match($pattern, $subject, $match))
{
	echo "find match!"."<br>";
	print_r($match);
}
else
	echo "no match!!!";
	

?>
