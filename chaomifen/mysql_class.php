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
	
	function mysql_query($sql)
	{
		return mysql_query($sql);
	}
	
	function mysql_error()
	{
		return mysql_error();
	}
	
    function show($message = '', $sql = '')
    {
		if(!$sql) echo $message;
		else echo $message.'<br>'.$sql;
	}

    function mysql_affected_rows()
    {
		return mysql_affected_rows();
	}

	function mysql_result($result, $row)
	{
		return mysql_result($result, $row);
	}

	function mysql_num_rows($result)
	{
		return @mysql_num_rows($result);
	}

	function mysql_num_fields($result)
	{
		return mysql_num_fields($result);
	}

	function mysql_free_result($result)
	{
		return mysql_free_result($result);
	}

	function mysql_insert_id()
	{
		return mysql_insert_id();
	}
	
	function mysql_fetch_row($result)
	{
		return mysql_fetch_row($result);
	}

	function mysql_get_server_info()
	{
		return mysql_get_server_info();
	}

	function mysql_close()
	{
		return mysql_close();
	}
	// ===================
	
	function insert($table, $column_name, $column_value)
	{
		$result = $this->query("insert into $table ($column_name) value ($column_value)");
		if(!$result)
			echo "insert error!";
	}
	
}


$conn = @ new mysql_class("localhost", "mifen", "mifen", "chaomifen") or die("Cannot connect to db");


?>