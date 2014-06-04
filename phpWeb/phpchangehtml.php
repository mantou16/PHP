<?php
$fp=fopen("sample_html.html","r");
$str=fread($fp, filesize("sample_html.html"));

$str=str_replace("{title}", "new title", $str);
$str=str_replace("{content}", "new content", $str);
fclose($fp);
$handle=fopen("new_html.html", "w");
fwrite($handle, $str);
fclose($handle);

$a = array("a", "b", "c", "d");
$b = array("1", "2");
$subject = "abcd";
$count = 1;
echo $subject."<br>";
$k = str_replace($a, $b, $subject, $count);
echo $count."<br>";
echo $k."end"."<br>";
$count=1;
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count."<br>";
echo $str;

unlink("new_html.html");
?>