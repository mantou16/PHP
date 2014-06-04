<?php
error_reporting(E_ALL & ~E_NOTICE);
include("conn.php");
include("head.php");
if($_POST['submit'])
{
	#echo $sql="insert into message (user, title, content, lastdate) values ('','$_POST[user]','$_POST[title]','$_POST[content]', now());";
	//mysql_set_charset("UTF8");
	mysql_query("set names 'UTF8'");
	$sql="insert into message (user, title, content, lastdate) values ('$_POST[user]','$_POST[title]','$_POST[content]', now())";
	@mysql_query($sql) or die (mysql_error());
	//echo "<script language=\"javascript\">alert('添加成功');history.go(-1)</script>";
	echo "<script language=\"javascript\">alert('添加成功');location.href='add.php';</script>";
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<script type="text/javascript">
function CheckPost()
{
	if(myform.user.value=="")
	{
		alert("请填写用户名");
		myform.user.focus();
		return false;
	}
	if(myform.title.value.length<2)
	{
		alert("标题不能少于2个字符");
		myform.title.focus();
		return false;
	}
	if(myform.content.value.length=="")
	{
		alert("内容不能为空");
		myform.content.focus();
		return false;
	}
}
</script>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PHP Test</title>
</head>
	<body>
		<form action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
			用户：<input type="text" name="user" /><br>
			标题：<input type="text" name="title" /><br/>
			内容：<textarea name="content"></textarea><br/>
			<input type="submit" name="submit" value="发布留言"/>
		</form>
	</body>
</html>

