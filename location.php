<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Botanical Park</title>
		<!--CSS here-->
	</head>

	<body>
		<!--Header:-->
		<?php include("header.php"); ?>
		<!--Navigation:-->
		<?php include("navigation.php"); ?>
			
		<!--Content here-->
		<article>
		<h1>Park's Location</h1>
		<div id="mapGoogle">
			
			<!--Google map of the Botanical Park-->
			<iframe>	
			</iframe>
		<!--Adress of the place-->	
		<div id="adress"></div>
		
		<!--Information about the transport-->
		<div id="transportinfo"></div>
		</article>
		<!--Footer:-->
		<?php include("footer.php"); ?>
	</body>

</html>