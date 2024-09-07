<?php

// include 'config.php';

// $fname = $_POST["fname"];
// $lname = $_POST["lname"];
// $address = $_POST["address"];
// $city = $_POST["city"];
// $pin = $_POST["pin"];
// $email = $_POST["email"];
// $pwd = $_POST["pwd"];

// if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
// 	echo 'Data inserted';
// 	echo '<br/>';
// }

// if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', '$pin', '$email', '$pwd')")){
//     echo 'Data inserted';
//     echo '<br/>';
// }

// header ("location:login.php");



include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

// Check if the email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
if ($result->num_rows > 0) {
    echo 'Email already exists';
    echo '<br/>';
} else {
    // Insert the data into the table
    if ($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES ('$fname', '$lname', '$address', '$city', '$pin', '$email', '$pwd')")) {
        echo 'Data inserted';
        echo '<br/>';
    } else {
        echo 'Error: ' . $mysqli->error;
        echo '<br/>';
    }
}

header("location:login.php");

?>
