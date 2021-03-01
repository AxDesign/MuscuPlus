function SendInscription(){
    let formData = {
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