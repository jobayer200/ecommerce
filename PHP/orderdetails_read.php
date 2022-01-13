<?php
	echo "<h3>Order Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM orderdetails" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>OrderID</th><th> Customer_ID</th> <th>ProductID</th><th>ProductName</th><th> Order_Date</th> <th>Price</th><th>Quantity</th>  <th>Delete</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $Order_ID </td>";
		echo "<td> $customer_ID </td>";
		echo "<td> $ProductID </td>";
		echo "<td> $ProductName </td>";
		echo "<td> $Order_Date </td>";
		echo "<td> $Price </td>";
        echo "<td> $Quantity</td>";
		echo "<td> <a href = 'orderdetails_delete.php?id=$Order_ID'> Delete </a> </td>\n";
	}
	echo "</table> \n";
	echo "<p><a href=orderdetails_input.php>CREATE a new record</a>";
?>
