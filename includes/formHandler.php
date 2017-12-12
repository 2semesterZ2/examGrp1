<?php
//Based on the form-handling and follow up examples on w3schools; https://www.w3schools.com/php/php_forms.asp

    // define variables and set to empty values
    $name = $email = $message = "";
    //define error variables and set to empty values
    $errName = $errEmail = $errMessage = "";
    //set formOK variable for later use in the file handling
    $formOK = 0;

    //check whether there was a HTTP post request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Making the Name field a requirement, checking whether it's filled or not and copying it's content after checking
        if (empty($_POST["name"])) {
            $errName = "Please enter your name.";
            $formOK = 0;
        } else {
            //saving the name
            $name = test_input($_POST["name"]);
            $formOK = 1;
        }
        //Making the Email field an requirement, checking whether it's filled or not and copying it's content
        if (empty($_POST["email"])) {
            $errEmail = "Please enter your contact email adress.";
            $formOK = 0;
        } else {
            //savin the email address
            $email = test_input($_POST["email"]);
            $formOK = 1;
        }
        //Making the Message field a requirement, checking whether it's filled or not
        if (empty($_POST["message"])) {
            $errMessage = "Please enter your message.";
            $formOK = 0;
        } else {
            //savin the message
            $message = test_input($_POST["message"]);
            $formOK = 1;
        }
    }

    //delete unneeded spaces, breaks and slashes to reduce the risk of cross-site-scripting attacks
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>