<?php

try {

    $conn = new PDO(
        "mysql:host=localhost;dbname=php_practical",
        "root",
        ""
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $id = 2;

    $sql = "DELETE FROM students_pdo WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':id' => $id
    ]);

    echo "Data deleted successfully.";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

?>