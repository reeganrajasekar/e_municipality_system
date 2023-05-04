<?php 
require("../layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$type = test_input($_POST["type"]);
$id = test_input($_POST["id"]);

$sql = "UPDATE com SET type='$type' WHERE id='$id'";


try {
    $conn->query($sql);
    header("Location:/admin/complaints.php?msg=Updated Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/admin/complaints.php?err=Duplicate Entry Found!");
    die();
}

?>