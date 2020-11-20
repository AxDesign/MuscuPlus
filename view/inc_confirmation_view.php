<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
    </head>

    <body id="confirmation">
        <?php
            if(isset($validAccount)){
                echo "<p class='validAccount'>" . $validAccount . "</p>";
    
            }
            if(isset($reValidAccount)){
                echo "<p class='validAccount'>" . $reValidAccount . "</p>";
    
            }
            if(isset($notValidAccount)){
                echo "<p class='notValidAccount'>" . $notValidAccount . "</p>";
    
            }
        ?>
        <div class="back">
            <a href="/index.php"><i class="fas fa-chevron-left"></i><span>Retour</span></a>
        </div>
    </body>
</html>