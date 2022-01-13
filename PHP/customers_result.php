<?php
	$fname = $_GET["FNAME"];
	$lname = $_GET["LNAME"];
    $phn = $_GET["PHONE"];
	$add = $_GET["ADDRESS"];
    $email = $_GET["EMAIL"];
	$city = $_GET["CITY"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO customers VALUES ( null, '$fname', '$lname','$phn','$add','$email','$city')" )
		or die("Can not execute query");

	echo "Record inserted:<br> First Name = $fname <br> Last Name = $lname";

	echo "<p><a href=customers_read.php>READ all records</a>";
?>
