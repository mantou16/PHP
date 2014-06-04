<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.5.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
$("button").click(function(){
$("p").hide();
});

$(".ex .hide").click(function(){
$(this).parents(".ex").hide(1000);
});

$(".flip").click(function(){
$(".panel").slideToggle("slow");
});





});
</script>
<style type="text/css"> 
div.ex
{
background-color:#e5eecc;
padding:7px;
border:solid 1px #c3c3c3;
}
</style>
<title>炒米粉</title>
</head>
    <body>
    <h2>this is a heading</h2>
    <p>this is a paragraph</p>
    <p>this is another one</p>
    <button type="button">click me</button>
    
    <h3>this is heading A</h3>
    <div class="ex">
    <button class="hide" type="button"> hide me </button>
    <p>this is A</p>
    </div>

    <h3>this is heading B</h3>
    <div class="ex">
    <button class="hide" type="button"> hide me </button>
    <p>this is B</p>
    </div>
    
    <div class="panel">
    <p> this is panel content </p>
    </div>
    <p class="flip">show/hide panel</p>
    <?php
    $str = "化学_物理";
    $new_str = explode("_", $str);
    print_r($new_str);
    ?>
  		<div id="displayentry">
  			<p id="entry1">hello</p>
			<script src="js/test.js">
			</script><!--
 			
  			<script src="js/test.js">
  				self.setInterval("displayentry()",2000);
  			</script>
  			
  		--></div>
    </body>
</html>