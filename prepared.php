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

$name = "Nitin";
$email = "nitin@gmail.com";
$course = "BCA";

$sql = "INSERT INTO students
        (name, email, course)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $name,
    $email,
    $course
);

if (mysqli_stmt_execute($stmt)) {
    echo "Data inserted using prepared statement.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>