<?php
 setlocale(LC_TIME, 'fr_FR.utf8');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 9EX3</title>
    </head>
    <body>
        <p>
            <!--affichage de la date en toutes lettres-->
            <?= strftime('%A %d %B %Y');?>
        </p>
    </body>
</html>
