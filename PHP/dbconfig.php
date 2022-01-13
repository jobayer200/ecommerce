<?php
	// Defining Constants
	define( 'HOST', 'localhost' );
	define( 'DB', 'ecommerce' );
	define( 'USER', 'root' );
	define( 'PASS', '' );

// Create connection
$conn = new mysqli(HOST, USER, PASS, DB);
	if ($conn->connect_errno) {
	printf("Connect failed: %s\n", $conn->connect_error);
	exit();
	}
?>