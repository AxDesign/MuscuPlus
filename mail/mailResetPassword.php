<?php
$header="MIME-Version: 1.0\r\n";
$header.="From:'MuscuPlus.com'<support@muscuplus.com>"."\n";
$header.="Content-Type:text/html; charset='utf-8'"."\n";
$header.="Content-Transfer-Encoding: 8bit";
$message='
<html>
    <body>
        <div align="center">
            <a href="muscuplus/changePassword.php?email='. urldecode($email) .'">Réinitialisez votre mot de passe</a>
        </div>
    </body>
</html>
';

mail($email, "Réinitialisation du Mot De Passe", $message, $header);