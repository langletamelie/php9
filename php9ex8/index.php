<?php
$days = strtotime('-22 days');
setlocale (LC_TIME, 'fr_FR.UTF8');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 9EX8</title>
</head>
<body>
    <p><?= strftime('%A %e %B %Y', $days); ?></p>
</body>
</html>
