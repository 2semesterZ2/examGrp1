<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Botanical Park</title>
	</head>

	<body>
		
        <?php
            // define variables and set to empty values
            $name = $email = $message = "";
            //define error variables and set to empty values
            $errName = $errEmail = $errMessage = "";
            $formOK = 0;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //Making the Name field a requirement, checking whether it's filled or not and copying it's content after checking
                if (empty($_POST["name"])) {
                    $errName = "Please enter your name.";
                    $formOK = 0;
                } else {
                    $name = test_input($_POST["name"]);
                    $formOK = 1;
                }
                //Making the Email field an requirement, checking whether it's filled or not and copying it's content
                if (empty($_POST["email"])) {
                    $errEmail = "Please enter your contact email adress.";
                    $formOK = 0;
                } else {
                    $email = test_input($_POST["email"]);
                    $formOK = 1;
                }
                //Making the Message field a requirement, checking whether it's filled or not
                if (empty($_POST["message"])) {
                    $errMessage = "Please enter your message.";
                    $formOK = 0;
                } else {
                    $message = test_input($_POST["message"]);
                    $formOK = 1;
                }
            }

            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
        
        //<!-- Here is for working with the uploaded file -->
        
            $target_dir = "uploads/";
            $uploadOk = 1;
            if(isset($_POST["submit"])) {
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                //if(isset($_POST["submit"])) {
                if($formOK == 1){
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
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
                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }
            }
        ?>
        
        <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <!--<form action="trialAction.php" method="post" enctype="multipart/form-data">-->
                Your name: <br/>
                <input type="text" name="name"/>
                <span class="error">* <?php echo $errName;?></span>
                <br/>
                Email: <br/>
                <input type="email" name="email"/>
                <span class="error">* <?php echo $errEmail;?></span>
                <br/>
                Suggestion:
                <br/>
                <textarea name="message" rows="10" cols="30">Please enter your message here.</textarea>
                <span class="error">* <?php echo $errMessage;?></span>
                <br/>
                Attach a picture:
                <br/>
                <input type="file" name="fileToUpload" id="fileToUpload"/>
                <br/>
                <!--<input type="submit" value="Submit"/>-->
                <input type="submit" value="Upload Image" name="submit">
                <input type="reset" value="Reset"/>
            
            
        </form>
        
       
		</body>
</html>