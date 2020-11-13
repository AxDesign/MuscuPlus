<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/cfe9ffe70f.js" crossorigin="anonymous"></script>
        <title>Dashboard</title>
    </head>

    <body id="dashboard">

        <input type="checkbox" id="check">

        <header>
            <label for="check">
                <i class="fas fa-bars" id="sidebar-btn"></i>
            </label>
            <nav class="left-column">
                <h1>Dashboard</h1>
            </nav>
            <nav class="right-column">
                <a href="#" class="btn-logout">Déconnexion</a>
            </nav>
        </header>

        <nav class="sidebar">
            <div class="img-profil">
                <img src="/img/default-user-image.png" alt="default user"/>
                <p><?=$_SESSION['name']?></p>
            </div>
            <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
            <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
            <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </nav>

        <section class="settings">
            <p>Paramètre</p>
            <ul>
                <li><?=$_SESSION["name"]?></li>
                <li><?=$_SESSION["lastName"]?></li>
                <li><?=$_SESSION["age"]?></li>
                <li><?=$_SESSION["email"]?></li>
                <li><?=$_SESSION["password"]?></li>
            </ul>
            <form method="post">
                <input type="text" value="<?=$_SESSION["name"]?>">
                <button type="submit" name="modified">Modifier</button>
            </form>
        </section>











































        

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