<?php
error_reporting(E_ALL & ~E_NOTICE);

session_start();

for($i=0; $i<4; $i++)
{
	//$string = $string.dechex(rand(1, 15));
	$string_num .= dechex(rand(1, 15));
}

$x = rand(10, 60);
$y = rand(5, 15);
$width = 100;
$height = 30;
$font = rand(1, 5);

$image = imagecreatetruecolor($width, $height);

$string_color = imagecolorallocate($image, 255, 255, 255);

for ($i=0; $i<3; $i++)
{
	$line_color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
	imageline($image, rand(0, 10), rand(0, 5), 40+rand(0, 60), 10+rand(0, 20), $line_color);
}

for ($i=0; $i<200; $i++)
{
	$pixel_color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
	imagesetpixel($image, rand(0, 100), rand(0, 30), $pixel_color);
}

$ttf = "simhei.ttf";
$string = "中文字体";
//$string = iconv("GBK", "UTF-8", $string);

imagettftext($image, $font+8, rand(0, 10), $x/2, $y*2, $string_color, $ttf, $string);

//imagestring($image, $font, $x, $y, $string_num, $string_color);



header("Content-type: image/jpeg");
imagejpeg($image);


$_SESSION['vcode']=$string;

?>