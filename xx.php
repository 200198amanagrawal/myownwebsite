<?php
session_start();
if(isset($_POST["name"])){ 
$name=$_POST["name"];
$_SESSION["name"] = $name;
}
if(isset($_POST["email1"])){
$mail=$_POST["email1"];}
if(isset($_POST["password1"])){
$pass=$_POST["password1"];}
if(isset($_POST["cpassword1"])){
$cpass=$_POST["cpassword1"];}
if(isset($_POST["buyer"])){
$buy=strtolower($_POST["buyer"]);}
$l="localhost";
$user="root";
$p="";
$db="mywebsite";
$conn = new mysqli($l, $user, $p, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $sql = "INSERT INTO signup (Name,Email,Password,Buyer) VALUES ('$name','$mail','$pass','$buy')";


if($conn->query($sql)===TRUE && $buy=="buyer")
{
  header("Location: ./website2.php");
  exit();
}
if($conn->query($sql)===TRUE && $buy=="seller")
{
  header("Location: ./websiteseller.php");
  exit();
}
$conn->close();
?>