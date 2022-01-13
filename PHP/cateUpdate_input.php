<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$type = $_GET["type"];

?>



<h1>Update Record</h1>



<form method=get action=cateUpdate_resutl.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	Name: <input type=text name="name" value='<?php echo $name; ?>'>

	<p>

	Price: <input type=text name="type" value='<?php echo $type; ?>'>

	<p>

	<input type=submit value=Update>

</form>