/*-- Afficher Pop-Up --*/
function DisplayPopUp(){
    $(".pop-up").addClass("display_pop-up");
}

/*-- Fermé Pop-Up --*/
function ClosePopUp(){
    $(".pop-up").removeClass("display_pop-up");
}


jQuery(document).ready(function() {

    // process the form
    $('#createProgramForm').submit(function(event) {
    
        console.log('Sending form to createProgram.php');

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'activityId'              : $('input[name=activityId]').val(),
            'activityName'             : $('input[name=activityName]').val(),
            'programName'    : $('input[name=programName]').val()
        };
    
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'createProgram.php', // the url where we want to POST
            data        : formData, // our data object
            //dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {
                $(".program-container").append('<form action="exercise.php" method="post"><button type="submit">' + data.programName + '</button></form>');
                ClosePopUp();
            });
    
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
    
    });