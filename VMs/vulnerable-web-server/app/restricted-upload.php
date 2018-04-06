<?php
$target_file = "restricted-uploads/" . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Check if image file is a actual image or fake image
if($_FILES["fileToUpload"]["type"] != "image/jpeg" &&
    $_FILES["fileToUpload"]["type"] != "image/jpg" &&
    $_FILES["fileToUpload"]["type"] != "image/png") {
    echo "Sorry, your file is not an image (only jpeg jpg or png).";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br />Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded 
        to `/restricted-uploads/". basename( $_FILES["fileToUpload"]["name"]). "`.<br /> Congratulation!";
    } else {
        echo "Sorry, there was an server error during the file upload.";
    }
}
?>
