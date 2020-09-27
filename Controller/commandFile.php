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
$User_name = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$nid = $_POST['nid_no'];
$p_no= $_POST['phone_number'];
$address = $_POST['address'];

$userIdCheck = "SELECT * FROM customer WHERE username = '$User_name' OR email = '$email' LIMIT 1";

$check = mysqli_query($conn , $userIdCheck);

if(mysqli_num_rows($check) == 1){
	echo "User ID or Email already Exists";
	header("refresh:3 ; url=form.html");
} else{

	$sql= "INSERT INTO customer (username, password, name, email, nid_no, phone_number, address) VALUES ('$User_name', '$password', '$name', '$email', '$nid', '$p_no', '$address')";
	if ($conn->query($sql) == TRUE) {
    	echo "New record created successfully";
    	header("refresh:0; url=congrats.html");
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();

?>