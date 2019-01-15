<?php
	session_start();
	if (!isset( $_SESSION["quiz"] )) {
			$_SESSION["quiz"] = 1;
	}
	if (!isset( $_SESSION["score"] )) {
			$_SESSION["score"] = 10;
	}
?>

