<?php
	$link=mysqli_connect("localhost","root","","dienthoai") or die("Cannot connect to the localhost");
	//mysqli_select_db("temp",$link) or die("Cannot connect to the database");
	mysqli_query($link,"SET NAMES 'UTF8'");
?>
