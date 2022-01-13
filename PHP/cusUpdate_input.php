<?php

	$id = $_GET["id"];

	$fname = $_GET["fname"];

	$lname = $_GET["lname"];

    $phn = $_GET["phone"];

	$add = $_GET["add"];

	$email = $_GET["email"];

    $city = $_GET["city"];
?>



<h1>Update Record</h1>



<form method=get action=cusUpdate_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	First Name: <input type=text name="fname" value='<?php echo $fname; ?>'>

	<p>

	Last Name: <input type=text name="lname" value='<?php echo $lname; ?>'>

	<p>
    Phone: <input type=text name="phn" value='<?php echo $phn; ?>'>

    <p>

    Address: <input type=text name="add" value='<?php echo $add; ?>'>

    <p>
   Email: <input type=text name="email" value='<?php echo $email; ?>'>

    <p>

    City: <input type=text name="city" value='<?php echo $city; ?>'>

    <p>

	<input type=submit value=Update>

</form>