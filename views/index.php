<!DOCTYPE html>
<html>
<head>
	<title>Demo site</title>
	<script type="text/javascript" src="assets/libs/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/demo.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/demo.css">

</head>
<body>
<div class="header-wrapper">
	<div class="header-container">
		<form action="login.php" method="POST">
			<label for="username">username</label>
			<input id="username" name="username" type="text"/>
			<input id="password" name="password" type="password"/>
			<button type="submit">login</button>
			<?php
				if(isset($data['login_error'])):
					echo $data['login_error'];
				endif;
			?>
		</form>
	</div>
</div>

</body>
</html>
