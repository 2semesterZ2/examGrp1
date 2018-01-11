	<?php
	$title = "The Botanical Park | Home";
	$description = "The Botanical Park is a beatiful green space, in the heart of Aarhus. It is free and open to everyone. Whether you like walking, jogging or just getting some fresh air, it's the perfect place to be out in nature.";
	$keywords = "botanical, park, aarhus, green, nature, denmark, city center, trees, ducks, walking, activities, outdoors";
	include( "includes/head.php" );
	echo "<link rel='stylesheet' href='css/slideshow.css' type='text/css'>"
	?>


<body>
	<!--Header:-->
	<?php include("includes/header.php"); ?>
	<!--Navigation:-->
	<?php include("includes/navigation.php"); ?>

	<!--Content here-->
	<article>
		<h1>Welcome to the Botanical Park</h1>

		<p>A place where community and nature come together in the heart of Aarhus. From its roots as a Botanical Garden, come and enjoy the variety of trees and plants in this green haven, with friends, family or simply to get some fresh air.</p>

		<!--Clickable display of upcoming/ ongoing projects and events-->
		<h2>See what's happening in the park</h2>
		<div id="projectsandeventsbox" class="slideshow-container">
			<!--Projects and Events slideshow here-->

			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<a href="projects.php#prj1"><picture id="projects-home">
						<source media="(min-width: 768px)" srcset="pictures/playground-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/playground-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/playground-small.jpg">	
					<img src="pictures/playground-large.jpg" alt="Picture of a playground in a park">
					</picture>
				</a>
				<div class="text">New Playground in the Botanical Park</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
                <a href="projects.php#prj2">
					<picture id="roses-home">
						<source media="(min-width: 768px)" srcset="pictures/roses-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/roses-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/roses-small.jpg">	
					<img src="pictures/roses-large.jpg" alt="A close-up photo of pink roses in a park." style="width:100%">
					</picture>
				</a>
				<div class="text">Two New Rose Species Arriving</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
                <a href="projects.php#prj3">
					<picture id="carpark-home">
						<source media="(min-width: 768px)" srcset="pictures/carpark-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/carpark-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/carpark-small.jpg">	
					<img src="pictures/carpark-large.jpg" alt="A photograph of an excavator digging at a construction site" style="width:100%">
					</picture>
				</a>
				<div class="text">Parking Lot Resurfacing</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<br>
		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>

		<script src="javascript/slideshow.js"></script>



		<!--Weather box-->
		<div id="weatherbox">
			<h2>Today's Weather</h2>
			<!--Insert daily weather here-->
			<!--Daily weather from accuweather.com -->
			<!--https://www.accuweather.com/en/dk/aarhus/124594/weather-forecast/124594-->
			<a href="https://www.accuweather.com/en/dk/aarhus/124594/weather-forecast/124594" class="aw-widget-legal">
				<!--
			By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
			-->
			</a>
			<div id="awcc1513243202913" class="aw-widget-current" data-locationkey="124594" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1513243202913"></div>
			<script src="https://oap.accuweather.com/launch.js"></script>
		</div>

		<!--Maintenance box-->
		<div id="maintenancebox">
			<h2>Today's Maintenance</h2>
			<p> The ponds are being cleaned over the next week, starting on 21st December 2017.</p>
			<!--Maintenance log link -->

		</div>
	</article>
	<!--Footer:-->
	<?php include("includes/footer.php"); include("includes/mobileNav.php");?>
</body>

</html>