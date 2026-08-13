<?php
setcookie("username", "Nitin", time() + 3600);

// Redirect using header()
header("Location: welcome.php");
exit();
?>