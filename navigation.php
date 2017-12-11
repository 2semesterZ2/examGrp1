<nav>

	<!--Drop-down navigation will be here-->
    
    <!-- Code Example for Dropdown Menu from W3Schools -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        .navbar {
            overflow: hidden;
            background-color: #333;
            font-family: Arial;
        }
        
        .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 16px;    
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: red;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
  </style>

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
    
    <script>
        var btnEvents = document.getElementById("btnEventsAndProjects");
        btnEvents.addEventListener("click", function() {window.location.href = "projectsandevents.php";});
        
        var btnVisitInfo = document.getElementById("btnEventsAndProjects");
        btnVisitInfo.addEventListener("click", function() {window.location.href = "visitorinfo.php";});
        
    </script>


</nav>