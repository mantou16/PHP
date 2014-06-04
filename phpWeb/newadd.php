<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title>Sample - CKEditor</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<form method="post">
		<p>
			My Editor:<br />
			<textarea name="editor1">&lt;p&gt;Initial value.&lt;/p&gt;</textarea>
			<script type="text/javascript">
				CKEDITOR.replace('editor1');
			</script>
		</p>
		<p>
			<input type="submit" />
		</p>
	</form>
</body>
</html>


<?php
if(isset($_POST['editor1']))
{
	$editor_data = $_POST['editor1'];
	echo $editor_data;
}

?>