<?php
try {
    $conn = new PDO(
        "mysql:host=localhost;dbname=cricket_academy",
        "root",
        ""
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 2;

    $sql = "DELETE FROM users WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    echo "Record deleted successfully.";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>