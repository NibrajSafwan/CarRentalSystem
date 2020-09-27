<?php
session_start();
$customer = $_SESSION['id'];
$car = $_GET['car_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,innitial-scale=1.0">
	<meta name="Author" content="Shahriar">
	<title>Booking</title>
	<style>
			body{
				background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url("formbackground.jpg");
				background-position: center;
				background-attachment: fixed;
				background-attachment: scroll;
				background-repeat: repeat;

			}
			.form1{
				background-color: rgba(242, 242, 242, 0.8);
				width : 30%;
				align-content: center;
				margin-left: 35%;
				margin-top: 40px;
				border-radius: 10px;
				color: black ;
				font-family: "serif";
				
				
				padding: 20px;


			}

			input[type=button], input[type=submit], input[type=reset] {
  				background-color: #E53939;
  				width:100%;
  				border: none;
  				color: white;
  				padding: 16px 32px;
  				text-decoration: none;
  				margin: 4px 2px;
  				cursor: pointer;
  				border-radius: 5px;


				}
			input{
 				width: 100%;
  				padding: 12px 20px;
  				margin: 8px 0;
  				display: inline-block;
  				border: 1px solid #ccc;
  				border-radius: 4px;
  				box-sizing: border-box;
			}

			.hbackground{
				font-size: 60px;
				background-color: rgba(242, 242, 242, 0.8);;
				text-align: center;
				padding: 30px;

			}
			ul{
				list-style-type: none; /* removes the bullets pf the list */
				margin: 0;
				padding: 0;
				overflow: hidden;  /* hide the scroll bar of the top navigation */
				background-color: rgba(255,255,255,0);
				position: -webkit-sticky; /* for safari as it requires this prefix (safari is a web browser developed by Apple) */
				position: sticky; /* stick the top navigation bar  */

				top: 0;  /* sticky postition */

			}
			li{
				float: right;  /*  navigation bar will float on right */
			}
			li a{
				display: block;  /* will display in a block */
				color: black;  /* font color black */
				text-align: center; /*text alignment in the block*/
				padding: 8px 25px; /*14 px for top and bottom padding... 16px for left and right padding */
				text-decoration: none;
				font-size: 20px;
			}
			li a:hover {
				background-color: #E53939; 
				border-radius: 5%;
				color: white; /* font color when hover is generated */
			}

		</style>
</head>
<body>
	<h1 class="hbackground"> Book Your Car!! </h1>
	<form class="form1" action="bookingBackend.php" method = "POST">
			<input type="text" name="start" placeholder=" Journey Starts From" required="required">
			<br/>
			<br/>
			<input type="text" name="stop" placeholder="Journey Ends To" required="required">
			<br/>
			<br/>
			From: <input type="date" name="date" placeholder="ddmmyy" required="required" id="start">
			<br/>
			<br/>
			<input type="hidden" name="customer" value="<?php echo $customer; ?>">
			<input type="hidden" name="car"value="<?php echo $car; ?>">
			Start Time: <input type="time" name="time">
			<br/>
			<br/>
			<input type="number" name="days" placeholder="Number of Days You Want To Rent!!">

			
			<!-- creating the submit button -->
			<input type="submit" value="submit">
		</form>
</body>
</html>