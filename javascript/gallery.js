//Only jpg's are uploaded
var jpgcontainer = document.getElementById('jpg');
//Get the number of images on the server
var nbrOfFiles = $('#nbr').text();
//create an array with the right size
var files = {
  'jpg': nbrOfFiles
};

//Go trough each existing picture, append it to the image container as child
for (var jpgext in files) {
    for (var i = 1; i < files[jpgext]; i++) {
        var imgId = "img"+i;
        var jpgsrc = "./gallery/" + (i) + "." + jpgext;
        var jpgimg = new Image();
        jpgimg.src = jpgsrc;
        jpgimg.id = imgId;
        jpgcontainer.appendChild(jpgimg);
        //make the image into a link to show it's huge version
        var wrapCon = "<div class='galleryImg'><a target='_self' href='"+jpgsrc+"'></a></div>";  
        $('#'+imgId).wrap(wrapCon);  
      }
}
