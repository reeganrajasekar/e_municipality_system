<?php require("../layout/db.php");?>
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$com = test_input($_POST["com"]);
$userid = $_SESSION["userid"];


try {
    $sql = "INSERT INTO com(com,type,userid) VALUES('$com','Local Officer','$userid');";
    $conn->query($sql);
    header("Location:/user/complaints.php?msg=Complaint registered Successfully");
    die();
} catch (Exception $e) {
    header("Location:/user/complaints.php?err=Something went Wrong!");
    die();
}
?>