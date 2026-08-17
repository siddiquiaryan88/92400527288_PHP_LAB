<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_practical"
);

if (!$conn) {
    die("Connection failed");
}

$name = "Rahul";
$email = "rahul@gmail.com";
$course = "PHP";

$sql = "INSERT INTO students (name, email, course)
        VALUES ('$name', '$email', '$course')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>