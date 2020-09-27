<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//creating connection
// giving $dbname as a param.. it will create a database and use it..

$conn = new mysqli($servername,$username,$password,$dbname);

//checking connection

if($conn->connect_error){
	die ("Connection failed: " . $conn->connect_error);
}

// creating table
$sql = "CREATE TABLE car(id INT(6) UNSIGNED AUTO_INCREAMENT PRIMARY KEY, car_name VARCHAR(100)NOT NULL, reg_number VARCHAR(100), mileage  ";

$conn->close();

?>