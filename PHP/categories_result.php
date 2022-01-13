<?php
    $name = $_GET["Name"];
    $type = $_GET["Type"];

    require_once('dbconfig.php');
    $connect = mysqli_connect(HOST, USER, PASS,DB)
        or die("Can not connect");
    mysqli_query($connect, "INSERT into categories values (null,'$name','$type')")
        or die("Can not execute query");
    
    echo "Record inserted:<br> Name = $name";
    echo "<p><a href=categories_read.php>READ all records</a>";
?>