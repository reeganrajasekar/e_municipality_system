<?php 
require("./db.php");

$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL UNIQUE,
    email VARCHAR(500) NOT NULL UNIQUE,
    password VARCHAR(500) NOT NULL,
    address VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully<br>";
} else {
    echo "Error creating table: user";
}

$sql = "CREATE TABLE IF NOT EXISTS com (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    userid INT(6) NOT NULL,
    com VARCHAR(1000) NOT NULL,
    type VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table com created successfully<br>";
} else {
    echo "Error creating table: com";
}
?>