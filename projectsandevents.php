<?php
$title = "The Botanical Park | Projects and Events";
$description = "Information on upcoming and past projects and events taking place at the The Botanical Park.";
$keywords = "botanical, park, aarhus, green, nature, denmark, city center, trees, outdoors, projects, events, cinema, music festival, race";
include( "includes/head.php" );
?>

<body>
	<!--Header:-->
	<?php include("includes/header.php"); ?>
	<!--Navigation:-->
	<?php include("includes/navigation.php"); ?>


	<article>
		<h1>Projects and Events</h1>
		<p class="welcometext">Here you will find information about all the upcoming projects and events in the Botanical Park. For more detailed information please click on one of the images below.</p>

		<!--Four boxes with pictures and short description-->

		<div class="boxesprojectsandevents" id="projects">

			<a href="projects.php">
				<picture id="projects-menu">
					<source media="(min-width: 768px)" srcset="pictures/playground-large.jpg">
					<source media="(min-width: 500px)" srcset="pictures/playground-medium.jpg">
					<source media="(min-width: 280px)" srcset="pictures/playground-small.jpg">
					<img src="pictures/playground-large.jpg" alt="Picture of a playground in a park">
				</picture>
			</a>
			<div>
				<h2> Projects </h2>
			</div>
		</div>

		<div class="boxesprojectsandevents" id="events">

			<a href="events.php">
				<picture id="events-menu">
					<source media="(min-width: 768px)" srcset="pictures/events-large.jpg">
					<source media="(min-width: 500px)" srcset="pictures/events-medium.jpg">
					<source media="(min-width: 280px)" srcset="pictures/events-small.jpg">
					<img class="right-image" src="pictures/events-large.jpg" alt="A picture of people having fun in a park.">
				</picture>
			</a>
			<div>
				<h2>Events</h2>
			</div>
		</div>

		<div class="boxesprojectsandevents" id="gallery">

			<a href="gallery.php">
				<picture id="gallery-menu">
					<source media="(min-width: 768px)" srcset="pictures/gallery-large.jpg">
					<source media="(min-width: 500px)" srcset="pictures/gallery-medium.jpg">
					<source media="(min-width: 280px)" srcset="pictures/gallery-small.jpg">
					<img class="left-image" src="pictures/gallery-large.jpg" alt="A picture of a park landscape in autumn.">
				</picture>
			</a>
			<div>
				<h2>Gallery</h2>
			</div>
		</div>

		<div class="boxesprojectsandevents" id="calendar">

			<a href="calendar.php">
				<picture id="calendar-menu">
					<source media="(min-width: 768px)" srcset="pictures/calendar-large.jpg">
					<source media="(min-width: 500px)" srcset="pictures/calendar-medium.jpg">
					<source media="(min-width: 280px)" srcset="pictures/calendar-small.jpg">
					<img class="right-image" src="pictures/calendar-large.jpg" alt="A picture of a mug and a diary on a wooden desk.">
				</picture>
			</a>
			<div>
				<h2>Calendar</h2>
			</div>
		</div>

		<!--In CSS div.boxesprjectsandevents img {} -->

	</article>

	<!--Footer:-->
	<?php include("includes/footer.php"); ?>
</body>

</html>