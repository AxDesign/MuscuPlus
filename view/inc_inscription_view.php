<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <form id="inscription" method="post">
            <label>Nom :</label>
            <input type="text" name="u_lastName" id="u_lastName">
            <?php 
                if(isset($errLastNameUser)){
                    echo "<div>" . $errLastNameUser . "</div>";
                }
            ?>

            <label>Prenom :</label>
            <input type="text" name="u_name" id="u_name">
            <?php 
                if(isset($errNameUser)){
                    echo "<div>" . $errNameUser . "</div>";
                }
            ?>

            <label>Age :</label>
            <input type="number" name="u_age" id="u_age">
            <?php 
                if(isset($errAgeUser)){
                    echo "<div>" . $errAgeUser . "</div>";
                }
            ?>
            
            <label>Email :</label>
            <input type="email" name="u_email" id="u_email">
            <?php 
                if(isset($errEmailUser)){
                    echo "<div>" . $errEmailUser . "</div>";
                }
            ?>

            <label>Mot de Passe :</label>
            <input type="password" name="u_password" id="u_password">
            <?php 
                if(isset($errPasswordUser)){
                    echo "<div>" . $errPasswordUser . "</div>";
                }
            ?>

            <label>Vérification du mot de passe :</label>
            <input type="password" name="u_verifPassword" id="u_verifPassword">
            <?php 
                if(isset($errVerifPasswordUser)){
                    echo "<div>" . $errVerifPasswordUser . "</div>";
                }
            ?>

            <button type="submit" name="inscription">S'inscrire</button>
            <a href="connexion.php">
                <p>Vous êtes déja inscrit ?</p>
            </a>
        </form>
    </body>
</html>