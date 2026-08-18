<?php
$conn = new mysqli("localhost", "root", "", "cricket_academy");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = 1;
$name = "Updated Admin";
$email = "updated@gmail.com";
$phone = "9999999999";

$sql = "UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $name, $email, $phone, $id);

if ($stmt->execute()) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record.";
}

$stmt->close();
$conn->close();
?>