<?php require('startup.php');
	if( !$_SESSION['is_login'] ) {
    header('Location: ' . SITE_URL . '/');
	}
  else {
    require(VIEW_DIRECTORY.'/home.php');
  }
