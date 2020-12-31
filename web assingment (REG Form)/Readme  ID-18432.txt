-----------Web assingment---------------

---------Hotel registration form------------

---------STUDENT ID- 18432----//////----- NAME -  NGTC Yasarathna ----------


--------------HTML---------------------------


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="book">
        <form class="book-form" action="form.php" method="POST">
            <div class="form-item">
                <label for="checkin-date"> Check In Date: </label>
                <input type="date" id="checkin-date" name="indate">
            </div>
            <div class="form-item">
                <label for="checkout-date"> Check Out Date: </label>
                <input type="date" id="checkout-date" name="outdate">
            </div>
            <div class="form-item">
                <label for="adult"> Adults:</label>
                <input type="number" min="" value="" id="adult" name="adult">
            </div>
            <div class="form-item">
                <label for="children"> Children:</label>
                <input type="number" min="" value="" id="Children" name="child">
            </div>
            <div class="form-item">
                <label for="rooms"> Rooms:</label>
                <input type="number" min="1" value="" id="rooms" name="room">
            </div>
            <div class="form-item">
                <input type="submit" class="btn" value="Book Now" name="submit">
            </div>
        </form>
    </div>
</body>

</html>




------------PHP-------------------------



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



--------------SQL-------------------


-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2020 at 08:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ex01`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(10) NOT NULL,
  `indate` date NOT NULL,
  `outate` date NOT NULL,
  `adult` int(10) NOT NULL,
  `child` int(10) NOT NULL,
  `room` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `indate`, `outate`, `adult`, `child`, `room`) VALUES
(1, '2020-12-16', '2020-12-23', 3, 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





---------------------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\//////////////////////////////-----------------------------------------------------




                                               -----------------------THAN YOU------------------------