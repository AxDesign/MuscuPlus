/*-- Afficher Pop-Up --*/
function DisplayPopUp(){
    $(".pop-up").addClass("display_pop-up");
}

/*-- Fermé Pop-Up --*/
function ClosePopUp(){
    $(".pop-up").removeClass("display_pop-up");
}


jQuery(document).ready(function() {

    $('#createProgramForm').submit(function(event) {
    
        console.log('Sending form to createProgram.php');

        var formData = {
            'activityId'     : $('input[name=activityId]').val(),
            'activityName'   : $('input[name=activityName]').val(),
            'programName'    : $('input[name=programName]').val()
        };
    
        $.ajax({
            type        : 'POST',
            url         : 'createProgram.php',
            data        : formData,
            dataType    : 'json',
            encode      : true
        })
            .done(function(data) {
                $(".program-container").append('<form action="exercise.php" method="post"><button type="submit">' + data.programName + '</button></form>');
                ClosePopUp();
            });
        event.preventDefault();
    });

    $('#createExerciseForm').submit(function(event) {
    
        console.log('Sending form to exercise.php');

        var formData = {
            'activityId'     : $('input[name=activityId]').val(),
            'activityName'   : $('input[name=activityName]').val(),
            'programName'    : $('input[name=programName]').val()
        };
    
        $.ajax({
            type        : 'POST',
            url         : 'exercise.php',
            data        : formData,
            dataType    : 'json',
            encode      : true
        })
            .done(function(data) {
                $(".program-container").append('<form action="exercise.php" method="post"><button type="submit">' + data.programName + '</button></form>');
                ClosePopUp();
            });
        event.preventDefault();
    });
    
});