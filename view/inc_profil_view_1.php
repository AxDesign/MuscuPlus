<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <title>profil</title>
    </head>

    <body id="profil">

        <input type="checkbox" id="check">

        <header>
            <label for="check">
                <i class="fas fa-bars" id="sidebar-btn"></i>
            </label>
            <nav class="left-column">
                <h1>profil</h1>
            </nav>
            <nav class="right-column">
                <a href="index.php" class="btn-logout">Déconnexion</a>
            </nav>
        </header>

        <nav class="sidebar">
            <div class="img-profil">
                <img src="/img/default-user-image.png" alt="default user"/>
                <!-- <div class="btn-upload">
                    <button class="btn-upload-photo">Choisir la photo</button>
                    <input type="file" name="image_profil">
                </div> -->
                <p><?=$_SESSION['name']?></p>
            </div>
            <a href="#"><i class="fas fa-desktop"></i><span>Tableau de bord</span></a>
            <a href="/statistiques.php"><i class="fas fa-chart-line"></i><span>Satistiques</span></a>
            <a href="/profil.php"><i class="fas fa-sliders-h"></i><span>Paramètres</span></a>
            <a href="/main.php"><i class="fas fa-chevron-left"></i><span>Retour</span></a>
        </nav>

        <section class="settings">











































        

        <!--<?php
        if($_SESSION["admin"] == true){
            ?>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Age</th>
                    <th>Email</th>
                </tr>
            <?php
            foreach($allUsers as $dataUser){
                $uLastName = $dataUser['lastName'];
                $uName = $dataUser['name'];
                $uAge = $dataUser['age'];
                $uEmail = $dataUser['email'];
                ?>  <tr>
                            <td><?=$uLastName?></td>
                            <td><?=$uName?></td>
                            <td><?=$uAge?></td>
                            <td><?=$uEmail?></td>
                            <td>
                                <button>test</button>
                            </td>
                        </tr>
                <?php
            }
            ?>
            </table>
            <?php
        }
        ?> -->

    </body>
</html>