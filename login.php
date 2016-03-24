<?php
	require('startup.php');
	if( $_POST ) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$encoded_password = md5($password);

		$sql = "SELECT * FROM user ";
		$sql.= "WHERE username = '{$username}' ";
		$sql.= "AND password = '{$encoded_password}' ";
		$sql.= "LIMIT 1";

		$result = $mysqli->query($sql);
		if( $result ) {
			$_SESSION['is_login'] = TRUE;
			$row = mysqli_fetch_assoc($result);
			$_SESSION['user_id'] = $row['id'];
  		header('Location: ' . SITE_URL . '/home.php');
		} else {
  		header('Location: ' . SITE_URL . '/login_failed.php');
		}

	}

