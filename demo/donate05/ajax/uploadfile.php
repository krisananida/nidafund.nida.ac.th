<?php

    //$last_id = sprintf("%'.07d\n", $last_id);
    $dateStr = date("Ymd.His");
    $target_dir = "../uploadfile/";
    $target_file = $target_dir . $dateStr . "_" . basename($_FILES["evidence"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    /*
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["evidence"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }


    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["evidence"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "pdf" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["evidence"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["evidence"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    */

    $temp_file = $_FILES["evidence"]["tmp_name"];

    if (move_uploaded_file($temp_file, $target_file)) {
        echo $temp_file . "-" . $target_file . " The file ". basename( $_FILES["evidence"]["name"]). " has been uploaded.";
    } else {
        echo $temp_file . "-" . $target_file . "Sorry, there was an error uploading your file.";
    }
?>
