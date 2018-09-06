<?php
$dateTime1 = new DateTime('2016-05-16');
$dateTime2 = new DateTime();
//calcul de l'interval entre les 2 dates
$interval = $dateTime1->diff($dateTime2);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 9EX5</title>
    </head>
    <body>
        <!--affichage du nombre de jour qui sépare date du jour avec 16/05/18-->
        <p><?= $interval->format('%a jours');?></p>
    </body>
</html>
