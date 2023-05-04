<?php

session_start();
if(isset($_SESSION["userid"])){

}else{
  header("Location:/?err=Illegal Access!");
  die();
}

$servername = "localhost";
$username = "root";
$password = "trysomething";
$db_name = "muni";
$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>