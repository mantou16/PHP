<?php

if (is_uploaded_file($_FILES['upfile']['tmp_name']))
{
	$upfile = $_FILES['upfile'];
	$name = $upfile['name'];
	$type = $upfile['type'];
	$size = $upfile['size'];
	$tmp_name = $upfile['tmp_name'];
	$destination = 'upload/';
	$valid=0;
	switch ($type) {
		case 'image/jpeg': $valid=1;
			break;
		case 'image/pjpeg': $valid=1;
			break;
		case 'image/gif': $valid=1;
			break;
		case 'image/png': $valid=1;
			break;
		case 'application/pdf': $valid=1;
			break;
	}
	
if($valid)
	move_uploaded_file($tmp_name, $destination.$name);
	
}

?>

<form action="" enctype="multipart/form-data" method="post" name="up">
 upload file:
 <input name="upfile" type="file">
 <input type="submit" value="upload"><br>
</form>