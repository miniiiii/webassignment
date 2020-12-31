-----------Web assingment---------------

---------Hotel SignUP form------------

---------STUDENT ID- 18432----//////----- NAME -  NGTC Yasarathna ----------


--------------HTML---------------------------


<html>
    <head>
        <script type="text/javascript" src="signupformval.js"></script>
        <link rel="stylesheet" type="text/css" href="signupform.css">
    </head>
    <body>
     <form name="form1"  onSubmit="return formValidation();" style=" *border: 1px solid whitesmoke" method="POST" action="singup.php">
    <div class="container">
        <h1 class="heading"><center>Sign Up</center></h1>
        <p>Please fill in this form to create an account</p>
        <hr>

        <label for="title"><b>Title</b></label>
        <select name="title">
            <option selected="" value="default">Select Title</option>
            <option value="Mr">Mr.</option>
            <option value="Mrs">Mrs.</option>
            <option value="Ms">Ms.</option>
        </select>
        <label for="firstname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" id="fname">

        <label for="lastname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname">
        <br>

        <label for="dateofbirth"><b>Date Of Birth</b></label>
        <select name="date">
            <option selected="" value="default1">DD</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <select name="month">
            <option selected="" value="default2">MM</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>  
        </select>
        <select name="year">
            <option selected="" value="default3">YYYY</option>
            <option value="1960">1960</option>
            <option value="1961">1961</option>
            <option value="1962">1962</option>
            <option value="1963">1963</option>
            <option value="1964">1964</option>
            <option value="1965">1965</option>
            <option value="1966">1966</option>
            <option value="1967">1967</option>
            <option value="1968">1968</option>
            <option value="1969">1969</option>
            <option value="1970">1970</option>
            <option value="1971">1971</option>
            <option value="1972">1972</option>
            <option value="1973">1973</option>
            <option value="1974">1974</option>
            <option value="1975">1975</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
        </select>
        <br>
        <label for="country"><b>Country/Region</b></label>
        <input type="text" placeholder="Enter Country/Region" name="coure" id="coure">
        <br>
        <label for="gender"><b>Gender</b></label>
        <input type="radio" name="gender">Male<input type="radio" name="gender">Female
        <br>

        <label for="email"><b>E-mail</b></label>
        <input type="text" placeholder="Enter E-mail" name="email">
        <br>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw">
        <br> 
        
        <label>
            <input type="checkbox" name="remember" style="margin-bottom: 15px">Remember Me
        </label>
        <p>By creating an account you agree to our  <a href="#tandc" style="color:darkblue">Terms & Privacy</a>.</p>
        <div class="clearfix">
            <button type="button" class="cancelbtn" onclick="newcode.html">Cancel</button>
            <button type="submit" class="signupbtn" value="validate" name="submit">Sign Up</button>
        </div>
    </div>
    </form>   
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

		$ntype		= $_POST["title"];
		$fname		= $_POST["fname"];
		$lname		= $_POST["lname"];
		$date		= $_POST["date"];
		$month		= $_POST["month"];
		$year		= $_POST["year"];
		$region		= $_POST["coure"];
		$gender		= $_POST["gender"];
		$email		= $_POST["email"];
		$password 	= $_POST["psw"];

		$sql = "INSERT INTO singup(ntype, fname, lname, day, month, year, region, gender, email, pwd) VALUES ('$ntype','$fname', '$lname', '$date', '$month', '$year', '$region', '$gender', '$email', '$password')";

		if ($connection->query($sql) === TRUE) {
		  echo "New record created successfully <br>";
		} else {
		  echo "Error: " . $sql . "<br>" . $connection->error;
		}

		/*echo $ntype . $fname;
		echo "<br>";
		echo $lname;
		echo "<br>";
		echo $dob;
		echo "<br>";
		echo $region;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $password;
		echo "<br>";*/

	}

 ?>

--------------SQL-------------------


-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2020 at 10:35 AM
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
-- Table structure for table `singup`
--

CREATE TABLE `singup` (
  `id` int(11) NOT NULL,
  `ntype` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `day` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singup`
--

INSERT INTO `singup` (`id`, `ntype`, `fname`, `lname`, `day`, `month`, `year`, `region`, `gender`, `email`, `pwd`) VALUES
(1, 'Mr', 'werwe', 'werew', '03', 'April', '1963', 'rwer', 'on', 'abc@gmil.com', 'afaf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `singup`
--
ALTER TABLE `singup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `singup`
--
ALTER TABLE `singup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



---------------------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\//////////////////////////////-----------------------------------------------------




                                               -----------------------THAN YOU------------------------