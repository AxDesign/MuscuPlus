/*-- Afficher Pop-Up --*/
function DisplayPopUp(){
    $(".pop-up").addClass("display_pop-up");
}
function DisplayPopUpHomeActivity(){
    $(".popUpActivity").addClass("display_pop-up");
}
function DisplayPopUpHomeProgram(){
    $(".popUpProgram").addClass("display_pop-up");
}

/*-- Fermé Pop-Up --*/
function ClosePopUp(){
    $(".pop-up").removeClass("display_pop-up");
}
function ClosePopUpHomeActivity(){
    $(".popUpActivity").removeClass("display_pop-up");
}
function ClosePopUpHomeProgram(){
    $(".popUpProgram").removeClass("display_pop-up");
}

function IsChecked(){
    if($('#isTime').is(':checked')){
        $("input[name=exerciseRepetitions").removeClass("exerciseTimeDisplay");
        $("input[name=exerciseRepetitions").addClass("exerciseTimeHidden");
        $("input[name=exerciseTime").removeClass("exerciseTimeHidden");
        $("input[name=exerciseTime").addClass("exerciseTimeDisplay");
    } else{
        $("input[name=exerciseRepetitions").removeClass("exerciseTimeHidden");
        $("input[name=exerciseRepetitions").addClass("exerciseTimeDisplay");
        $("input[name=exerciseTime").removeClass("exerciseTimeDisplay");
        $("input[name=exerciseTime").addClass("exerciseTimeHidden");
    }
}

jQuery(document).ready(function() {
        var selectedList;

        if(selectedList === undefined){
            selectedList = $('#activityList option:first-child').text();
            $('#activitySelected').text(selectedList);
        }
        $('#activityList').click(function(){
            selectedList = $('#activityList option:selected').text();
            $('#activitySelected').text(selectedList);
        });

        $('#createFastProgram').submit(function(event) {

            var formData = {
                'activityId' : $('select[name=activityList]').val(),
                'activityName'   : selectedList,
                'programName'    : $('input[name=program-name]').val()
            };
        
            $.ajax({
                type        : 'POST',
                url         : 'createFastProgram.php',
                data        : formData,
                dataType    : 'json',
                encode      : true
            })
                .done(function(data) {
                    console.log(data);    
                });
            event.preventDefault();
        });

    $('#createFastExercise').submit(function(event){
        var formData = {
            'activityList' : $('select[name=activityList]').val(),
            'programList'  : $('select[name=programList]').val(),
            'exerciseName'    : $('input[name=exerciseName]').val(),
            'exerciseSeries'    : $('input[name=exerciseSeries]').val(),
            'exerciseRepetitions'    : $('input[name=exerciseRepetitions]').val(),
            'exerciseTime'    : $('input[name=exerciseTime]').val()

        };

        $.ajax({
            type: "POST",
            url: "createFastExercise.php",
            data: formData,
            dataType: "json",
            encode : true
        })
            .done(function(data){
                $('#createFastExercise').append('Envoie de votre exercice réussi');
            });
            
        event.preventDefault();
    });

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
                $(".program-container").append('<div class="program-tab">' +
                                                    '<div class="programNumber">' +
                                                        '<p>0</p>' +
                                                    '</div>' +
                                                    '<div class="program-tab-main">' +
                                                        '<p>' + data.programName + '</p>' +
                                                        '<p>0 Exercices</p>' +
                                                    '</div>' +
                                                    '<div class="program-icone">' +
                                                        '<a href="#">' +
                                                            '<i class="fas fa-edit"></i>' +
                                                       '</a>' +
                                                        '<a href="#">' +
                                                            '<i class="fas fa-play"></i>' +
                                                        '</a>' +
                                                        '<a href="#">' +
                                                            '<i class="fas fa-trash"></i>'+
                                                        '</a>' +
                                                    '</div>' +
                                                '</div>');
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
            'exerciseRepetitions'    : $('input[name=exerciseRepetitions]').val(),
            'exerciseTime'    : $('input[name=exerciseTime]').val()
        };

        console.log(formData);
    
        $.ajax({
            type        : 'POST',
            url         : 'createExercise.php',
            data        : formData,
            dataType    : 'json',
            encode      : true,
            error       : function (xhr, ajaxOptions, thrownError) {
                alert("Erreur technique, merci de renouveller votre demande plus tard ou de contacter le support technique");
                console.log(xhr.status);
                console.log(thrownError);
            }
        })
            .done(function(data) {
                if($('#isTime').is(':checked')){

                    $(".exercise-container").append('<div class="exercise-tab">' +
                                                        '<div class="exerciseNumber">' +
                                                            '<p>0</p>' +
                                                        '</div>' +
                                                        '<div class="exercise-tab-main">' +
                                                            '<p>' + data.exerciseName + '</p>' +
                                                            '<p>' + data.exerciseSeries + ' x ' + data.exerciseTime + ' min.</p>' +
                                                        '</div>' +
                                                        '<div class="exercise-icone">' +
                                                            '<a href="#">' +
                                                                '<i class="fas fa-trash"></i>' +
                                                            '</a>' +
                                                        '</div>' +
                                                    '</div>');
                } else {
                    $(".exercise-container").append('<div class="exercise-tab">' +
                                                        '<div class="exerciseNumber">' +
                                                            '<p>0</p>' +
                                                        '</div>' +
                                                        '<div class="exercise-tab-main">' +
                                                            '<p>' + data.exerciseName + '</p>' +
                                                            '<p>' + data.exerciseSeries + ' x ' + data.exerciseRepetitions + ' répétitions.</p>' +
                                                        '</div>' +
                                                        '<div class="exercise-icone">' +
                                                            '<a href="#">' +
                                                                '<i class="fas fa-trash"></i>' +
                                                            '</a>' +
                                                        '</div>' +
                                                    '</div>');
                }
                ClosePopUp();
            });
        event.preventDefault();
    });
    


});