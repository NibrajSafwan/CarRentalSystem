<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//creating connection
// giving $dbname as a param.. it will create a database and use it..

$con = new mysqli($servername,$username,$password,$dbname);

//checking connection

session_start();

if($con->connect_error){
	die ("Connection failed: " . $con->connect_error);
}


 $row = mysqli_fetch_array(mysqli_query($con,"select max(book_id) from booking"));
 $id= $row['max(book_id)']+1;
// creating table
        $start = mysqli_real_escape_string($con, trim($_POST['start']));
        $stop = mysqli_real_escape_string($con, trim($_POST['stop']));
        $date = mysqli_real_escape_string($con, trim($_POST['date']));
        $time = mysqli_real_escape_string($con, trim($_POST['time']));
        $days = mysqli_real_escape_string($con, trim($_POST['days']));
        $car = mysqli_real_escape_string($con, trim($_POST['car']));
        $customer = $_SESSION['id'];
        if(mysqli_query($con, "INSERT INTO booking(book_id, car_id, customer_id , starts_from, ends_to, start_date, start_time, total_days) VALUES('" . $id . "', '" . $car . "', '" . $customer . "', '" . $start . "', '" . $stop . "', '" . $date . "', '" . $time . "', '" . $days . "')")) {
             echo "<script type='text/javascript'>alert('Booking done');
              window.location='index.php';</script>";
             exit();
            } else {
               echo "Error: " . mysqli_error($con);
            }
            mysqli_close($con);
?>