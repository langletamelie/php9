<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 9EX4</title>
    </head>
    <body>
        <p>
            <!--affichage du timestamp du jour-->
            <?= time() ?>
        </p>
        <p>
            <!--affichage du timestamp de mardi 2 aout 2016 15h-->
            <?= mktime(15, 0, 0, 8, 2, 16); ?>
        </p>
    </body>
</html>
