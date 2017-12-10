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
	<h1>Welcome to the Botanical Park</h1>

	<p>A place where community and nature come together in the heart of Aarhus. From its roots as a Botanical Garden, come and enjoy the variety of trees and plants in this green haven, with friends, family or simply to get some fresh air.</p>

	<!--Relevant today box-->
	<h2>See what is happening in the park</h2>
	<!--Clickable display of upcoming/ ongoing projects and events-->

	<!--Weather box-->
	<div id="weatherbox">
		<h2>Today's Weather</h2>
		<!--Insert daily weather here-->
	</div>

	<!--Maintenance box-->
	<div id="maintenancebox">
		<h2>Today's Maintenance</h2>
		<p>There is no maintenance being carried out today :)<br/> We are mowing the lawns
			<!--insert area description from 10am-->.<br/> The ponds are being cleaned over the next week, starting on [insert date].<br/> A sick tree is being removed from [insert area description] today.</p>
		<!--Maintenance log link -->
	</div>

	<div id="projectsandeventsbox">
		<!--Projects and Events slideshow here-->
	</div>

	<!--Footer:-->
	< ? php include( "footer.php" ); ?>
</body>

</ html>