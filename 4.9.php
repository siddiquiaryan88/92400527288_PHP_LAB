<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

$message = "";

if (isset($_POST["update"])) {

    $new_username = $_POST["username"];
    $email = $_POST["email"];

    $sql = "UPDATE users 
            SET username='$new_username', email='$email'
            WHERE username='$username'";

    if (mysqli_query($conn, $sql)) {

        $_SESSION["username"] = $new_username;
        $message = "Profile updated successfully.";

        $username = $new_username;

    } else {
        $message = "Error updating profile.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>

<h2>Edit Profile</h2>

<form method="post">

    Username:
    <input type="text" name="username"
           value="<?php echo $user['username']; ?>" required>
    <br><br>

    Email:
    <input type="email" name="email"
           value="<?php echo $user['email']; ?>" required>
    <br><br>

    <input type="submit" name="update" value="Update Profile">

</form>

<p><?php echo $message; ?></p>

</body>
</html>