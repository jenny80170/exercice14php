<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 14</title>
</head>
<body>
  <h1>Faire un tableau en parmètre et qui retourne un tableau trier par ordre alphabétique </h1>
<?php
$languages = array('HTML','CSS','Javascript','PHP');
function sortingBoard($board){
  sort($board);
  foreach ($board as $value) {
    echo $value. ' ';
  }
}
sortingBoard($languages);

  ?>
</body>
</html>
