<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	

</html>
<?php
session_start();
$us='';$pass='';
if(isset($_POST["email"]))
	{
		$us=$_POST["email"];
	}
if(isset($_POST["password"]))
	{
		$pass=$_POST["password"];
	}
$l="localhost";
$user="root";
$p="";
$db="mywebsite";
$conn = new mysqli($l, $user, $p, $db);
$perr="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT Name,Buyer FROM signup WHERE Email='$us' AND Password= '$pass'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$name=$row["Name"];
$buy=strtolower($row["Buyer"]);}
$c=$result->num_rows;
if($c==1 && $buy=='buyer') 
{
    $_SESSION["name"] = $name;
    header("location: ./website2.php");
    exit();
}
else if($c==1 && $buy=='seller')
{
	$_SESSION["name"] = $name;
    header("location: ./websiteseller.php");
    exit();
}
else{
header('location: ./wrong.php');
exit();
}
$conn->close();
?>