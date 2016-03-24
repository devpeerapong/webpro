<?php
	$mysqli =  new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if ($mysqli->connect_error) {
		$errorno = $mysqli->connect_errno;
		$error_message = $mysqli->connect_error;
		die("Error : ({$errorno}) {$error_message}");
	}

