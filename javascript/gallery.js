//Only jpegs are uploaded
var jpgcontainer = document.getElementById('jpg');

var nbrOfFiles = $('#nbr').text();

var files = {
  'jpg': nbrOfFiles
};

//Go trough each existing picture
//for (var jpgext in files) {
for (var jpgext in files) {
  for (var i = 0; i < files[jpgext]; i++) {
    var jpgsrc = "gallery/" + (i + 1) + "." + jpgext;
    var jpgimg = new Image();
    jpgimg.src = jpgsrc;
    jpgcontainer.appendChild(jpgimg);
  }
}



        

      
