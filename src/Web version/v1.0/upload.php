<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "csv" ) {
    echo "Sorry, only CSV files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        rename($target_file, "uploads/marker.csv");
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$Fade = fopen("Macro/FadeTime.txt", "w");
fwrite($Fade, $_POST["FadeTime"]);
$Trig = fopen("TC/Trigmode.txt", "w");
fwrite($Trig, $_POST["TrigMode"]);
$FPS = fopen("TC/FPS.txt", "w");
fwrite($FPS, $_POST["FPS"]);
?>
<!DOCTYPE html>
<html>
<body>
<br>
<br>
    <form action="Generate.php" method="post" enctype="multipart/form-data">
        <input type="submit" value="next" name="submit">
    </form>
    </body>
</html>