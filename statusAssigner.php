<?php
	error_reporting(0);
	$status = $_GET['stat'];
	file_put_contents("status.txt",$status);
?>
