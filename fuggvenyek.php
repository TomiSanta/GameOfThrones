<?php
  
  function betoltes($utvonal) {
    $felhasznalok = [];                 

    $file = fopen($utvonal, "r");   
    if ($file === FALSE)          
      die("A fájlt nem sikerült megnyitni, lehet hogy nem is létezik!");

    while (($line = fgets($file)) !== FALSE) { 
      $felhasznalo = unserialize($line);  
      $felhasznalok[] = $felhasznalo;            
    }

    fclose($file);
    return $felhasznalok;       
  }



  function mentes($utvonal, $felhasznalok) {
    $file = fopen($utvonal, "w");   
    if ($file === FALSE)     
      die("A fájlt nem sikerült megnyitni, lehet hogy nem is létezik!");

    foreach($felhasznalok as $felhasznalo) {    
      $szerializalt_felhasznalo = serialize($felhasznalo);  
      fwrite($file, $szerializalt_felhasznalo . "\n");
    }

    fclose($file);
  }


  function profilkepFeltoltes($felhasznalonev) {
    $GLOBALS["fajlfeltoltes_hiba"];  

    if (isset($_FILES["profilkep"]) && is_uploaded_file($_FILES["profilkep"]["tmp_name"])) { 
      $elfogadott_kiterjesztesek = ["png", "jpg", "jpeg"];                                            
      $kiterjesztes = strtolower(pathinfo($_FILES["profilkep"]["name"], PATHINFO_EXTENSION));  

      if (in_array($kiterjesztes, $elfogadott_kiterjesztesek)) {     
        if ($_FILES["profilkep"]["error"] === 0) {      
          if ($_FILES["profilkep"]["size"] <= (1024*1024*40)) {
            $utvonal = "img/" . $felhasznalonev . "." . $kiterjesztes;  

            if (!move_uploaded_file($_FILES["profilkep"]["tmp_name"], $utvonal)) { 
              $GLOBALS["fajlfeltoltes_hiba"] = "A fájl átmozgatása nem sikerült!";
            }
          } else {
            $GLOBALS["fajlfeltoltes_hiba"] = "A fájl mérete meghaladja a 40 MB-ot ezért nem tölthető fel!";
          }
        } else {
          $GLOBALS["fajlfeltoltes_hiba"] = "A fájlfeltöltés sikertelennek bizonyult!";
        }
      } else {
        $GLOBALS["fajlfeltoltes_hiba"] = "A fájl kiterjesztése nem megfelelő! (Csak a png, jpg és jpeg kiterjesztések az elfogadottak!)";
      }
    }
  }
?>