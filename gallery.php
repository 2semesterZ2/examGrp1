<?php
$title= "The Botanical Park | Gallery";
$description="A gallery of photographs, showcasing the different sides of the The Botanical Park.";
$keywords="botanical, park, aarhus, green, nature, denmark, city center, photos, photography, gallery, pictures, landscape ";
include("includes/head.php"); 

echo ("<script src='http://code.jquery.com/jquery-1.7.1.min.js'></script>");
echo "<link rel='stylesheet' href='css/gallery.css' type='text/css'>"
?>

	<body>
		<!--Header:-->
		<?php include("includes/header.php"); ?>
		<!--Navigation:-->
		<?php include("includes/navigation.php"); ?>

        
        
        <!-- As long as we have Lorem Ipsum here, we will redirect the user to an under construction site -->
        <script>
            //window.location.replace("underconstruction.php");
        </script>
        
        
        
        
		<!--Content here-->
		<article>
			<h1>Gallery</h1>
			<p>Share your masterpieces with us</p>

			<!--Upload your images here-->

			<!--Gallery of uploaded images-->
            <?php include ("transferNbr.php"); ?>

            <div id="imgcontainer">
                <section id="jpg"></section>
            </div>

            <br/>
            <br/>
            <script src="javascript/gallery.js"></script>
		
        </article>
		<!--Footer:-->
		<?php include("includes/footer.php"); ?>
	</body>

</html>
