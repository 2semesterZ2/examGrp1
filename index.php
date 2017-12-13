	<?php
	$title = "The Botanical Park | Home";
	$description = "The Botanical Park is a beatiful green space, in the heart of Aarhus. It is free and open to everyone. Whether you like walking, jogging or just getting some fresh air, it's the perfect place to be out in nature.";
	$keywords = "botanical, park, aarhus, green, nature, denmark, city center, trees, ducks, walking, activities, outdoors";
	include( "includes/head.php" );

	?>


<body>
	<!--Header:-->
	<?php include("includes/header.php"); ?>
	<!--Navigation:-->
	<?php include("includes/navigation.php"); ?>

	<!--Content here-->
	<article>
		<h1>Welcome to the Botanical Park</h1>

		<p class="welcometext">A place where community and nature come together in the heart of Aarhus. From its roots as a Botanical Garden, come and enjoy the variety of trees and plants in this green haven, with friends, family or simply to get some fresh air.</p>

		<!--Relevant today box-->
		<h2>See what is happening in the park</h2>
		<div id="projectsandeventsbox">
			<!--Projects and Events slideshow here-->
			<img src="pictures/projectplayground.jpg" alt="Picture of a playground in a park">
		</div>

		<!--Clickable display of upcoming/ ongoing projects and events-->

		<!--Weather box-->
		<div id="weatherbox">
			<h2>Today's Weather</h2>
			<!--Insert daily weather here-->
			<!--Daily weather from meteoblue.com -->
			<!--https://www.meteoblue.com/en/weather/forecast/week/aarhus_denmark_2624652?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget
 -        -->
			<div id="iframe">
				<iframe src="https://www.meteoblue.com/en/weather/widget/three/aarhus_denmark_2624652?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image" frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 460px;height: 597px"></iframe>
			</div>
		</div>
		<!--Maintenance box-->
		<div id="maintenancebox">
			<h2>Today's Maintenance</h2>
			<p>There is no maintenance being carried out today :)<br/> We are mowing the lawns
				<!--insert area description from 10am-->.<br/> The ponds are being cleaned over the next week, starting on [insert date].<br/> A sick tree is being removed from [insert area description] today.</p>
			<!--Maintenance log link -->

		</div>
	</article>
	<!--Footer:-->
	<?php include("includes/footer.php"); ?>
</body>

</html>
