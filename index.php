<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3/4</title>
  </head>
  <body>
    <p>
      <?php
        function str($text1, $text2){
          return $text2 . ' ' . $text1;
        }
        echo str('Bonjour', 'Au revoir');
      ?>
    </p>
  </body>
</html>
