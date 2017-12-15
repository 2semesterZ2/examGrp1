//get the 'Events and Projects' button and add an onClick listener to it so it reacts like a link
var btnEvents = document.getElementById("btnEventsAndProjects");
btnEvents.addEventListener("click", function() {window.location.href = "projectsandevents.php";});
    
//get the 'Visitor Information' button and add an onClick listener to it so it reacts like a link
var btnVisitInfo = document.getElementById("btnVisitInfo");
btnVisitInfo.addEventListener("click", function() {window.location.href = "visitorinfo.php";});