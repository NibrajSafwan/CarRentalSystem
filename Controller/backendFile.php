<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//creating connection
// giving $dbname as a param.. it will create a database and use it..

$conn = new mysqli($servername,$username,$password,$dbname);

//checking connection

if($conn->connect_error){
	die ("Connection failed: " . $conn->connect_error);
}

//SQL TO CREATE TABLE


$sql="create table customer(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
nid_no VARCHAR(100) NOT NULL,
phone_number VARCHAR(100) NOT NULL,
address VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Checking if the table was created successfully
if ($conn->query($sql) === TRUE) {
    echo "Table cusomer created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
// creating table
//$Name = $_POST['name'];
//$Email = $_POST['email'];
//$sql="insert into customer(name,email)
//values ('$Name','$Email')";
//if(mysqli_query($conn,$sql)){
//	echo "inserted";
//} else{
//	echo "Not inserted";
//}

//header("refresh:2; url=form.html");


?>

