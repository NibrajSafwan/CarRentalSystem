<?php

if(isset($_POST['submit'])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername,$username,$password,$dbname);
	//checking connection
	if($conn->connect_error){
		die ("Connection failed: " . $conn->connect_error);
	}
	$msg="";
	//taking the input of image file
	$image = $_FILES['image']['name'];
	//path to store the image
	$target = "carphotos/".basename($image);
	$name = $_POST['car_name'];
	$reg = $_POST['reg_no'];
	$mileage = $_POST['mileage'];
	$fare = $_POST['fare'];
	//insert query
	$sql = "INSERT INTO car (car_name,image,reg_no, mileage, fare) VALUES ('$name','$image','$reg','$mileage', '$fare')";
	//runnting the qurry
	if(mysqli_query($conn,$sql)==TRUE){
		echo "Query Cholse!!!";
	} else {
		echo "error in insertion";
	}
	//moving the uploaded picture to the targeted directory
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		echo "Uploaded Successfully";
	} else {
		echo "There was a problem";
	}

}

?>


<!-- HTML starts -->


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,innitial-scale=1.0">
	<meta name="Author" content="Shahriar">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="adminStyleSheet.css">
</head>
<body>
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Cars</a></li>
		<li><a href="#">Branches</a></li>
		<li><a href="#">Payment</a></li>
		<li><a href="#">History</a></li>
		<li><a href="#">Promotions</a></li>
	</ul>
	<div>
		<h1 class="h1header">Hello Admin!!</h1>
		<form class="form1" method="post" action = "welcomeAdmin.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
  		<br>
  		<br>
  		<input type="file" name="image" onchange="loadfile(event)">
  		<img id="preimage" width="200px" height="200px">
  		<script type="text/javascript">
  			function loadfile(event) {
  				// body...
  				var output = document.getElementById('preimage');
  				output.src=URL.createObjectURL(event.target.files[0]);
  			};
  		</script>
  		<br>
  		<br><input type="text" name="car_name" placeholder="Car Name">
  		<br>
  		<br>
  		  <input type="text" name="reg_no"  placeholder="Registration No">
  		<br>
  		<br>
  		 <input type="number" name="mileage" placeholder="Mileage">
  		<br>
  		<br>	
  		<input type="number" name="fare" placeholder="Fare Per Hour">
  		<br>
  		<br>
  		<input type="submit" name="submit">
		</form>

	</div>
	<br>
	<br>

	<div>
		
		<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";
		$conn = new mysqli($servername,$username,$password,$dbname);
		//checking connection
		if($conn->connect_error){
			die ("Connection failed: " . $conn->connect_error);
		}

		 
		$sql = "SELECT * FROM car";
		$result = mysqli_query($conn,$sql);
		
		while ($row = mysqli_fetch_array($result)) {
      echo "<div >";
      	echo "<img src='carphotos/".$row['image']."' > <br>";
      	echo "<p> Name: ".$row['car_name']."</p> <br>";
      	echo "<p>Reg No: ".$row['reg_no']." </p>";
      echo "</div>";
		} 
		?>

	</div>
	
</body>
</html>