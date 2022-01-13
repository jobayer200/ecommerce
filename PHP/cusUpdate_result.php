<?php

    $id = $_GET["id"];

    $fname = $_GET["fname"];

    $lname = $_GET["lname"];

    $phone = $_GET["phone"];

    $add = $_GET["add"];

    $email = $_GET["email"];

    $city = $_GET["city"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE customers SET fname='$fname', lname='$lname' 
    phone='$phone', add='$add', email='$email', city='$city' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> First Name = $fname <br> Last Name = $lname";



	echo "<p><a href=customers_read.php>READ all records</a>";

?>