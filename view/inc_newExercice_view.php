<form id="new-exercice" class="exercice-form-hidden" action="newExercice.php?exercise=<?=$activity?>" method="post">
    <input type="text" name="new-exercice-name" placeholder="Nom du nouvel exercice">
    <input type="number" name="number-series" id="number-series" placeholder="Nombres de séries">
    <input type="number" name="number-repetitions" id="number-repetitions" placeholder="Nombres de répétitions">
    <input type="number" name="time" id="time" placeholder="Temps">
    <button type="submit" name="btn-new-exercice">Créer</button>
</form>