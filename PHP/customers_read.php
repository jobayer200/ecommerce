<?php
	echo "<h3>Customers Table</h3>";
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM customers" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>ID</th><th> First Name</th> <th>Last Name</th> <th> Phone</th> <th> Address</th> <th> Email</th> <th> City</th> <th>Delete</th><th>Update</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $customer_ID </td>";
		echo "<td> $First_Name </td>";
		echo "<td> $Last_Name </td>";
        echo "<td> $phone </td>";
		echo "<td> $address </td>";
        echo "<td> $email </td>";
		echo "<td> $city </td>";
		echo "<td> <a href = 'customers_delete.php?id=$customer_ID'> Delete </a> </td>";
		echo "<td> <a href = 'cusUpdate_input.php?id=$customer_ID&fname=$First_Name&lname=$Last_Name&phone=$phone&add=$address&email=$email&city=$city'>Update</a></td><tr>\n";
	}
	echo "</table> \n";
	echo "<p><a href=customers_input.php>CREATE a new record</a>";
?>
