<?php
	echo "<h3>Category Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM categories" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>ID</th><th> NAME</th> <th>Type</th> <th>Delete</th><th>Update</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $category_ID </td>";
		echo "<td> $category_Name </td>";
		echo "<td> $category_Type </td>";
		echo "<td> <a href = 'categories_delete.php?id=$category_ID'> Delete </a> </td>";
		echo "<td> <a href = 'cateUpdate_input.php?id=$category_ID&name=$category_Name&type=$category_Type'>Update</a></td><tr>\n";
	}
	echo "</table> \n";
	echo "<p><a href=categories_input.php>CREATE a new record</a>";
?>
