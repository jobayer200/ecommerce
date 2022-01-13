<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$type = $_GET["type"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE categories SET name='$name', type='$type' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Name = $name <br> Type = $type";



	echo "<p><a href=categories_read.php>READ all records</a>";

?>