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

		<!--Content here-->
		<article>
			<h1>Calendar</h1>
            <p>Here you can see our actual and future projects and events dates as well as already known, huger maintenance days. 
                To get more information about a certain event, please just click on it. If you want to safe the date, feel free to export it to your Google Calendar.
            </p>
            <br/>
			<!--Google Calendar to show the dates, everybody can see it but only the persons with the rights can add or change something-->
            <iframe id="cal" src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=opv2225agfn0jd4u3hr5jb0seg%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Europe%2FCopenhagen" style="border-width:0" frameborder="0" scrolling="no"></iframe>

		</article>
		<!--Footer:-->
		<?php include("includes/footer.php"); include("includes/mobileNav.php"); ?>
	</body>

</html>
