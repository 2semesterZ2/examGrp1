<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Botanical Park</title>
	</head>

	<body>
		
        <form action="trialAction.php" method="post" enctype="multipart/form-data">
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
                <input type="submit" value="Submit"/>
                <input type="reset" value="Reset"/>
        </form>
        
        
        
       
		</body>
</html>