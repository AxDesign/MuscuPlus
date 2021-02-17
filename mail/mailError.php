<?php
$header="MIME-Version: 1.0\r\n";
$header.="From:'MuscuPlus.com'<support@muscuplus.com>"."\n";
$header.="Content-Type:text/html; charset='utf-8'"."\n";
$header.="Content-Transfer-Encoding: 8bit";
$message='
<html>
    <body>
        <div>
            <p>Il y a une erreur sur l\'application MuscuPlus :</p>
            <p>' . $errorIt . '</p>
            ';
            if(isset($errorMsg)){
                $message.= '<p>Explication : ' . $errorMsg . '</p>';
            }

$message.= '
        </div>
    </body>
</html>
';

mail("contact.alexrobert04@gmail.com", "ERREUR !", $message, $header);
