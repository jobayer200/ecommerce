<?php
    $oid = $_GET["OID"];
	$name = $_GET["NAME"];
	$date = $_GET["Date"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO deliveries VALUES ( null, $oid, '$name','$date')" )
		or die("Can not execute query");

	echo "Record inserted:<br> Name = $name";

	echo "<p><a href=deliveries_read.php>READ all records</a>";
?>
