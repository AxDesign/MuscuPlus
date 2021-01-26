var popup = document.getElementsByClassName("pop-up"); //Pop-Up

/*-- Afficher Pop-Up --*/
function DisplayPopUp() {
    popup[0].classList.add("display_pop-up");
}

/*-- Fermé Pop-Up --*/
function ClosePopUp(){
    popup[0].classList.remove("display_pop-up");
}