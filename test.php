<?php

if (isset($_POST["name"])) {
	header("location: index.php?msg=submitted");
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<form action="index.php" method="post">
			<input type="text" name="name">
			<button type="submit">submit</button>
		</form>
	</body>
</html>