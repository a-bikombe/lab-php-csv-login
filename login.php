<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Log In</title>
	<link href="css/login.css" rel="stylesheet">
	<script src="js/login.js" defer></script>
</head>

<body>
	<main>
		<h1>Log In</h1>
		<form action="submit.php" method="post">
			<input type="text" name="username" placeholder="username">
			<input type="password" name="password" placeholder="password">
			<button type="submit">Log in</button>
			<div id="forgot">I forgot my password</div>
		</form>
	</main>
</body>

</html>