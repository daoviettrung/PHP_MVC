<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style >
		div{padding:20px}
		#header,#footer{background-color: yellow}
	</style>
</head>
<body>
	<div id = "header"></div>
	<div id = "content"><?php require_once"./mvc/views/pages/".$data["Page"].".php" ?></div>
</body>
</html>