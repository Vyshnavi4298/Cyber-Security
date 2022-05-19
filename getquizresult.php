 <?php
session_start();
$email = $_SESSION["email"];
if(isset($email)){
$con = mysqli_connect("localhost","root","","db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (isset($_GET['cn'])){
  $colname = stripslashes($_GET['cn']);
  $colname = mysqli_real_escape_string($con,$colname);
  $query = "SELECT * FROM `users` WHERE email='$email'";
	$result = mysqli_query($con,$query) or die(mysql_error());
}}
echo " ".mysqli_fetch_assoc($result)[$colname]." ";
?>