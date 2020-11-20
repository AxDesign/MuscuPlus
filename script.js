$(document).ready(function(){
    $('.btn-create-activity').click(function(){
        if($("#" + "new-activity").length == 0){
            createActivity();
        }else{
            $('.btn-create-activity').before('<p>salut</p>');
        }
    });
    function createActivity(){
        $('.btn-create-activity').before('<form id="new-activity" method="post">\
        <input type="text" name="activity-name" placeholder="Nom de la nouvelle activée">\
        </form>');
    }
});