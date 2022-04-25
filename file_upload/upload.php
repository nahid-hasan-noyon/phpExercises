<?php

// * Checking if the user pressed the submit button
if (isset($_POST['submit'])) {

    // hide this part
    echo "<pre>";
    print_r($_FILES['uploaded_file']);
    echo "<pre>";
    // till here. 

    //* all the possible file error in one array.
    $upload_errors = array(
        UPLOAD_ERR_OK => "There is no error, the file uploaded with success.",

        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive in php.ini.",

        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.",

        UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded.",

        UPLOAD_ERR_NO_FILE => "No file was uploaded.",

        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder.",

        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",

        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
    );

    $temp_name = $_FILES['uploaded_file']['tmp_name'];
    $the_file = $_FILES['uploaded_file']['name'];
    $directory = "uploads"; //? here all the files will be stored

    if (move_uploaded_file($temp_name, $directory . "/" . $the_file)) {
        $the_msg = "File Uploaded Successfully. :)";
    } else {
        $the_error = $_FILES['uploaded_file']['error'];
        $the_msg = $upload_errors[$the_error];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <br>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <h2>
            <?php
            if (!empty($upload_errors)) {
                echo $the_msg;
            }
            ?>
        </h2>
        <input type="file" name="uploaded_file" id="">
        <br><br>
        <input type="submit" name="submit">
    </form>

</body>

</html>
