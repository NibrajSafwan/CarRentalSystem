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

//getting input from the log in page..
//if(isset(['username'])){
if(['username'] != NULL){
	$userId = $_POST['username'];
	$pass = $_POST['pass'];

	// sql query for customer check
	$sql = "SELECT * FROM customer WHERE username = '$userId' AND password = '$pass' LIMIT 1";

	//sql query for admin check
	$sql2 = "SELECT * FROM admin WHERE user_id = '$userId' AND password = '$pass' LIMIT 1";



	$result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $sql2);

	if(mysqli_num_rows($result2) == 1){
		echo "Admin Logged In!!";
		header("refresh:2 ; url=welcomeAdmin.php");
	}

	else if(mysqli_num_rows($result) == 1){
		echo "YOU HAVE SUCCESFULLY LOGGED IN";
		header("refresh:2; url=congrats.html");
		exit();
	} else {
		echo "Invalid Password or Username" ;
		header("refresh:2; url=SignIn_SignUp.html");
		exit();
	}

}



