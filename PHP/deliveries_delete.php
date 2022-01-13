<?php

	$id = $_GET["id"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM deliveries WHERE $id=delivery_ID" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=deliveries_read.php>READ all records</a>";

?>