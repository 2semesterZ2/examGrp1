<nav>    
    <!-- Code Example for Dropdown Menu from W3Schools https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp -->
    <!-- Applied changes in CSS and added JavaScript Eventlisteners to the buttons-->
    
    <!-- Adding the small arrow for the DropDown-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- Styling and arranging of the navbar-->
    <link rel="stylesheet" type="text/css" href="navigation.css">

    <!-- Links for the navigation in the wanted order and dropdown classes for the hover-menur -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <div class="dropdown">
            <button id="btnEventsAndProjects" class="dropbtn">Projects &amp; Events  <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="projects.php">Projects</a>
                <a href="events.php">Events</a>
                <a href="gallery.php">Gallery</a>
                <a href="calendar.php">Calendar</a>
            </div>
        </div>
        <div class="dropdown">
            <button id="btnVisitInfo" class="dropbtn">Visitor Information <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="location.php">Location</a>
                <a href="history.php">History</a>
            </div>
        </div>
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
        <a href="blog.php">Blog</a>
    </div>
    
    <!-- EventListener for the buttons to redirect to the overall pages -->
    <script src="navigation.js"></script>
</nav>