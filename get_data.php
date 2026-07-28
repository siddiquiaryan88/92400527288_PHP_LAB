<?php

$target_path = "uploads/"; //Location for uploadind files
$target_path = $target_path . basename( $_FILES['fileToUploads']['name']);

if(move_uploaded_file($_FILES['fileToUploads']['tmp_name'], $target_path)) {

echo "File uploaded successfully!";

} else{

echo "Sorry, file not uploaded, please try again!";

}

?>