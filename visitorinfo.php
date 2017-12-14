<?php
$title = "The Botanical Park | Visitor Information";
$description = "General information and the history of the Botanical Park.";
$keywords = "botanical, park, aarhus, green, nature, denmark, city center, trees, history, outdoors, barbecue, grill, events";
include( "includes/head.php" );
?>

<body>
	<!--Header:-->
	<?php include("includes/header.php"); ?>
	<!--Navigation:-->
	<?php include("includes/navigation.php"); ?>

	<!--Content here-->
	<article>
		<h1>General Information</h1>
		<p>The Botanical Park is one of the largest parks in Aarhus, located near the city centre. It is part of the Botanical Gardens, which also contain the Greenhouses and are bordered by Den Gamle By. The park is open all day every day and is free to enter. It is a place where you can surround yourself with green lawns, a variety of interesting trees from its days as a botanical garden, as well as a small stream, with the entire area spanning 21.5 hectares. The perfect place for a walk or jog, as well as picnics and barbecues in the warmer months. Dog walkers are also welcome, although dogs must be kept on leads at all times. Cycling is also only allowed along Peter Holms Vej at the top of the park.</p>

		<!--Two boxes with pictures and short description? or name on each of the pictures?-->

		<div class="boxesvisitorinfo" id="location">
			<a href="location.php"><img src="pictures/location.jpg" alt="A picture of a map showing an aerial view of the Botanical Park."></a>
			<div class="descvisitorinfo">
				<h2>Location</h2>
			</div>
		</div>

		<div class="boxesvisitorinfo" id="history">
			<a href="history.php"><img src="pictures/history.jpg" alt="A black and white picture of people in the park in the summer from the past."></a>
			<div class="descvisitorinfo">
				<h2>History</h2>
			</div>
		</div>

		<!--In CSS div.boxesprjectsandevents img {} -->
		<!--In CSS div.descprojectsandevents {} -->

	</article>
	<!--Footer:-->
	<?php include("includes/footer.php"); ?>

</body>

</html>
