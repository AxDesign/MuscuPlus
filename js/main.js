var activity_popup = document.getElementsByClassName("pop-up_activity"); //Pop-Up de création d'Activitées

/*-- Afficher Pop-Up de création d'Activitées --*/
function DisplayActivityPopUp() {
    activity_popup[0].classList.add("display_pop-up_activity");
}

/*-- Fermé Pop-Up de création d'Activitées --*/
function CloseActivityPopUp(){
    activity_popup[0].classList.remove("display_pop-up_activity");
}