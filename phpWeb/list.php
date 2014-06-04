<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>list.php</title>
</head>
    <body>
    <?php
    	include ("conn.php");
    	include ("head.php")
	?>

	<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
	<?php
		error_reporting(E_ALL & ~E_NOTICE);
		$query = "select * from message";
		$result = mysql_query($query);
		$num = mysql_num_rows($result);		
		$url=$_SERVER["REQUEST_URI"];
		$url=parse_url($url);
		$url=$url['path'];
		
		if($_GET['page'])
			$page=$_GET['page'];
		else
			$page=1;

		$pagesize=5;
		if($num > $pagesize)  // 保证多于一页
		{
			echo "总共".$num."条记录";
			if($page==1)    // 起始页，不能有上一页
				echo " <a href=$url?page=".($page+1).">下一页</a>";
			elseif($page < $num/$pagesize)  // 只要当前页码数小于总条目数除以每页条数的值，那就还有下一页
				echo " <a href=$url?page=".($page-1).">上一页</a> <a href=$url?page=".($page+1).">下一页</a>";
			else                             // 已经是最后一页，只能往前翻
				echo " <a href=$url?page=".($page-1).">上一页</a>";
		}
		$record_start = ($page-1)*$pagesize;
		$query="select * from message order by id desc limit $record_start, $pagesize";
		$result = mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
	?>
	  <tr bgcolor="#eff3ff">
	  <td>标题：<?php echo htmtocode($row['title'])?></td>
	  <td>用户：<?php echo htmtocode($row['user'])?></td>
	  </tr>
	  <tr bgColor="#ffffff">
	  <td>内容: <?php echo htmtocode($row['content'])?></td>
	  <td></td>
	  </tr>
	<?php
		} 
	?>
	</table>
    </body>
</html>