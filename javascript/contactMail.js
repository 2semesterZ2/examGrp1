function sendEMail() {
    var emailEnding = "students.eaaa.dk";
    var emailBeginning1 = "eaasfk";
    var emailAdress = emailBeginning1 + "@" + emailEnding;

    var subject = $("#rsnCntct :selected").text(); // The text content of the selected option  
    var encSubject = encodeURIComponent(subject);
                
    var message = $('#msgContact').val();
    var encMessage = encodeURIComponent(message);
                
    var senderEMail = $('#senderEMail').val();
    var name = $('#name').val();
    var encName = encodeURIComponent(name); 
                
    var bodyMessage = encMessage + "%0A" + encName + "%0A" + senderEMail;

    var mailtoLink = 'mailto:'+emailAdress+'?subject='+encSubject+'&body='+bodyMessage;
                

     
    alert(mailtoLink);
            

    $('#contactForm').attr('action', mailtoLink);
    
    alert("Thank you for for contacting us. We really value your input, and will get back to you as soon as we can. We try to answer all messages by the end of the next working day.");
}
                
