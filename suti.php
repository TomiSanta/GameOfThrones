<?php
  $bejelentkezesek_szama = 1;                 

  if (isset($_COOKIE["bejelentkezes_szam"])) {
    $bejelentkezesek_szama = $_COOKIE["bejelentkezes_szam"] + 1;  
  }

  
  setcookie("bejelentkezes_szam", $bejelentkezesek_szama, time() + (60*60*24), "/");
?>
<!DOCTYPE>
<html lang="hu">
  <head>
    <title>Sütik</title>
    <meta charset="UTF-8"/>
  </head>
  <body>
    <?php
      if ($bejelentkezesek_szama > 1) {
        echo "Üdvözöllek ismét! Ez a(z) $bejelentkezesek_szama. látogatásod.";
      } else {
        echo "Üdvözöllek a weboldalamon! Ez az 1. látogatásod.";
      }
    ?>
  </body>
</html>