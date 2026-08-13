<?php
// Delete the cookie by setting its expiry time in the past
setcookie("username", "", time() - 3600);

echo "Cookie has been deleted.";
?>