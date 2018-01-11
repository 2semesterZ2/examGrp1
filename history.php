<?php
$title = "The Botanical Park | History";
$description = "Short history of The Botanical Park  from the 19th to the 21st century.";
$keywords = "botanical, park, aarhus, green, nature, denmark, city center, trees, history, den gamle by, science museum, greenhouses, volunteers";
include( "includes/head.php" );
?>

<body>
	<!--Header:-->
	<?php include("includes/header.php"); ?>
	<!--Navigation:-->
	<?php include("includes/navigation.php"); ?>

	<!--Content here-->
	<!--Short history section-->
	<article>

		<h1>Short History of the Botanical Garden</h1>
		<div id="historyTextLeft">
			<p>The Botanical Garden was established as an experimental green area for fruit trees and other useful plants in 1873. By 1875 the area grew to 4.5 hectares, and was part of the ‘Møllehavnen Toft’. This was just east of Hasleforten, where a newly established plant company, the ‘Haveselskab’, constructed a nursery and expanded the area. The Haveselskab was later renamed to the ‘Jydske Haveselskab’.</p>
			<br>
			<br>
			<!--Gallery of the pictures on the side-->
			<div class="oldGallery">
				<div class="largePicture" id="picture1">
					<picture id="concert-history">
						<source media="(min-width: 768px)" srcset="pictures/old-concert-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-concert-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-concert-small.jpg">
						<img src="pictures/old-concert-large.jpg" alt="Old picture of the concert in the park">
					</picture>
				</div>

				<div class="smallPictures" id="picture2">
					<picture id="map-history">
						<source media="(min-width: 768px)" srcset="pictures/old-map-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-map-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-map-small.jpg">
						<img src="pictures/old-map-large.jpg" alt="Old picture of the map of the park">
					</picture>
				</div>

				<div class="smallPictures" id="picture3">
					<picture id="park-history">
						<source media="(min-width: 768px)" srcset="pictures/old-park-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-park-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-park-small.jpg">
						<img src="pictures/old-park-large.jpg" alt="Old picture of the park">
					</picture>

				</div>

				<div class="smallPictures" id="picture4">
					<picture id="lake-history">
						<source media="(min-width: 768px)" srcset="pictures/old-lake-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-lake-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-lake-small.jpg">
						<img src="pictures/old-lake-large.jpg" alt="Old picture of the lake">
					</picture>
				</div>
			</div>

			<!--Old map here-->
			<!-- id="oldMap">
			<img src="pictures/old_map2.jpg" alt="Old map of the Botanical Park">
		</div>-->

			<!--Text to left-->
			<div class="textLeft">
				<p>During the following years, the company rented more land, and the garden grew to approximately 8 hectares. By 1903 a roadmap for future improvements was created, which included plans to build the botanical garden. Jydske Haveselskab was struggling to cover the maintenance costs, so by 1911 the Kommune overtook the area, and approved the plans to establish it as a garden. The garden grew gradually, and by the end of 1946 it reached 21.5 hectares in size, which is how it stands today.</p><br>

				<p>2012 was a big change in the Garden’s life. Following budget negotiations, the Greenhouses were overtaken by the Science museum, and a collaboration started with the Friends of the Botanical Gardens who take care of the Rose Gardens. The volunteers formed to keep elements of the botanical past alive within the park, as this was nearly lost completely.</p>
			</div>
			<!--Interactive map here-->
			<!-- id="newMap">
			<img src="pictures/areas-map.jpg" alt="Map of the Botanical Park and its areas">
		</div>-->

			<div class="maps">
				<div class="newMap">
					<picture id="areasmap-history">
						<source media="(min-width: 768px)" srcset="pictures/areas-map-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/areas-map-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/areas-map-small.jpg">
						<img src="pictures/areas-map-large.jpg" alt="New map">
					</picture>
				</div>
				<div class="oldMap">
					<picture id="oldmap-history">
						<source media="(min-width: 768px)" srcset="pictures/old-map-vertical-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-map-vertical-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-map-vertical-small.jpg">
						<img src="pictures/old-map-vertical-large.jpg" alt="Old map">
					</picture>
				</div>
			</div>
			<!--Gallery containing the old pictures here?-->
			<div class="textRight">
				<p>Now the land of the Botanical Garden contains 3 main areas:
					<i><a href="http://www.dengamleby.dk/">Den Gamle By</a></i>, which takes up 5 hectares of the Garden and is one of the top tourist attractions in Aarhus, <i>The Greenhouses</i>, operated by the <a href="http://sciencemuseerne.dk/en/botanical-garden/">Science Museum</a>, and <i>the Botanical Park</i>, which is looked after by <a href="https://www.aarhus.dk/">Aarhus Kommune</a>, and the <a href="https://www.facebook.com/groups/botaniskhavesvenner/about/">Friends of the Botanical Garden</a>.</p>
			</div>

	</article>
	<!--Footer:-->
	<?php include("includes/footer.php"); ?>
</body>

</html>