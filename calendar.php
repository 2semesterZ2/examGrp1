<?php
$title= "The Botanical Park | Calendar";
$description="A calendar with all the important dates in the life of the The Botanical Park.";
$keywords="botanical, park, aarhus, green, nature, denmark, city center, calendar, dates, events, maintenance, ";
include("includes/head.php"); ?>

	<body>
		<!--Header:-->
		<?php include("includes/header.php"); ?>
		<!--Navigation:-->
		<?php include("includes/navigation.php"); ?>

        
        <!-- As long as we have Lorem Ipsum here, we will redirect the user to an under construction site -->
        <script>
            window.location.replace("underconstruction.php");
        </script>
        
        
		<!--Content here-->
		<article>
			<h1>Calendar</h1>

			<!--Calendar will be placed here-->

			<!--Information about the projects/events/maintenance will apear here after clicking on one of the dates of the month-->

			<div class="boxSoMe">
			<h3>Share it</h3>
				<!--SoMe icons will be placed here-->
			</div>
		</article>
		<!--Footer:-->
		<?php include("includes/footer.php"); ?>
	</body>

</html>
