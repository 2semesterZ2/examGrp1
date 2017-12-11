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
		<h1>Projects and Events</h1>
		<p>Here you will find information about all the upcoming projects and events in the Botanical Park.
			For more detailed information please click on one of the images below.</p>

		<!--Four boxes with pictures and short description-->
			
			<div class="boxesprojectsandevents">Projects</div>
			<img src="/pictures/Projects.jpg" alt="Projects">
			<div class="descprojectsandevents"></div>
			</div>
			
			<div class="boxesprojectsandevents">Events</div>
			<img src="/pictures/Events.jpg" alt="Events">
			<div class="descprojectsandevents"></div>
			</div>
			
			<div class="boxesprojectsandevents">Gallery</div>
			<img src="/pictures/Gallery.jpg" alt="Gallery">
			<div class="descprojectsandevents"></div>
			</div>
			
			<div class="boxesprojectsandevents">Calendar</div>
			<img src="/pictures/Calendar.jpg" alt="">
			<div class="descprojectsandevents"></div>
			</div>
			
			<!--In CSS div.boxesprjectsandevents img {} -->
			<!--In CSS div.descprojectsandevents {} -->
			
		</article>
		
		<!--Footer:-->
		<?php include("footer.php"); ?>
	</body>

</html>