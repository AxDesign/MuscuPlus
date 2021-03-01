function SendInscription(){
    let formData = {
        form: 'registration',
        userName: $('input[name=userName]').val(),
        userLastName: $('input[name=userLastName]').val(),
        userAge: $('input[name=userAge]').val(),
        userEmail: $('input[name=userEmail]').val(),
        userPassword: $('input[name=userPassword]').val(),
        userVerifPassword: $('input[name=userVerifPassword]').val()
    };

    $.ajax({
        type: "POST",
        url: "account.php",
        data: formData,
        dataType: "json",
        success: function (response) {
            console.log("Réponse recu")
        },
        error: function (response){
            console.log('Error !');
        }
    });
}

function SendConnexion(){
    let formData = {
        form: 'login',
        userEmail: $('input[name=userEmail]').val(),
        userPassword: $('input[name=userPassword]').val()
    };

    $.ajax({
        type: "POST",
        url: "account.php",
        data: formData,
        dataType: "json",
        success: function (response) {
            console.log("Réponse recu");
            window.location.href="main.html";
        },
        error: function (response){
            console.log('Error !');
        }
    });
}