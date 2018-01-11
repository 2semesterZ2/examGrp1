<?php
$title = "The Botanical Park | Events";
$description = "Information on upcoming and past events taking place at the The Botanical Park.";
$keywords = "botanical, park, aarhus, green, nature, denmark, city center, events, cinema, music festival, groups, , ";
include( "includes/head.php" );
?>

<body>
	<!--Header:-->
	<?php include("includes/header.php"); ?>
	<!--Navigation:-->
	<?php include("includes/navigation.php"); ?>

	<!--Content here-->
	<article>

		<h1>Upcoming Events</h1>
		<p class="welcometext">Here you will find information about all the upcoming events that will be happening soon in the Botanical Park. For more detailed information please see the individual event descriptions below.</p>
		<h2>Zulu Outdoor Cinema</h2>
		<div id="zulubox">
			<picture id="zulu-events">
				<source media="(min-width: 768px)" srcset="pictures/zulu-large.jpg">
				<source media="(min-width: 500px)" srcset="pictures/zulu-medium.jpg">
				<source media="(min-width: 280px)" srcset="pictures/zulu-small.jpg">
				<img src="pictures/zulu-large.jpg" alt="Hundreds of people sitting on the lawn of the Botanical Park watching a movie at night.">
			</picture>

		</div>
		<p>
			TV2’s Zulu hosts their yearly outdoor cinema in the Botanical Park. Bring your friends and family, take a spot on the lawn and enjoy some of the best movies that came out this year! The event is free, and screenings start just after sunset. For more information please visit Zulu’s <a href="http://zulu.tv2.dk/sommerbio">official website</a>.</p>

		<h2>Stella Polaris</h2>
		<div id="stellabox">
			<picture id="stella-events">
				<source media="(min-width: 768px)" srcset="pictures/stella-polaris-aarhus-large.jpg">
				<source media="(min-width: 500px)" srcset="pictures/stella-polaris-aarhus-medium.jpg">
				<source media="(min-width: 280px)" srcset="pictures/stella-polaris-aarhus-small.jpg">
				<img src="pictures/stella-polaris-aarhus-large.jpg" alt="Hundreds of people sitting on the lawn of the Botanical Park during a music festival.">
			</picture>
		</div>
		<p>Stella Polaris is the world’s largest, free downtempo festival. Set in the Botanical Park, Polaris brings established Danish and foreign acts each year to perform for thousands of electronic music fans. The event is free, and all ages! For more information please visit Stella Polaris’ <a href="http://www.stella-polaris.dk/">official website</a>.</p>

		<h2>Red Bull Soapbox Race</h2>
		<div id="soapbox">
			<picture id="soapbox-events">
				<source media="(min-width: 768px)" srcset="pictures/soap-box-large.jpg">
				<source media="(min-width: 500px)" srcset="pictures/soap-box-medium.jpg">
				<source media="(min-width: 280px)" srcset="pictures/soap-box-small.jpg">
				<img src="pictures/soap-box-large.jpg" alt="A soapbox car is rolling downhill in the Botanical Park">
			</picture>
		</div>
		<p>Red Bull gives you wheels. The energy drink hosts an annual soap box race on the slopes of the Botanical Park. Dozens of teams competing in front of thousands of spectators to drive the most creative and fastest soapbox car. Reaching the finishing line on wheels isn’t necessary, having fun is a must. The event is free, and open to all ages! For more information, please visit Red Bull’s <a href="https://www.redbull.com/dk-da/red-bull-soapbox-race-aarhus---botanisk-have">official event website</a>.</p>

		<h1 id="hosting">Thinking of hosting an event?</h1>
		<div id="hostingbox">
			<picture id="book-events">
				<source media="(min-width: 768px)" srcset="pictures/book-an-event-large.jpg">
				<source media="(min-width: 500px)" srcset="pictures/book-an-event-medium.jpg">
				<source media="(min-width: 280px)" srcset="pictures/book-an-event-small.jpg">
				<img src="pictures/book-an-event-large.jpg" alt="A group of people doing yoga in a park.">
			</picture>
		</div>
		<p>Private events such as birthday parties, team building and group exercise classes for up to 30 people may be hosted without the Kommune’s approval. If you are planning something bigger, you can get more information on how to book your event in the Botanical Park through the Brug Aarhus <a href "http://brugaarhus.dk/">website</a>.</p>


	</article>
	<!--Footer:-->
	<?php include("includes/footer.php"); ?>
</body>

</html>