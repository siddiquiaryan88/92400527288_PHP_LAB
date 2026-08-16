<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_practical"
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    course VARCHAR(100) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Students table created successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>