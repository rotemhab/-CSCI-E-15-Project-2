<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php require 'logic.php'; ?>
</head>
<body>

	<h1>Password Generator</h1>
	<p class='password'></p>
	<p>My first paragraph.</p>
	<form action="index.php" method="GET">
			<label for='numWords'># of Words</label>
			<input maxlength=1 type='text' name='numWords' id='numWords' value = "4" required>  (Max 9)
			<br>
			<input type='checkbox' name='number' id='number' >
			<label for='number'>Add a number</label>
			<br>
			<input type='checkbox' name='symbol' id='symbol' >
			<label for='symbol'>Add a symbol</label>
			<br>
		<input type='submit' class='btn btn-default' value='Gimme Another'>
		
	</form>

</body>
</html>