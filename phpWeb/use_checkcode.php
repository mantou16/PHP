<?php
session_start();

if(isset($_SESSION['vcode']))
{
	if($_POST['checkcode']==$_SESSION['vcode'])
		echo "check code is correct: ".$_POST['checkcode'];
	else
		echo "check code is wrong: ".$_POST['checkcode'];

	//echo "<script>location.href='use_checkcode.php'</script>";
}

?>

<form action="" method="post">
<img src="checkcode.php"><br>
Please input the check code:<input type="text" name="checkcode" ><br>
<input type="submit" name="Submit" ><br>
</form>