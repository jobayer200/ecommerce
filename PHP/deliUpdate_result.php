<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$date = $_GET["date"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE deliveries SET name='$name', date='$date' WHERE id = $id";

	//echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Name = $name <br> Date = $date";



	echo "<p><a href=categories_read.php>READ all records</a>";

?>