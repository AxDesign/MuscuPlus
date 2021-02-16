/*-- Afficher Pop-Up --*/
function DisplayPopUp(){
    $(".pop-up").addClass("display_pop-up");
}
function DisplayPopUpHomeActivity(){
    $(".popUpActivity").addClass("display_pop-up");
}

/*-- Fermé Pop-Up --*/
function ClosePopUp(){
    $(".pop-up").removeClass("display_pop-up");
}
function ClosePopUpHomeActivity(){
    $(".popUpActivity").removeClass("display_pop-up");
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

    $('#createFastExercise').submit(function(event){
        var formData = {
            'activityList' : $('select[name=activityList]').val(),
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

    $('#createExerciseForm').submit(function(event) {

        var formData = {
            'activityId'    : $('input[name=activityId]').val(),
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
    /*--- CAROUSEL ---*/
    $(".activity-tabs").owlCarousel({
        margin: 10,
        loop: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        rewind: true,
        responsive: {
            0:{
                items: 1,
                nav: false,
            },
            400:{
                items: 2,
                nav: false,
            },
            600:{
                items: 3,
                nav: false,
            }
        }
    });
});