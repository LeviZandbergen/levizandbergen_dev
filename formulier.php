<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="naam" placeholer="Voer hier je naam in">
      <input type="color" name="kleur" placeholer="Voer hier een kleur in">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
$naam = (isset($_POST['naam'])) ? $_POST['naam'] : "";
$kleur = (isset($_POST['kleur'])) ? $_POST['kleur'] : "";
htmlspecialchars($naam);
htmlspecialchars($kleur);

if(isset($_POST['submit'])){
  echo '<div class="tekst"><h1>' . $naam . '</h1></div>';
  echo sprintf('<style type="text/css"> .tekst { color:%s } </style>', $kleur);
}
?>
