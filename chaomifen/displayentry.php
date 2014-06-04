<?php
error_reporting(E_ALL & ~E_NOTICE);

include_once 'mysql_class.php';

process_request($conn);

function process_request($conn)
{
	$category = $_GET["category"];
	$category = urldecode($category);
	if ($category)
	{
		$cate_list = explode("_", $category);
		for($i = 0, $length = count($cate_list); $i < $length; $i++)
		{
			$sql = get_sql($cate_list[$i]);
			$entry = fetch_entry($conn, $sql);
			send_response($entry);
		}
	}
}

function get_sql($category)
{
	$sql = "select entry from entry";
	$where_def = " where category = ";
	$where_def = $where_def."\"".$category."\"";
	$sql = $sql.$where_def;
	return $sql;
}

function fetch_entry($conn, $sql)
{
	$result = $conn->mysql_query($sql);
	$num = $conn->mysql_num_rows($result);
	$rand = rand(1, $num)-1;
	$sql = $sql." limit $rand, 1";
	$result = $conn->mysql_query($sql);
	if($row=mysql_fetch_array($result))
		return $row['entry'];
}

function send_response($entry)
{
	echo $entry;
}

?>