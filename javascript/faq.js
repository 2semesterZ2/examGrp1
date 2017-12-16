// Based on the Accordion example from w3schools (https://www.w3schools.com/howto/howto_js_accordion.asp) with apllied changes

//Get ALL the questions from the FAQ; This creates an array with all of them
var questions = document.getElementsByClassName("question");
// i is an index for the for loop
var i;

//loops the number of times there are elements in the question-array, so to say: Will execute the following code as often as there is a question
for (i = 0; i < questions.length; i++) {
    //The i-t (number of) question gets an EventListener which reacts to click events
    questions[i].addEventListener("click", function() {
        //the class of that element is set to active
        this.classList.toggle("active");
        //The answer to that questions is the questions next sibling in the hierarchy, so here the answer-obj is safed in the variable
        var answer = this.nextElementSibling;
        //if the element was already shown it will be set to display none
        if (answer.style.display === "block") {
            answer.style.display = "none";
            //if it wasn't visible befor it will now be shown
        } else {
            answer.style.display = "block";
        }
    });
}