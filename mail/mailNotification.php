<?php
$header="MIME-Version: 1.0\r\n";
$header.="From:'MuscuPlus.com'<support@muscuplus.com>"."\n";
$header.="Content-Type:text/html; charset='utf-8'"."\n";
$header.="Content-Transfer-Encoding: 8bit";
$message='
<html>
    <body>
        <div align="center">
            ';
            if($_SERVER['SERVER_NAME'] == 'muscuplus'){
                $message .= 'Votre exercice de ' . $recallList[$idUser]['exoName'] . ' vous attend !';
            } elseif ($_SERVER['SERVER_NAME'] == 'muscuplus.axdesign.fr'){
                $message .= 'Votre exercice de ' . $recallList[$idUser]['exoName'] . ' vous attend !';
            }
$message .= '
        </div>
    </body>
</html>
';

mail($userEmail, "Notification", $message, $header);
