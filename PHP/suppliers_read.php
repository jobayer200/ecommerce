<?php
	echo "<h3>Suppliers Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM suppliers" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>SupplierID</th><th> Supplier_Name</th> <th>Address</th> <th> Phone</th> <th> product_ID</th> <th> Email</th><th>Delete</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $supplier_ID </td>";
		echo "<td> $Supplier_Name </td>";
		echo "<td> $Address </td>";
        echo "<td> $Phone </td>";
		echo "<td> $product_ID </td>";
        echo "<td> $Email </td>";
		echo "<td> <a href = 'suppliers_delete.php?id=$supplier_ID'> Delete </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=suppliers_input.php>CREATE a new record</a>";
?>
