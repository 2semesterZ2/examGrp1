<?php
$title= "The Botanical Park | History";
$description="Short history of The Botanical Park  from the 19th to the 21st century.";
$keywords="botanical, park, aarhus, green, nature, denmark, city center, trees, history, den gamle by, science museum, greenhouses, volunteers";
 include("includes/head.php"); ?>

	<body>
		<!--Header:-->
		<?php include("includes/header.php"); ?>
		<!--Navigation:-->
		<?php include("includes/navigation.php"); ?>

		<!--Content here-->
		<!--Short history section-->
		<article>
		<h1>Short history of the Botanical Garden</h1>
		<div id="historyTextLeft">
		<p>The Botanical Garden was established as an experimental green area for fruit trees and other useful plants in 1873. By 1875 the area grew to 4.5 hectares, and was part of the ‘Møllehavnen Toft’. This was just east of Hasleforten, where a newly established plant company the ‘Haveselskab’ constructed a nursery and expanded the area. The Haveselskab was later renamed to the ‘Jydske Haveselskab’.</p>
	    <br>
	    <br>
		    <!--Gallery of the pictures on the side-->
        <div class="oldGallery">
		<div class="largePicture" id="picture1">
			<img src="pictures/oldConcert.jpg" alt="Old picture of the concert in the park">
		</div>
		
		<div class="smallPictures" id="picture2">
			<img src="pictures/old_map.jpg" alt="Old picture of the map of the park">
		</div>
		
		<div class="smallPictures" id="picture3">
			<img src="pictures/oldPark.jpg" alt="Old picture of the park">
		</div>
		
		<div class="smallPictures" id="picture4">
			<img src="pictures/oldViewLake.jpg" alt="Old picture of the lake">
		</div>
		</div>

		<!--Old map here-->
		<!-- id="oldMap">
			<img src="pictures/old_map2.jpg" alt="Old map of the Botanical Park">
		</div>-->
		
		<!--Text to left-->
		<p>During the following years, the company rented more land, and the garden grew to approximately 8 hectares. By 1903 a roadmap for future improvements was created, which included plans to build the botanical garden.
		Jydske Haveselskab was struggling to cover the maintenance costs, so by 1911 the Kommune overtook the area, and approved the plans to establish it as a garden.
		The garden grew gradually, and by the end of 1946 it reached 21.5 hectares in size, which is how it stands today.</p>
			</div>
		
		<p>2012 was a big change in the Garden’s life. Following budget negotiations, the Greenhouses were overtaken by the Science museum, and a collaboration started with the Friends of the Botanical Gardens who take care of the Rose Gardens. The volunteers formed to keep elements of the botanical past alive within the park, as this was nearly lost completely.</p>
		
		<!--Interactive map here-->
		<div id="newMap">
			<img src="pictures/areas-map.jpg" alt="Map of the Botanical Park and its areas">
		</div>
		<p>Now the land of the Botanical Garden contains 3 main areas:
		Den Gamle By, which takes up 5 hectares of the Garden and is on of the top tourist attraction in Aarhus official website
		The Greenhouses, operated by the Science museum official website
		And the Botanical Park, which is looked after by the Kommune official website and the Friends of the Botanical Garden Facebook group </p>

		<!--Gallery containing the old pictures here?-->

		</article>
		<!--Footer:-->
		<?php include("includes/footer.php"); ?>
	</body>

</html>
