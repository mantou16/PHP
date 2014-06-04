<?php

class mysql_class
{
	private $host;
	private $name;
	private $password;
	private $db;
	private $charset;
	
	function __construct($host, $name, $password, $db, $charset="UTF8")
	{
		$this->host = $host;
		$this->name = $name;
		$this->password = $password;
		$this->db = $db;
		$this->charset = $charset;
		
		$this->connect();
	}
	
	function connect()
	{
		$conn = @ mysql_connect($this->host, $this->name, $this->password) or die("Connect to Mysql Error!<br>".$this->error());
		mysql_select_db($this->db, $conn) or die("Select Database ".$this->db." Error!<br>".$this->error());
		mysql_set_charset($this->charset);
	}
	
	function query($sql)
	{
		return mysql_query($sql);
	}
	
	function error()
	{
		return mysql_error();
	}
	
    function show($message = '', $sql = '')
    {
		if(!$sql) echo $message;
		else echo $message.'<br>'.$sql;
	}

    function affected_rows()
    {
		return mysql_affected_rows();
	}

	function result($query, $row)
	{
		return mysql_result($query, $row);
	}

	function num_rows($query)
	{
		return @mysql_num_rows($query);
	}

	function num_fields($query)
	{
		return mysql_num_fields($query);
	}

	function free_result($query)
	{
		return mysql_free_result($query);
	}

	function insert_id()
	{
		return mysql_insert_id();
	}

	function fetch_row($query)
	{
		return mysql_fetch_row($query);
	}

	function version()
	{
		return mysql_get_server_info();
	}

	function close()
	{
		return mysql_close();
	}
	// ===================
	
	function insert($table, $column_name, $column_value)
	{
		$query_result = $this->query("insert into $table ($column_name) value ($column_value)");
		if(!$query_result)
			echo "insert error!";
	}
	
}

$db = new mysql_class("localhost", "php", "php", "test");
$db->insert("em", "name, age", "'天天', 10");

?>