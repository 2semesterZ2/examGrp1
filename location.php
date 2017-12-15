<?php
$title = "The Botanical Park | Location";
$description = "Location of The Botanical Park, information about public transport, parking and how to get there.";
$keywords = "botanical, park, aarhus, green, nature, denmark, city center, trees, history, outdoors, parking, bus, bike, walk, driving, location";
include( "includes/head.php" );
?>

<body>
	<!--Header:-->
	<?php include("includes/header.php"); ?>
	<!--Navigation:-->
	<?php include("includes/navigation.php"); ?>

	<!--Content here-->
	<article>
		<h1>Park's Location</h1>
		<p>The Botanical Park is one of the largest parks in Aarhus, located near the city centre. It is part of the Botanical Gardens, which also contain the Greenhouses and are bordered by Den Gamle By. The park is open all day every day and is free to enter. It is a place where you can surround yourself with green lawns, a variety of interesting trees from its days as a botanical garden, as well as a small stream, with the entire area spanning 21.5 hectares. The perfect place for a walk or jog, as well as picnics and barbecues in the warmer months. Dog walkers are also welcome, although dogs must be kept on leads at all times. Cycling is also only allowed along Peter Holms Vej at the top of the park.</p>
		<div id="mapGoogle">
			<!--Google map of the Botanical Park-->
			<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com" id="googelMaps" onload="setFlag()"></iframe>
		</div>
		<script src="javascript/locationMap.js"></script>

		<!--Adress of the place-->
		<div id="adress"></div>

		<!--Information about the transport-->
		<div id="transportinfo">
			<!--How to get here-->
			<h2>How to get here</h2>

			<div class="leftInformation">
				<h3>On foot</h3>
				<p>There are many entrances to the Botanical Park – 17 in total. To find the most convenient one for you, please refer to the location map.</p>
				<br/>
				<h3>By bicycle</h3>
				<p>There are bicycle racks at the south entrance to the park on Vesterbrogade, where you can park your bicycle. If you’re just cycling through, this is allowed along Peter Holms Vej at the top of the park.</p>
				<br/>
				<h3>By car</h3>
				<p>There is access by car along Peter Holms Vej, from Hjortensgade. This brings you to a round, free of charge, car park called “Poppelpladsen”, where there is nearly always available parking. Additional parking can be found along Eugen Warmings Road, however this gets very full in the summer months because of visitors to Den Gamle By.
				</p>
				<br/>
			</div>
			<div class="rightMap">
				<img src="pictures/botanical-park.jpg" alt="Map of the Botanical Park with its entrances." id="rightMapId"/>
			</div>
			<br/>
			<br/>
			<h3>By bus</h3>
			<!--Table with buses-->
			<table>
				<!--table rows-->
				<tr>
					<!--Table headings-->
					<th>Entrance</th>
					<th>Bus stop</th>
					<th>Buses</th>
				</tr>
				<tr class="greyRow">
					<!--Table data-->
					<td>North</td>
					<td>Vestre Ringgade/Poul Martin Møllers Vej v.Møllevan</td>
					<td>5A, 13</td>
				</tr>
				<tr>
					<td>Eastern</td>
					<td>Langelandsgade v. Skt. Marcus Kirkeplads</td>
					<td>2a, 13, 16, 45</td>
				</tr>
				<tr class="greyRow">
					<td>South</td>
					<td>Den Gamle By. Cereskrydset</td>
					<td>3A, 4A, 11, 14, 15, 19, 43, 44, 113</td>
				</tr>
				<tr>
					<td>South</td>
					<td>Vesterbrogade. Vesterbro Torv</td>
					<td>3A, 4A, 11, 43, 44</td>
				</tr>
			</table>

			<h2>Distance from other local landmarks</h2>
			<p>
				ARoS = 1km (15min walk)<br> Domkirke = 1.4km (20 min walk)<br> Dokk1 = 2km (30 min walk)<br> Magasin = 1.2km (16 min walk)
			</p>

			<h2>Toilets</h2>
			<p>
				There are public toilets available at the Greenhouses. These are open 9.00am – 4.00pm on weekdays and 10.00am – 5.00pm on weekends and public holidays.
			</p>

		</div>

	</article>
	<!--Footer:-->
	<?php include("includes/footer.php"); ?>
</body>

</html>