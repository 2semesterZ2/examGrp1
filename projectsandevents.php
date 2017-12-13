<?php
$title= "The Botanical Park | Projects and Events";
$description="Information on upcoming and past projects and events taking place at the The Botanical Park.";
$keywords="botanical, park, aarhus, green, nature, denmark, city center, trees, outdoors, projects, events, cinema, music festival, race";
include("includes/head.php"); ?>

	<body>
		<!--Header:-->
		<?php include("includes/header.php"); ?>
		<!--Navigation:-->
		<?php include("includes/navigation.php"); ?>

		<!--Content here-->

		<article>
		<h1>Projects and Events</h1>
		<p class="welcometext">Here you will find information about all the upcoming projects and events in the Botanical Park.
			For more detailed information please click on one of the images below.</p>

		<!--Four boxes with pictures and short description-->

			<div class="boxesprojectsandevents">

			<img class="left-image" src="pictures/Projects.jpg" alt="Projects">
			<div class="descprojectsandevents"><h2> Projects </h2></div>
			</div>

			<div class="boxesprojectsandevents">

			<img class="right-image" src="pictures/Events.jpg" alt="Events">
			<div class="descprojectsandevents"><h2>Events</h2></div>
			</div>

			<div class="boxesprojectsandevents">

			<img class="left-image" src="pictures/Gallery.jpg" alt="Gallery">
			<div class="descprojectsandevents"><h2>Gallery</h2></div>
			</div>

			<div class="boxesprojectsandevents">

			<img class="right-image" src="pictures/Calendar.jpg" alt="">
			<div class="descprojectsandevents"><h2>Calendar</h2></div>
			</div>

			<!--In CSS div.boxesprjectsandevents img {} -->
			<!--In CSS div.descprojectsandevents {} -->

		</article>

		<!--Footer:-->
		<?php include("includes/footer.php"); ?>
	</body>

</html>
