var gK = "YOUR_GOOGLE_API_KEY";

var link = "https://www.google.com/maps/embed/v1/place?key="+gK+"&q=aarhus+botanical+garden";

var flag = false;

function addMap() {
    document.getElementById('googelMaps').src = link;
}


function setFlag() {
    if (flag === false) {
        addMap(); 
    }
    flag = true;  
}

