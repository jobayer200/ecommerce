<?php
	$amount = $_GET["AMOUNT"];
    $pdate = $_GET["DATE"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO payment VALUES ( null, null, '$amount','$pdate')" )
		or die("Can not execute query");

	echo "Record inserted:<br> Amount = $amount";

	echo "<p><a href=payment_read.php>READ all records</a>";
?>
