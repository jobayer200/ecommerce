<?php
    $name = $_GET["PName"];
	$date = $_GET["ODate"];
    $price = $_GET["Price"];
    $quan = $_GET["Quantity"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO orderdetails VALUES (null, null, null,'$name','$date',$price,'$quan')" )
		or die("Can not execute query");

	echo "Record inserted:<br> Name = $name";

	echo "<p><a href=orderdetails_read.php>READ all records</a>";
?>
