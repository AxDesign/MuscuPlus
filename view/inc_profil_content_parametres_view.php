<form method="post">
    <p>Paramètres</p>
    <div class="text-box">
        <input type="text" name="newname" placeholder="Prénom" value="<?=$_SESSION["name"]?>">
    </div>
    <div class="text-box">
        <input type="text" name="newlastname" placeholder="Nom" value="<?= $_SESSION['lastName'] ?>">
    </div>
    <div class="text-box">
        <input type="number" name="newage" placeholder="Age" value="<?= $_SESSION['age'] ?>">
    </div>
    <div class="text-box">
        <input type="email" name="newemail" placeholder="Email">
    </div>
    <div class="text-box">
        <input type="password" name="newpassword" placeholder="Mot de passe">
    </div>
    <div class="text-box">
        <input type="password" name="verifpassword" placeholder="Confirmation">
    </div>
    <button class="btn-submit" type="submit" name="modified">Modifier</button>
</form>










































        

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