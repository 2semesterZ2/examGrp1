function sendEMail() {
    //For the moment added one of our emails for testing reasons, breaking it up to later make it easier switching between email adresses (if and swichting the beginnig)
    var emailEnding = "students.eaaa.dk";
    var emailBeginning1 = "eaasfk";
    var emailAdress = emailBeginning1 + "@" + emailEnding;

    //getting the subject from the form and encode it so it can be used in the name (remove spaces)
    var subject = $("#rsnCntct :selected").text(); // The text content of the selected option  
    var encSubject = encodeURIComponent(subject);
     
    //getting the message part from the form and encode it
    var message = $('#msgContact').val();
    var encMessage = encodeURIComponent(message);
       
    //getting the senders Email adress from the form as well as his name, the later is encoded
    var senderEMail = $('#senderEMail').val();
    var name = $('#name').val();
    var encName = encodeURIComponent(name); 
                
    //creating the body message out of the message part an the senders name and his email adress
    var bodyMessage = encMessage + "%0A" + encName + "%0A" + senderEMail;
    //creating the complete mailto link
    var mailtoLink = 'mailto:'+emailAdress+'?subject='+encSubject+'&body='+bodyMessage;
                

    //The alert was added for testing reasons to see whether the mailto link is how it should be 
    //alert(mailtoLink);
            
    //Adding the mailto-link with the form information to the action so that the users mail client will open
    $('#contactForm').attr('action', mailtoLink);
    
    //Informing the user that something happend and thanking him
    alert("Thank you for for contacting us. We really value your input, and will get back to you as soon as we can. We try to answer all messages by the end of the next working day.");
}
                
