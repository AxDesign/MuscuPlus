<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>
    
    <body id="inscription">
        <form class="box-inscription" method="post">
            <h1>Inscripton</h1>

            <!-- LAST NAME -->
            <div class="text-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nom" name="u_lastName">
            </div>
            <?php 
                if(isset($errorUserLastName)){
                    echo "<div>" . $errorUserLastName . "</div>";
                }
            ?>

            <!-- NAME -->
            <div class="text-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Prénom" name="u_name">
            </div>
            <?php 
                if(isset($errorUserName)){
                    echo "<div>" . $errorUserName . "</div>";
                }
            ?>

            <!-- AGE -->
            <div class="text-box">
                <i class="fas fa-sort-numeric-up-alt"></i>
                <input type="number" placeholder="Age" name="u_age">
            </div>
            <?php 
                if(isset($errorUserAge)){
                    echo "<div>" . $errorUserAge . "</div>";
                }
            ?>
            
            <!-- EMAIL -->
            <div class="text-box">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" name="u_email">
            </div>
            <?php 
                if(isset($errorUserEmail)){
                    echo "<div>" . $errorUserEmail . "</div>";
                }
            ?>

            <!-- PASSWORD -->
            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Mot de passe" name="u_password">
            </div>
            <?php 
                if(isset($errorUserPassword)){
                    echo "<div>" . $errorUserPassword . "</div>";
                }
            ?>

            <!-- PASSWORD CHECK -->
            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Vérification mot de passe" name="u_verifPassword">
            </div>
            <?php 
                if(isset($errorUserCheckPassword)){
                    echo "<div>" . $errorUserCheckPassword . "</div>";
                }
            ?>

            <!--BUTTON SUBMIT -->
            <div class="footer">
                <button class="btn-submit" type="submit" name="inscription">S'inscrire</button>
                <a href="index.php">
                    Vous êtes déja inscrit ?
                </a>
            </div>
        </form>
    </body>
</html>