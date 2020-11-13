<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Dashboard</title>
    </head>

    <body>
        <h1>Dashborad</h1>

        <?php echo "<p>Prénom:" . $_SESSION["name"] . "</p> \n";
        echo "<p>Nom:" . $_SESSION["lastName"] . "</p> \n";
        echo "\t\t<p>Age:" . $_SESSION["age"] . "</p> \n";
        echo "\t\t<p>Email:" . $_SESSION["email"] . "</p> \n";
        echo "\t\t<p>Mot de Passe:" . $_SESSION["password"] . "</p> \n";

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
        ?>

    </body>
</html>