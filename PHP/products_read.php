<?php
	echo "<h3>Products Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM products" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>ID</th> <th> Name</th> <th>Price</th><th>Type</th><th> Category_ID</th> <th>Supplier_ID</th>  <th>Delete</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $product_ID </td>";
		echo "<td> $product_Name </td>";
		echo "<td> $product_Price </td>";
		echo "<td> $product_Desc </td>";
		echo "<td> $category_ID </td>";
		echo "<td> $supplier_ID </td>";
		echo "<td> <a href = 'products_delete.php?id=$product_ID'> Delete </a> </td>\n";
	}
	echo "</table> \n";
	echo "<p><a href=products_input.php>CREATE a new record</a>";
?>
