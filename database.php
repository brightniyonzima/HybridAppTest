<?php
	/*header("Access-Control-Allow-Origin: *");*/
	$con = mysqli_connect("localhost","root","root@1","sims") or die ("could not connect database");
	if ($con) {
		echo "connected";
	}
?>