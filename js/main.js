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
                $(".program-container").append('<a href="exercise.php?programName=' + data.programName + '&activityId=' + data.activityId + '&activityName=' + data.activityName + '">' + data.programName + '</a>');
                ClosePopUp();
            });
        event.preventDefault();
    });

    $('#createExerciseForm').submit(function(event) {

        var formData = {
            'activityId'    : $('input[name=activityId]').val(),
            'programId'    : $('input[name=programId]').val(),
            'exerciseName'    : $('input[name=exerciseName]').val(),
            'exerciseSeries'    : $('input[name=exerciseSeries]').val(),
            'exerciseRepetitions'    : $('input[name=exerciseRepetitions]').val()
        };

        console.log('Click form');
    
        $.ajax({
            type        : 'POST',
            url         : 'createExercise.php',
            data        : formData,
            dataType    : 'json',
            encode      : true
        })
            .done(function(data) {
                $(".exercise-container").append('<p>' + data.exerciseName + '</p>');
                ClosePopUp();
            });
        event.preventDefault();
    });
});