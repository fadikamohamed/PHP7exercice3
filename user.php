<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>User</title>
  </head>
  <body>
    <p>
      <?php
        if (isset($_GET['lastname']) AND isset($_GET['firstname'])) {
          echo 'Votre nom est ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
        }
       ?>
    </p>
  </body>
</html>
