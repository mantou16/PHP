<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<title>炒米粉</title>

</head>

<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<?php include("header.php"); ?>

<body>
	<div id="content">
		<div id="choose">
			<form method="get" name="setcriteria">
				<table>
					<td>
						<fieldset id="categories">类别
							<table>
								<tr>
									<td><input name="category" id="cate_physics" type="checkbox" value="物理" onclick="checkstatechange()" />物理</td>
									<td><input name="category" id="cate_chemystry" type="checkbox" value="化学" onclick="checkstatechange()" />化学</td>
								</tr>
								<tr>
									<td><input name="category" id="cate_accessory" type="checkbox" value="生活用品" onclick="checkstatechange()" />生活用品</td>
									<td><input name="category" id="cate_electronic" type="checkbox" value="电子" onclick="checkstatechange()" />电子</td>
								</tr>
							</table>
						</fieldset>
					</td>
					<td>
						<fieldset id="methods">方法
							<table>
								<tr>
									<td><input name="method" type="radio" value="add" />加</td>
									<td><input name="method" type="radio" value="sub" />减</td>
								</tr>
								<tr>
									<td><input name="method" type="radio" value="zoomin" />放大</td>
									<td><input name="method" type="radio" value="zoomout" />缩小</td>
								</tr>
							</table>
						</fieldset>
			   		</td>
					<td>
						<input name="setcriteria" type="submit" value="提交"/>
					</td>
				</table>
		  	</form>
  		</div>
  		<div id="displayentry">
  			<p id="entry"></p>
  			<script src="js/displayentry.js"></script>
  		</div>
</div>
	
<?php include("footer.php"); ?>
</body>

</html>
