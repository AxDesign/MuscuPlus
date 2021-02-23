<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Font Adobe -->     <link rel="stylesheet" href="https://use.typekit.net/cmp3lqm.css">

        <!-- CSS -->
        <!--- Mes Styles --->   <link rel="stylesheet" href="css/general.css">

        <!-- JS -->
        <!--- Icones --->       <script defer src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <?php require_once('view/inc_error_msg_view.php'); ?>
        <section class="inscription">
            <h1>Inscripton</h1>
            <form class="inscription__form" method="post">
    
                <!-- NAME -->
                <div class="text-box">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Prénom" name="u_name">
                    <?php 
                        if(isset($errorUserName)){
                            echo "<div class='error'>" . $errorUserName . "</div>";
                        }
                    ?>
                </div>
                
                <!-- LAST NAME -->
                <div class="text-box">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nom" name="u_lastName">
                    <?php 
                        if(isset($errorUserLastName)){
                            echo "<div class='error'>" . $errorUserLastName . "</div>";
                        }
                    ?>
                </div>
    
                <!-- AGE -->
                <div class="text-box">
                    <i class="fas fa-sort-numeric-up-alt"></i>
                    <input type="number" placeholder="Age" name="u_age">
                    <?php 
                        if(isset($errorUserAge)){
                            echo "<div class='error'>" . $errorUserAge . "</div>";
                        }
                    ?>
                </div>
                
                <!-- EMAIL -->
                <div class="text-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="u_email">
                    <?php 
                        if(isset($errorUserEmail)){
                            echo "<div class='error'>" . $errorUserEmail . "</div>";
                        }
                    ?>
                </div>
    
                <!-- PASSWORD -->
                <div class="text-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" name="u_password">
                    <?php 
                        if(isset($errorUserPassword)){
                            echo "<div class='error'>" . $errorUserPassword . "</div>";
                        }
                    ?>
                </div>
    
                <!-- PASSWORD CHECK -->
                <div class="text-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Vérification mot de passe" name="u_verifPassword">
                    <?php 
                        if(isset($errorUserCheckPassword)){
                            echo "<div class='error'>" . $errorUserCheckPassword . "</div>";
                        }
                    ?>
                </div>
                <!--BUTTON SUBMIT -->
                <div class="footer">
                    <button class="btn-submit" type="submit" name="inscription">S'inscrire</button>
                    <a href="index.php">
                        <p>Vous êtes déja inscrit ?</p>
                    </a>
                </div>
            </form>
        </section>
    </body>
</html>