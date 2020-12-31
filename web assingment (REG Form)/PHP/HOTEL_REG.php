<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "ex01";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


    if(isset($_POST["submit"])) {

        $inDate     = $_POST["indate"];
        $outDate    = $_POST["outdate"];
        $adults		= $_POST["adult"];
        $child      = $_POST["child"];
        $rooms      = $_POST["room"];

        $sql = "INSERT INTO form(indate, outate, adult, child, room) VALUES ('$inDate','$outDate', '$adults', '$child', '$rooms')";

		if ($connection->query($sql) === TRUE) {
		  echo "New record created successfully <br>";
		} else {
		  echo "Error: " . $sql . "<br>" . $connection->error;
		}

        /*echo $inDate;
        echo "<br>";
        echo $outDate;
        echo "<br>";
        echo $adults;
        echo "<br>";
        echo $child;
        echo "<br>";
        echo $rooms;*/


    }

?>