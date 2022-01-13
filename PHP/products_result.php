<?php
	$name = $_GET["NAME"];
	$price = $_GET["PRICE"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO products VALUES ( null, '$name', $price,'add a new pro',1,1)" )
		or die("Can not execute query");

	echo "Record inserted:<br> Name = $name <br> Price = $price";

	echo "<p><a href=products_read.php>READ all records</a>";
?>
