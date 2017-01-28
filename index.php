<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>

<div class="text-center">
	<h1>
		<?php

		    $f_contents = file("lista.txt"); 
		    $line = $f_contents[rand(0, count($f_contents) - 1)];

		    echo $line;

		?>
	</h1>
</div



</body>
</html>
