<?php
	$name = $_GET["NAME"];
    $address = $_GET["ADDRESS"];
    $phn = $_GET["PHONE"];
    $email = $_GET["EMAIL"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO suppliers VALUES ( null, '$name','$address','$phn',null,'$email')" )
		or die("Can not execute query");

	echo "Record inserted:<br> Name = $name";

	echo "<p><a href=suppliers_read.php>READ all records</a>";
?>
