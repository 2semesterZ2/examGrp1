//get the 'Events and Projects' button and add an onClick listener to it so it reacts like a link
var btnEvents = document.getElementById("btnEventsAndProjects");
btnEvents.addEventListener("click", function() {window.location.href = "projectsandevents.php";});
    
//get the 'Visitor Information' button and add an onClick listener to it so it reacts like a link
var btnVisitInfo = document.getElementById("btnVisitInfo");
btnVisitInfo.addEventListener("click", function() {window.location.href = "visitorinfo.php";});

//For the search in the website; using AJAX to communicate with the server
//Based on the Example from w3schools AJAX Live Search https://www.w3schools.com/php/php_ajax_livesearch.asp
function showResult(str) {
    //If nothing is entered or all that was entered is deleted the function is stopped and the results cleared
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
    //Handling of the HTTP Request (with XML involved) for different browsers
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
    //if we receive an answer from the server (OK and data) we write that data into the element
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  //we start the GET request 
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
