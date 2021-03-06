<?php
$title = "The Botanical Park | History";
$description = "Short history of The Botanical Park  from the 19th to the 21st century.";
$keywords = "botanical, park, aarhus, green, nature, denmark, city center, trees, history, den gamle by, science museum, greenhouses, volunteers";
include( "includes/head.php" );
echo "<link rel='stylesheet' href='css/slideshow.css' type='text/css'>"
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
		<div id="historyMobile">
			<picture id="concert-history">
				<source media="(min-width: 768px)" srcset="pictures/old-concert-large.jpg">
				<source media="(min-width: 500px)" srcset="pictures/old-concert-medium.jpg">
				<source media="(min-width: 280px)" srcset="pictures/old-concert-small.jpg">
				<img src="pictures/old-concert-large.jpg" alt="Old picture of the concert in the park">
			</picture>
		</div>
		<div id="historyTextLeft">
			<p>The Botanical Garden was established as an experimental green area for fruit trees and other useful plants in 1873. By 1875 the area grew to 4.5 hectares, and was part of the ‘Møllehavnen Toft’. This was just east of Hasleforten, where a newly established plant company, the ‘Haveselskab’, constructed a nursery and expanded the area. The Haveselskab was later renamed to the ‘Jydske Haveselskab’.</p>
			<br>
			<!--Gallery of the pictures on the side-->
			<div class="oldGallery">

				<div class="gallerySlides" style="display:block;">
					<div class="numbertext">1 / 6</div>
					<picture id="concert-history">
						<source media="(min-width: 768px)" srcset="pictures/old-concert-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-concert-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-concert-small.jpg">
						<img src="pictures/old-concert-large.jpg" alt="Old picture of the concert in the park">
					</picture>
				</div>

				<div class="gallerySlides">
					<div class="numbertext">2 / 6</div>
					<picture id="map-history">
						<source media="(min-width: 768px)" srcset="pictures/old-map-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-map-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-map-small.jpg">
						<img src="pictures/old-map-large.jpg" alt="Old picture of the map of the park">
					</picture>
				</div>

				<div class="gallerySlides">
					<div class="numbertext">3 / 6</div>
					<picture id="park-history">
						<source media="(min-width: 768px)" srcset="pictures/old-park-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-park-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-park-small.jpg">
						<img src="pictures/old-park-large.jpg" alt="Old picture of the park">
					</picture>

				</div>

				<div class="gallerySlides">
					<div class="numbertext">4 / 6</div>
					<picture id="lake-history">
						<source media="(min-width: 768px)" srcset="pictures/old-lake-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-lake-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-lake-small.jpg">
						<img src="pictures/old-lake-large.jpg" alt="Old picture of the lake">
					</picture>
				</div>

				<div class="gallerySlides">
					<div class="numbertext">5 / 6</div>
					<picture id="windmill-history">
						<source media="(min-width: 768px)" srcset="pictures/old-windmill-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-windmill-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-windmill-small.jpg">
						<img src="pictures/old-windmill-large.jpg" alt="Old picture of the windmill">
					</picture>
				</div>

				<div class="gallerySlides">
					<div class="numbertext">6 / 6</div>
					<picture id="water-history">
						<source media="(min-width: 768px)" srcset="pictures/old-water-large.jpg">
						<source media="(min-width: 500px)" srcset="pictures/old-water-medium.jpg">
						<source media="(min-width: 280px)" srcset="pictures/old-water-small.jpg">
						<img src="pictures/old-water-large.jpg" alt="Old picture of the lake">
					</picture>
				</div>

				<a class="prev" onclick="plusGallerySlides(-1)">❮</a>
				<a class="next" onclick="plusGallerySlides(1)">❯</a>

				<div class="caption-container">
					<p id="caption">Old picture of the concert in the park</p>
				</div>

				<div class="row">
					<div class="column">
						<img class="demo cursor" src="pictures/old-concert-large.jpg" style="width:100%" onclick="currentGallerySlide(1)" alt="Old picture of the concert in the park">
					</div>
					<div class="column">
						<img class="demo cursor" src="pictures/old-map-large.jpg" alt="Old picture of the map of the park" style="width:100%" onclick="currentGallerySlide(2)">
					</div>
					<div class="column">
						<img class="demo cursor" src="pictures/old-park-large.jpg" alt="Old picture of the park" style="width:100%" onclick="currentGallerySlide(3)">
					</div>
					<div class="column">
						<img class="demo cursor" src="pictures/old-lake-large.jpg" alt="Old picture of the lake" style="width:100%" onclick="currentGallerySlide(4)">
					</div>
					<div class="column">
						<img class="demo cursor" src="pictures/old-windmill-large.jpg" alt="Old picture of the windmill" style="width:100%" onclick="currentGallerySlide(5)">
					</div>
					<div class="column">
						<img class="demo cursor" src="pictures/old-water-large.jpg" alt="Old picture of the lake" style="width:100%" onclick="currentGallerySlide(6)">
					</div>
				</div>

			</div>

			<script src="javascript/slideshow.js"></script>

			<!--Old map here-->
			<!-- id="oldMap">
			<img src="pictures/old_map2.jpg" alt="Old map of the Botanical Park">
		</div>-->

			<!--Text to left-->
			<div class="textLeft">
				<p>During the following years, the company rented more land, and the garden grew to approximately 8 hectares. By 1903 a roadmap for future improvements was created, which included plans to build the botanical garden. Jydske Haveselskab was struggling to cover the maintenance costs, so by 1911 the Kommune overtook the area, and approved the plans to establish it as a garden. The garden grew gradually, and by the end of 1946 it reached 21.5 hectares in size, which is how it stands today.</p><br>

				<p>2012 was a big change in the Garden’s life. Following budget negotiations, the Greenhouses were overtaken by the Science museum, and a collaboration started with the Friends of the Botanical Gardens who take care of the Rose Gardens. The volunteers formed to keep elements of the botanical past alive within the park, as this was nearly lost completely.</p>
			</div>
			<div class="clearfix"></div>
			<!--Maps comparison here-->
			<div class="maps">
				<div class="newMap">
					<picture id="areasmap-history">
						<source media="(min-width: 768px)" srcset="pictures/areas-map2-large.png">
						<source media="(min-width: 500px)" srcset="pictures/areas-map2-medium.png">
						<source media="(min-width: 280px)" srcset="pictures/areas-map2-small.png">
						<img src="pictures/areas-map2-large.png" alt="New map">
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
			<div class="textRight" class="clearfix">
				<p>Now the land of the Botanical Garden contains 3 main areas:
					<i><a href="http://www.dengamleby.dk/">Den Gamle By</a></i>, which takes up 5 hectares of the Garden and is one of the top tourist attractions in Aarhus, <i>The Greenhouses</i>, operated by the <a href="http://sciencemuseerne.dk/en/botanical-garden/">Science Museum</a>, and <i>the Botanical Park</i>, which is looked after by <a href="https://www.aarhus.dk/">Aarhus Kommune</a>, and the <a href="https://www.facebook.com/groups/botaniskhavesvenner/about/">Friends of the Botanical Garden</a>.</p>
			</div>

	</article>
	<!--Footer:-->
	<?php include("includes/footer.php"); include("includes/mobileNav.php"); ?>
</body>

</html>