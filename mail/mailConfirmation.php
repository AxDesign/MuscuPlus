<?php
$header="MIME-Version: 1.0\r\n";
$header.="From:'MuscuPlus.com'<support@muscuplus.com>"."\n";
$header.="Content-Type:text/html; charset='utf-8'"."\n";
$header.="Content-Transfer-Encoding: 8bit";
$message='
<html>
    <body>
        <div align="center">
            <a href="muscuplus/confirmation.php?name='. urldecode($userName) .'&key='. $key .'">Confirmez votre compte !</a>
        </div>
    </body>
</html>
';

mail($userEmail, "Confirmation du compte", $message, $header);