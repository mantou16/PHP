<?php

$filename1 = "Winter.jpg";
$filename2 = "eclipse.jpg";
$img1_size = getimagesize($filename1);
$img2_size = getimagesize($filename2);
switch($img1_size[2])
{
	case 1:
		$image1 = @imagecreatefromgif($filename1);
		break;
	case 2:
		$image1 = @imagecreatefromjpeg($filename1);
		break;
	case 6:
		$image1 = @imagecreatefromxbm($filename1);
		break;
}

switch($img2_size[2])
{
	case 1:
		$image2 = @imagecreatefromgif($filename2);
		break;
	case 2:
		$image2 = @imagecreatefromjpeg($filename2);
		break;
	case 6:
		$image2 = @imagecreatefromxbm($filename2);
		break;
}

imagecopy($image1, $image2, 200, 200, 0, 0, 160, 100);

$string_color = imagecolorallocate($image1, 0, 255, 0);
$ttf = "simhei.ttf";
$string = "中文";

imagettftext($image1, 20, rand(0, 360), rand(50, 600), rand(50, 500), $string_color, $ttf, $string);

// need to comment the header out if want to output the watermarked pic to disk but not in broswer.
//header("Content-type: image/jpeg");
//if (imagejpeg($image1, "watermarked.jpg"))
//	echo "water marked!!";


$cut_resize = imagecreatetruecolor(500, 500);
imagecopyresized($cut_resize, $image1, 0, 0, 0, 0, 500, 500, $img1_size[0], $img1_size[1]);

header("Content-type: image/jpeg");
imagejpeg($cut_resize);

?>
