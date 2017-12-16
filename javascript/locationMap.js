//The google API key that needs to be added
var gK = "YOUR_GOOGLE_API_KEY";

//API key is added to the link
var link = "https://www.google.com/maps/embed/v1/place?key="+gK+"&q=aarhus+botanical+garden";

//flag for controlling whether the map is already loaded or not
var flag = false;

//changes the link in the iFrame to the googleMaps link
function addMap() {
    document.getElementById('googelMaps').src = link;
}

//checks whetjer the map was already loaded or not to not run into an infinite loop
function setFlag() {
    if (flag === false) {
        addMap(); 
    }
    flag = true;  
}

