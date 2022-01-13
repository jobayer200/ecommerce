<?php
	echo "<h3>Payments Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM payment" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>Payment ID</th> <th>Customer ID</th><th>Amount</th><th>Payment Date</th><th>Delete</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $payment_ID </td>";
		echo "<td> $customer_ID </td>";
		echo "<td> $amount </td>";
		echo "<td> $payment_Date </td>";
		echo "<td> <a href = 'payment_delete.php?id=$payment_ID'> Delete </a> </td>\n";
	}
	echo "</table> \n";
	echo "<p><a href=payment_input.php>CREATE a new record</a>";
?>
