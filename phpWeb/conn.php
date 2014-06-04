<?php
$conn = @ mysql_connect("localhost", "php", "php") or die("数据库链接错误");
mysql_select_db("test", $conn);
//mysql_query("set names 'UTF8'"); //使用UTF8中文编码;
mysql_set_charset("UTF8");

function htmtocode($content)
{
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}

?>