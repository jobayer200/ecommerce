<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$date = $_GET["date"];

?>



<h1>Update Record</h1>



<form method=get action=deliUpdate_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	Name: <input type=text name="name" value='<?php echo $name; ?>'>

	<p>

	Date: <input type=date name="date" value='<?php echo $date; ?>'>

	<p>

	<input type=submit value=Update>

</form>