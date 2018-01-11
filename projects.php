<?php
$title = "The Botanical Park | Projects";
$description = "Information on upcoming and past projects taking place at the The Botanical Park.";
$keywords = "botanical, park, aarhus, green, nature, denmark, city center, projects, playground, building, refurbishing, planting, ";
include( "includes/head.php" );
?>

<body>
	<!--Header:-->
	<?php include("includes/header.php"); ?>
	<!--Navigation:-->
	<?php include("includes/navigation.php"); ?>

	<!--Content here-->
	<article>

		<h1>Upcoming Projects in the Botanical Park</h1>
		<p class="welcometext">Here you will find information about all the upcoming projects that will be happening soon in the Botanical Park. For more detailed information please see the individual project descriptions below.</p>
		<h2 id="prj1">New Playground in the Botanical Park</h2>
		<div id="playgroundbox">
			<picture id="playground-projects">
				<source media="(min-width: 768px)" srcset="pictures/playground-large.jpg">
				<source media="(min-width: 500px)" srcset="pictures/playground-medium.jpg">
				<source media="(min-width: 280px)" srcset="pictures/playground-small.jpg">
				<img src="pictures/playground-large.jpg" alt="Picture of a playground in a park">
			</picture>
		</div>
		<p class="welcometext">
			We are excited to announce that a new all-inclusive playground will be coming soon to the Botanical Park! With a variety of different structures and sensory experiences, the playground will be a fun place for children of all ages to interact with each other out in nature. We want this to be a place that brings the community together, and where better to do this than in the heart of the Botanical Park. Meetings are already underway about getting this community-lead project started, so that building can hopefully begin towards the end of 2018.</p>

		<p class="welcometext">We would love to hear from you if you have any suggestions for what to include in this exciting new project. To send us ideas, please see/ fill out the form below.</p>

		<!-- Include the form handler and the upload hanlder-->
		<div id="suggestionform">
			<?php include("includes/pictureAndFormHandler.php"); ?>
			<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
				Your name: <br/>
				<input type="text" name="name"/>
				<span class="error">* <?php echo $errName;?></span>
				<br/> Email: <br/>
				<input type="email" name="email"/>
				<span class="error">* <?php echo $errEmail;?></span>
				<br/> Suggestion:
				<br/>
				<textarea name="message" rows="10" cols="30">Please enter your message here.</textarea>
				<span class="error">* <?php echo $errMessage;?></span>
				<br/> Attach a picture:
				<br/>
				<input type="file" name="fileToUpload" id="fileToUpload"/>
				<br/>
				<input type="submit" value="Upload Image" name="submit">
				<input type="reset" value="Reset"/>
			</form>
		</div>

		<h2 id="prj2">Two New Rose Species Arriving</h2>
		<div id="rosesbox">
			<picture id="roses-projects">
				<source media="(min-width: 768px)" srcset="pictures/roses-large.jpg">
				<source media="(min-width: 500px)" srcset="pictures/roses-medium.jpg">
				<source media="(min-width: 280px)" srcset="pictures/roses-small.jpg">
				<img src="pictures/roses-large.jpg" alt="A close-up photo of pink roses in a park." style="width:100%">
			</picture>
		</div>
		<p class="welcometext">The Friends of the Botanical Garden are re-organising the rose beds to include two new species of roses. Due to growing interest in their work, and an increase in the number of group members, they are now able to expand the rose collection. Work will begin on this project early next month, and we can’t wait to see the results. To see more about the work that the Friends of the Botanical Garden do for the park, visit their <a href="https://www.facebook.com/groups/botaniskhavesvenner/about/">official Facebook page</a>.</p>


		<h2 id="prj3">Parking Lot Resurfacing</h2>
		<div id="parkingbox">
			<picture id="carpark-projects">
				<source media="(min-width: 768px)" srcset="pictures/carpark-large.jpg">
				<source media="(min-width: 500px)" srcset="pictures/carpark-medium.jpg">
				<source media="(min-width: 280px)" srcset="pictures/carpark-small.jpg">
				<img src="pictures/carpark-large.jpg" alt="A photograph of an excavator digging at a construction site" style="width:100%">
			</picture>
		</div>
		<p class="welcometext">The main car park on Peter Holms Vej is in need of resurfacing, which will begin in two weeks’ time. In order to minimise the inconvenience during this time, the Kommune has secured free overflow parking in some of the surrounding roads. A full list of where you can park will be released within the next couple of days. The project should be completed within a month, however this is very weather dependent, so we will be making regular updates as the work progresses.</p>


		<p class="welcometext">To get involved or for more information about any of these projects, feel free to <a href="contact.php">contact</a> us.</p>

	</article>
	<!--Footer:-->
	<?php include("includes/footer.php"); ?>
</body>

</html>