<?php
	session_start();
	session_unset();
	session_destroy();
	unset($_SESSION["jfrnd"]);
	redirect('home');
	exit();
?>