<?php
$email = "meizhiyong@gmail.com";
// ereg() and eregi() are deprecated
if(preg_match("#^[a-zA-Z0-9-]+@[a-zA-Z0-9]+[\.a-zA-Z0-9]#", $email))
	echo "mail is valid";

$str = "<title>问天网-上海天气详情</title>";
$str = "<title>this is title</title>";
$pattern = "/.title.*title./";
if(preg_match($pattern, $str, $match))
//if(eregi("<title>(.*)</title>", $str, $match))
{
	echo "regex is valid";
	print_r($match);
}

$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
print_r($matches);

$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
print_r($matches);


//The \b in the pattern indicates a word boundary, so only the distinct word "web" is matched, and not a word partial like "webbing" or "cobweb"
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}

if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}

?>
