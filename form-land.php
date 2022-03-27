<?php
$target_dir = "documents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// When student clicks on submit button.
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "<h3>File is an image - " . $check["mime"] . ".  </h3>";
    $uploadOk = 1;
  } else {
    echo "<h3>File is not an image.  </h3>";
  }
}

// If file is already present in documents directory.
if (file_exists($target_file)) {
  echo "<h3>Sorry, file already exists. </h3>";
  $uploadOk = 0;
}

// We are allowing only pdf and png file formats
if (
  $imageFileType != "pdf" && $imageFileType != "png"
) {
  echo "<h3>Sorry, only PDF and PNG files are supported. <h3>";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "<h3>Sorry, your documents was not uploaded. </h3>";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<h3>The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded. </h3> <br>";
  } else {
    echo "<h3>Sorry, there was an error uploading your documents. </h3>";
  }
}
