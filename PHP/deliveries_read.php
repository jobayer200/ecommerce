<?php
	echo "<h3>Deliveries Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM deliveries" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>Delivery ID</th><th>Order ID</th><th> Shipper Name</th><th>Delivery Date</th><th>Delete</th><th>Update</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $delivery_ID </td>";
		echo "<td> $order_ID </td>";
		echo "<td> $Shipper_Name </td>";
        echo "<td> $delivery_Date </td>";
		echo "<td> <a href = 'deliveries_delete.php?id=$delivery_ID'> Delete </a> </td>";
		echo "<td> <a href = 'deliUpdate_input.php?id=$delivery_ID&name=$Shipper_Name&date=$delivery_Date'>Update</a></td><tr>\n";
		
	}
	echo "</table> \n";
	echo "<p><a href=deliveries_input.php>CREATE a new record</a>";
?>
