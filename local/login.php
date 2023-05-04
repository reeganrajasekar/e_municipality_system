<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_POST["email"]=="local@gmail.com" && $_POST["password"]=="local") {
    session_start();
    $_SESSION["local"]="u6rv9tb8pq89u";
    header("Location:/local/home.php");
    die();
} else {
    header("Location:/local");
    die();
}
?>