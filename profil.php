<?php
    $profilmegtekintesek_szama = 1; 
    if (isset($_COOKIE["megtekintes_szam"])){
      $profilmegtekintesek_szama = $_COOKIE["megtekintes_szam"] + 1;
    }
      
    setcookie("megtekintes_szam", $profilmegtekintesek_szama, time() + (60*60*24), "/");
          
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8"/>
    <title>Trónok Harca Fanblog Profil &copy;</title>
    <meta name="author" content="Pál Krisztián Zoltán & Sánta Tamás"/>
    <meta name="description" content="Ez az oldal a Trónok Harcáról szól. Afféle rövid bemutatás."/>
    <meta name="keywords" content="Targaryen, Trónok harca, Stark, Jon Snow, Daenerys"/>
    <link rel="icon" href="img/logo.jpg"/>
    <style>
        body{
            background: url("img/hatterfooldal5.jpg") top;
        }
        ul {
            position: absolute;
            left: 600px;
            top: 450px;
            font-size: 25px;
        }

        li {margin: 10px;}

        h2 {
            font-size: 30px;
        }
           

        img {
            position: absolute;
            left: 700px;
            top: 220px;

        }

        form {
            position: absolute;
            left: 620px;
            top: 430px;
        }

        p {
          position: absolute;
          top: 0;
          left: 550px;
        }

        div {
          position: absolute;
          top: -50px;
          left: -650px;

        }

        h3 {
          text-decoration: underline;
        }

        a[href="Fooldal.php"] {
            font-size: 100px;
            position: absolute;
            bottom: 30px;
            left: 0;
            text-decoration: none;
        }

        a[href="kijelentkezes.php"] {
            font-size: 30px;
            position: absolute;
            top: 20px;
            right: 20px;
            text-decoration: none;
        }

        a[href="kijelentkezes.php"]:link { color: papayawhip; }
        a[href="kijelentkezes.php"]:visited { color: black; }
        a[href="kijelentkezes.php"]:hover { color: orangered; }
        a[href="kijelentkezes.php"]:active { color: red; }


        a[href="Fooldal.php"]:link { color: papayawhip; }
        a[href="Fooldal.php"]:visited { color: black; }
        a[href="Fooldal.php"]:hover { color: orangered; }
        a[href="Fooldal.php"]:active { color: red; }
    </style>
</head>
<body>

<?php
  session_start();
  include "fuggvenyek.php";

 
  if (!isset($_SESSION["felhasznalo"])) {
  
    header("Location: bejelentkezes.php");
  }


  echo "<h2>" . $_SESSION["felhasznalo"]["fnev"] . " profilja</h2>";
  echo "<ul>";
  echo "<li>Felhasznalónév: " . $_SESSION["felhasznalo"]["fnev"] . "</li>";
  echo "<li>Kor: " . $_SESSION["felhasznalo"]["kor"] . "</li>";
  echo "<li>E-mail cím: " . $_SESSION["felhasznalo"]["email"] . "</li>";
  echo "<li>Kedvenc karakter: " . $_SESSION["felhasznalo"]["character"] . "</li>";
  echo "<li>Ennyire szeretted a sorozatot: " . $_SESSION["felhasznalo"]["love"] . "</li>";
  echo "</ul>";

      
        

          $profilkep = "img/default.png";  
          $utvonal = "img/" . $_SESSION["felhasznalo"]["fnev"]; 

          $elfogadott_kiterjesztesek = ["png", "jpg", "jpeg"];     

          foreach ($elfogadott_kiterjesztesek as $aktualis_kiterjesztes) { 
            if(file_exists($utvonal . "." . $aktualis_kiterjesztes)) {
              $profilkep = $utvonal . "." . $aktualis_kiterjesztes;  
            }
          }
      


          if (isset($_POST["feltoltes"]) && is_uploaded_file($_FILES["profilkep"]["tmp_name"])) { 
            $fajlfeltoltes_hiba = "";                                     
            profilkepFeltoltes($_SESSION["felhasznalo"]["fnev"]);    
            $kiterjesztes = strtolower(pathinfo($_FILES["profilkep"]["name"], PATHINFO_EXTENSION));   
            $utvonal = "img/" . $_SESSION["felhasznalo"]["fnev"] . "." . $kiterjesztes;

          
            if ($fajlfeltoltes_hiba === "") {
              if ($utvonal !== $profilkep && $profilkep !== "img/default.png") {  
                unlink($profilkep);                        
                header("Location: profil.php");
            } else {
              echo "<p>" . $fajlfeltoltes_hiba . "</p>";
            }
          }
        }

        ?>
        
        
              <img src="<?php echo $profilkep; ?>" alt="Profilkép" height="200" width="200"/>
                <form action="profil.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="profilkep" accept="image/*"/>
                  <input type="submit" name="feltoltes" value="Profilkép módosítása"/>
              </form>
      
      
      <?php
  
        if (isset($_SESSION["felhasznalo"])){ 
          $felhasznalonev = $_SESSION["felhasznalo"]["fnev"];
          if ($profilmegtekintesek_szama > 1) {  ?> 
            <p>Üdvözöllek ismét! Ma <?php echo $profilmegtekintesek_szama ?>. alkalommal nézted meg a profilod kedves <?php echo $felhasznalonev ?>.</p>
        <?php  } else {    ?>                
            <p>Üdvözöllek! Ez az 1. profil megtekintésed a mai nap folyamán.</p>
        <?php }
        } ?>
      
      
    
  
      <a href="Fooldal.php" target="_self" title="Visszaugrás a Főoldalra">&larr;</a>
      <h2><a href="kijelentkezes.php" target="_self" title="Itt jelentkeztetheted ki a fiókod!">Kijelentkezés</a></h2>
      <h3>Ez a karakter lennél a Trónok harcából:</h3>
<div><?php $random = rand(1, 25); ?></div>
<?php
        switch($random){ 
            case 1: ?> <div><img src="img/johnny2.jpg" alt="Jon Snow/Aegon Targaryen"
            title="Ő itt Havas Jon avagy eredeti nevén Aegon Targaryen" width="160" id="johnny2"></div> <?php break;
            case 2: ?> <div><img src="img/jaime.jpg" alt="Jaime Lannister" title="Ő itt Jaime, a királyölő" width="200" id="jaime"></div> <?php break;
            case 3: ?> <div><img src="img/tyrion.jpg" alt="Tyrion Lannister" title="Ő Tyrion, az ördögfióka" width="200" id="tyrion"></div> <?php break;
            case 4: ?> <div><img src="img/catelyn.jpg" alt="Catelyn Tully" title="Ő itt Catelyn, Ned Stark felesége" width="160" id="catelyn"></div> <?php break;
            case 5: ?> <div><img src="img/loras.jpg" alt="Loras Tyrell" title="Ő itt Ser Loras, a viráglovag" width="160" id="loras"></div> <?php break;
            case 6: ?> <div><img src="img/daenerys.jpg" alt="Daenerys Targaryen" title="Ő itt Viharbanszületett Daenerys" width="160" id="dany"></div> <?php break;
            case 7: ?> <div><img src="img/joffrey2.jpg" alt="Joffrey Baratheon" title="Ő itt Joffrey" width="160" id="joffrey"></div> <?php break;
            case 8: ?> <div><img src="img/cersei.jpg" alt="Cersei Lannister" title="Ő itt Cersei, a királyné" width="160" id="cersei"></div> <?php break;
            case 9: ?> <div><img src="img/margerye.jpg" alt="Margaery Tyrell" title="Ő itt Margaery" width="200" id="margaery"></div> <?php break;
            case 10: ?> <div><img src="img/oberin.jpg" alt="Oberyn Martell" title="Ő itt Oberyn" width="160" id="oberyn"></div> <?php break;
            case 11: ?> <div><img src="img/tywin.jpg" alt="Tywin Lannister" title="Ő itt Tywin, Casterly-hegy ura" width="130" id="tywin"></div> <?php break;
            case 12: ?> <div><img src="img/eddard.jpg" alt="Eddard Stark" title="Ő itt Deres ura" width="152" id="ned"></div> <?php break;
            case 13: ?> <div><img src="img/sansa.jpg" alt="Sansa Stark" title="Ő itt Sansa" width="148" id="sansa"></div> <?php break;
            case 14: ?> <div><img src="img/arya.jpg" alt="Arya Stark" title="Ő itt Arya" width="146" id="arya"></div> <?php break;
            case 15: ?> <div><img src="img/robb.jpg" alt="Robb Stark" title="Ő itt Robb Stark, Deres örököse" width="180" id="robb"></div> <?php break;
            case 16: ?> <div><img src="img/bran.jpg" alt="Brandon Stark" title="Ő itt Bran, a varg fiú" width="162" id="bran"></div> <?php break;
            case 17: ?> <div><img src="img/rickon.jpg" alt="Rickon Stark" title="Ő itt Rickon" width="162" id="rickon"></div> <?php break;
            case 18: ?> <div><img src="img/viserys.jpg" alt="Viserys Targaryen" title="Ő itt Viserys, a jogos trónörökös" width="180" id="viserys"></div> <?php break;
            case 19: ?> <div><img src="img/aegon.jpg" alt="Aegon Targaryen" title="Ő itt Hódító Aegon" width="180" id="aegon"></div> <?php break;
            case 20: ?> <div><img src="img/stannis.jpg" alt="Stannis Baratheon" title="Ő itt Stannis, a király öccse" width="160" id="stannis"></div> <?php break;
            case 21: ?> <div><img src="img/olenna.jpg" alt="Olenna Tyrell" title="Ő itt Olenna" width="250" id="olenna"></div> <?php break;
            case 22: ?> <div><img src="img/doran.jpg" alt="Doran Martell" title="Ő itt Doran, Dorne uralkodója" width="190" id="doran"></div> <?php break;
            case 23: ?> <div><img src="img/baleon.jpg" alt="Baleon Greyjoy" title="Ő itt Baleon, a Vas-szigetek ura" width="230" id="baleon"></div> <?php break;
            case 24: ?> <div><img src="img/theon.jpg" alt="Theon Greyjoy" title="Ő itt Theon" width="250" id="theon"></div> <?php break;
            case 25: ?> <div><img src="img/yara.jpg" alt="Yara Greyjoy" title="Ő itt Yara" width="200" id="yara"></div> <?php break;
        }
?>

</body>
</html>