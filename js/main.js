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

function TimeIsChecked(){
    if($('#isTime').is(':checked')){
        $('#isDistanceAndTime').prop("checked", false);
        $("input[name=exerciseSeries").addClass("exerciseHidden");
        $("input[name=exerciseRepetitions").addClass("exerciseHidden");
        $("input[name=exerciseTime").removeClass("exerciseHidden");
        $("input[name=exerciseDistance").addClass("exerciseHidden");
    } else {
        $("input[name=exerciseSeries").removeClass("exerciseHidden");
        $("input[name=exerciseRepetitions").removeClass("exerciseHidden");
        $("input[name=exerciseTime").addClass("exerciseHidden");
        $("input[name=exerciseDistance").addClass("exerciseHidden");
    }
}

function TimeAndDistanceIsChecked(){
    if($('#isDistanceAndTime').is(':checked')){
        $('#isTime').prop("checked", false);
        $("input[name=exerciseSeries").addClass("exerciseHidden");
        $("input[name=exerciseRepetitions").addClass("exerciseHidden");
        $("input[name=exerciseTime").removeClass("exerciseHidden");
        $("input[name=exerciseDistance").removeClass("exerciseHidden");
    } else{
        $("input[name=exerciseSeries").removeClass("exerciseHidden");
        $("input[name=exerciseRepetitions").removeClass("exerciseHidden");
        $("input[name=exerciseTime").addClass("exerciseHidden");
        $("input[name=exerciseDistance").addClass("exerciseHidden");}
}

/*function IsChecked(){
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
}*/

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
            'exerciseTime'    : $('input[name=exerciseTime]').val(),
            'exerciseDistance'    : $('input[name=exerciseDistance]').val()

        };

        $.ajax({
            type: "POST",
            url: "createExercise.php",
            data: formData,
            dataType: "json",
            encode : true
        })
            .done(function(data){
                $('#createFastExercise').append('<p>Envoie de votre exercice réussi</p>');
            });
            
        event.preventDefault();
    });

    $('#createExerciseForm').submit(function(event) {

        var formData = {
            'activityList'    : $('input[name=activityId]').val(),
            'exerciseName'    : $('input[name=exerciseName]').val(),
            'exerciseSeries'    : $('input[name=exerciseSeries]').val(),
            'exerciseRepetitions'    : $('input[name=exerciseRepetitions]').val(),
            'exerciseTime'    : $('input[name=exerciseTime]').val(),
            'exerciseDistance'    : $('input[name=exerciseDistance]').val()
        };

        console.log(formData);
    
        $.ajax({
            type        : 'POST',
            url         : 'createExercise.php',
            data        : formData,
            dataType    : 'json',
            encode      : true
        })
            .done(function(data){
                $('#createExerciseForm').append('<p>Envoie de votre exercice réussi</p>');
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