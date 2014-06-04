<?php
error_reporting(E_ALL & ~E_NOTICE);
include("conn.php");

	if($_GET['out'])
	{
		setcookie("cookie", "out");
		echo "logout";
		echo "<script language=\"javascript\">location.href='login.php';</script>";
	}
	
	if($_POST['id']=='admin')
	{
		$pw=md5($_POST['pw']);
		if($pw=='e1bfd762321e409cee4ac0b6e841963c')
		{
			setcookie("cookie", "ok");
			echo "<script language=\"javascript\">location.href='login.php';</script>";
		}
	}

include("head.php");
if($_COOKIE['cookie']!='ok')
{
?>
<script language=javascript>
function Checklogin()
{
	if(myform.id.value=="")
	{
		alert("请填写登录名");
		myform.id.focus();
		return false;
	}
}
</script>

<form action="" method="post" name="myform" onsubmit="return Checklogin();">
	ID: <input type="text" name="id" /><br>
	PW: <input type="password" name="pw" /> <input type="submit" name="submit" value="登录"/>
</form>
<?php 
}
else
{
?>
	<a href="login.php" name="out" >退出</a>
<?php
}
?>
