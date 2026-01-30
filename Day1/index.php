<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/'); //This line is why localhost redirects to the XAMPP dashboard
	exit;
?>
Something is wrong with the XAMPP installation :-(

//this file is copied from xampp>>htdocs>>index.php
