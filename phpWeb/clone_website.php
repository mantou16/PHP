<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>clone.php</title>
</head>
    <body>

	</body>
</html>

		<?php
		$url = "http://tq121.weather.com.cn/icbc/detail1.php?city=%C9%CF%BA%A3";
		$rf = @fopen($url, "r") or die ("over time");
		$fcontents = file_get_contents($url);
		$fcontents = iconv("gb2312", "utf-8", $fcontents);  // convert the string to requested character encoding
		preg_match("/11月19日.*11月25日/", $fcontents, $match);
		echo $match[1];	
		?>