<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/reset.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>
    
    <body id="inscription">
        <form class="box-inscription" method="post">
            <h1>Inscription</h1>
            <div class="text-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nom" name="u_lastName">
            </div>
            <?php 
                if(isset($errLastNameUser)){
                    echo "<div>" . $errLastNameUser . "</div>";
                }
            ?>

            <div class="text-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Prénom" name="u_name">
            </div>
            <?php 
                if(isset($errNameUser)){
                    echo "<div>" . $errNameUser . "</div>";
                }
            ?>

            <div class="text-box">
                <i class="fas fa-sort-numeric-up-alt"></i>
                <input type="number" placeholder="Age" name="u_age">
            </div>
            <?php 
                if(isset($errAgeUser)){
                    echo "<div>" . $errAgeUser . "</div>";
                }
            ?>
            
            <div class="text-box">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" name="u_email">
            </div>
            <?php 
                if(isset($errEmailUser)){
                    echo "<div>" . $errEmailUser . "</div>";
                }
            ?>

            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Mot de passe" name="u_password">
            </div>
            <?php 
                if(isset($errPasswordUser)){
                    echo "<div>" . $errPasswordUser . "</div>";
                }
            ?>

            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Vérification mot de passe" name="u_verifPassword">
            </div>
            <?php 
                if(isset($errVerifPasswordUser)){
                    echo "<div>" . $errVerifPasswordUser . "</div>";
                }
            ?>

            <button class="btn-submit" type="submit" name="inscription">S'inscrire</button>
            <a href="index.php">
                <p>Vous êtes déja inscrit ?</p>
            </a>
        </form>
    </body>
</html>