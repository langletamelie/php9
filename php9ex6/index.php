<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 9EX6</title>
    </head>
    <body>
        <p>
            <?php
            // affichage du nombre de jour de février 2016
            echo cal_days_in_month(CAL_GREGORIAN, 2, 2016);
            ?>
        </p>
    </body>
</html>
