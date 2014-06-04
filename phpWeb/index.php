<?php

include("smarty_inc.php");

$content[]=array("content"=>"News", "date"=>"2010-11-24");
$content[]=array("content"=>"Sports", "date"=>"2010-11-24");
$content[]=array("content"=>"School", "date"=>"2010-11-24");
$content[]=array("content"=>"Business", "date"=>"2010-11-24");
$row = array("subject", "author", "page");
$row_key = array("a"=>"subject", "b"=>"author", "c"=>"page");

$title = "Smarty test";
$body = "This is body"."<br>";
$value = "it is Work and, it Is php100 video. <a href=http://www.sina.com.cn>sina</a>";
$smarty->assign('title', $title);
$smarty->assign('body', $body);
$smarty->assign('content', $content);
$smarty->assign('row', $row);
$smarty->assign("value", $value);
$smarty->assign("date", strtotime("-0"));

$smarty->assign("foreach_array", $row);
$smarty->assign("foreach_array_key", $row_key);
$smarty->assign("foreach_array_list_key", $content);

$smarty->display('index.htm');

function insert_get_time()
{
	return date("Y-m-d H:m:s");
}

?>
