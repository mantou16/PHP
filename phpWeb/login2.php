<?php

session_start();

if(isset($_GET['logout']))
{
	//setcookie('name', '');
	//setcookie('password', '');
	//echo "<script>location.href='login2.php'</script>";
	unset($_SESSION['name']);
	unset($_SESSION['password']);
}

if(isset($_POST['name'])&&isset($_POST['password']))
{
	//setcookie('name',$_POST['name']);
	//setcookie('password',$_POST['password']);
	//echo "<script>location.href='login2.php'</script>";
	
	$_SESSION['name']=$_POST['name'];
	$_SESSION['password']=$_POST['password'];
}

//if(isset($_COOKIE['name'])&&isset($_COOKIE['password']))
if(isset($_SESSION['name'])&&isset($_SESSION['password']))
{
	//echo "Login Successfully<br>Name:".$_COOKIE['name']."<br>Password:".$_COOKIE['password'];
	echo "Login Successfully<br>Name:".$_SESSION['name']."<br>Password:".$_SESSION['password'];
	echo "<br><a href='login2.php?logout=yes'>Logout</a>";
}
?>


<form action="" method="post">

Name:
<input type="text" name="name"><br/><br/>
Password:
<input type="password" name="password"><br/><br/>
<input type="submit" value="Login">
</form>
