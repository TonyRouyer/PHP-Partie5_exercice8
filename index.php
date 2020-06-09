<?php
    $month = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 5 exercice 8</title>
    </head>
    <body>
        <?php
            for ($numero = 0; $numero <= 11; $numero++)
            {
                echo '<p>' . $month[$numero] . '</p>';
            }
        ?>
    </body>
</html>