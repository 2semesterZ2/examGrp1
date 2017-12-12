<?php
//Based on the w3school example of how to upload a file via a form; https://www.w3schools.com/php/php_file_upload.asp
     
    //include the form handling in here
    include("formHandler.php");
        
    //<!-- Here is for working with the uploaded file -->
    //target directory where the file should be safed
    $target_dir = "./userinput/";
    //variable to test against in case of an error
    $uploadOk = 1;
    //only if there was a HTTP-post request through the submit button the following code will be reached
    if(isset($_POST["submit"])) {
        //the target_file variable is filled with the directory and the file name
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        //safe the filetype in the variable for checking it later
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is an actual image or fake image
        if($formOK == 1){
            //checks the imagesize - which only works on images. Saves that in the variable. 
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            //if the file was an image, check is NOT false (but true/has a value), so the following will be executed
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size, needs to be under 500kB
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Only allow certain file formats for images
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                //move the uploaded file to the directory where it should go
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "<script> alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.'); </script>";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
?>