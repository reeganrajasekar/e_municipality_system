<?php 
require("./admin/layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = test_input($_POST["name"]);
$mobile = test_input($_POST["mobile"]);
$email = test_input($_POST["email"]);
$password = test_input($_POST["password"]);
$address = test_input($_POST["address"]);

$sql = "INSERT INTO user(name,mobile,email,password,address) VALUES('$name','$mobile','$email','$password','$address');";


try {
    $conn->query($sql);
    header("Location:/?msg=Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/?err=Duplicate Entry Found!");
    die();
}

?>