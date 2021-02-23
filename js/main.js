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
        $("input[name=exerciseSeries").addClass("hidden");
        $("input[name=exerciseRepetitions").addClass("hidden");
        $("input[name=exerciseTime").removeClass("hidden");
        $("input[name=exerciseDistance").addClass("hidden");
    } else {
        $("input[name=exerciseSeries").removeClass("hidden");
        $("input[name=exerciseRepetitions").removeClass("hidden");
        $("input[name=exerciseTime").addClass("hidden");
        $("input[name=exerciseDistance").addClass("hidden");
    }
}

function TimeAndDistanceIsChecked(){
    if($('#isDistanceAndTime').is(':checked')){
        $('#isTime').prop("checked", false);
        $("input[name=exerciseSeries").addClass("hidden");
        $("input[name=exerciseRepetitions").addClass("hidden");
        $("input[name=exerciseTime").removeClass("hidden");
        $("input[name=exerciseDistance").removeClass("hidden");
    } else{
        $("input[name=exerciseSeries").removeClass("hidden");
        $("input[name=exerciseRepetitions").removeClass("hidden");
        $("input[name=exerciseTime").addClass("hidden");
        $("input[name=exerciseDistance").addClass("hidden");
    }
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
    
    $(window).resize(function(){
        var winHeight = $(window).height();
        if(winHeight <= 400){
            $(".nav-bar").addClass("hidden");
            $("footer").addClass("hidden");
            console.log('Moins de 500 !');
        } else {
            $(".nav-bar").removeClass("hidden");
            $("footer").removeClass("hidden");
        }
    });

    var selectedList;

    if(selectedList === undefined){
        selectedList = $('#activityList option:first-child').text();
        $('#activitySelected').text(selectedList);
    }
    $('#activityList').click(function(){
        selectedList = $('#activityList option:selected').text();
        $('#activitySelected').text(selectedList);
    });

    $('#home__section-exercise__form').submit(function(event){
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
                $('#home__section-exercise__form').append('<p>Envoie de votre exercice réussi</p>');
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
    $(".home__section-activity__carousel").owlCarousel({
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