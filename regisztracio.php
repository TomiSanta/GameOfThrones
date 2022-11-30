
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8"/>
    <title>Trónok Harca Fanblog Regisztráció &copy;</title>
    <meta name="author" content="Pál Krisztián Zoltán & Sánta Tamás"/>
    <meta name="description" content="Ez az oldal a Trónok Harcáról szól. Afféle rövid bemutatás."/>
    <meta name="keywords" content="Targaryen, Trónok harca, Stark, Jon Snow, Daenerys"/>
    <link rel="icon" href="img/logo.jpg"/>
    <style>
        body{
            background: url("img/hatterfooldal5.jpg") top;
        }
        input {margin: 15px;}

        #registration {
            position: absolute;
            right: 500px;
            left: 420px;
            top: 100px;
            font-size: x-large;
        }
        h1 {
            position: absolute;
            right: 400px;
            left: 450px;
        }
  
    </style>
</head>
<body>
    <header>
            <h1>Itt tudsz regisztrálni a Trónok harcás oldalunkra!</h1>
    </header>
        <form id="registration" action="regisztracio.php" method="post"
            enctype="application/x-www-form-urlencoded" autocomplete="off">
            <fieldset>
                <legend>Regisztáció:</legend>
                <label>Felhasználónév: <input type="text" name="fnev" value="<?php if (isset($_POST['fnev'])) echo $_POST['fnev']; ?>" minlength="5" size="20"
                                            placeholder="GoTFanHUN" required/></label><br/>
                <label>Jelszó: <input type="password" name="jelszo" minlength="6" maxlength="20" value="<?php if (isset($_POST['jelszo'])) echo $_POST['jelszo']; ?>"
                                    placeholder="*******" size="15" /></label><br/>
                <label>Jelszó ismét: <input type="password" name="jelszo2" minlength="6" maxlength="20" value="<?php if (isset($_POST['jelszo2'])) echo $_POST['jelszo2']; ?>"
                                    placeholder="*******" size="15"  /></label><br/>
                <label>E-mail-cím: <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"
                                        placeholder="valami@vmi.com" required /></label><br/>
                <label>Kor: <input type="text" name="kor" value="<?php if (isset($_POST['kor'])) echo $_POST['kor']; ?>" placeholder="8" required /></label><br/>
            </fieldset>
                <label class="reg">Mennyire szereted a sorozatot? <input type="range" name="love" value="<?php if (isset($_POST['love'])) echo $_POST['love']; ?>"
                                                                        min="0" max="5" step="1"/></label><br/>
                <label class="reg">Ki a kedvenc szereplőd? <input type="text" name="character" value="<?php if (isset($_POST['character'])) echo $_POST['character']; ?>"
                                                                placeholder="Jon Snow"/> </label><br/>
                <label class="reg">Melyik a kedvenc házad?</label>
                <select name="haz" id="hazak">
                    <option value="valassz">Válassz egy házat</option>
                    <option value="targaryen">Targaryen-ház</option>
                    <option value="stark">Stark-ház</option>
                    <option value="lannister">Lannister-ház</option>
                    <option value="baratheon">Baratheon-ház</option>
                    <option value="targaryen">Greyjoy-ház</option>
                    <option value="martell">Martell-ház</option>
                    <option value="tyrell">Tyrell-ház</option>
                </select><br/>
                <input type="hidden" name="titok" value="Titkos">
                <input type="reset" name="reset" value="Visszaállítás" onclick="return confirm('Biztosan törölni szeretnéd az eddig megadott adatokat?')"/>
                <input type="submit" name="regisztraciogomb" value="Regisztráció" />
        </form>


<?php 
session_start();
include "fuggvenyek.php";             
$fiokok = betoltes("felhasznaloi_adatok.txt"); 

if(isset($_POST["regisztraciogomb"])) {
        $felhasznalonev = $_POST["fnev"];
        $jelszo = $_POST["jelszo"];
        $jelszo2 = $_POST["jelszo2"];
        $email = $_POST["email"];
        $haz = $_POST["haz"];
        $kor = $_POST["kor"];
        $karakter = $_POST["character"];
        $love = $_POST["love"];


        $hibak = [];

  
  if (!isset($_POST["fnev"]) || trim($_POST["fnev"]) === "")
    $hibak[] = "A felhasználónév megadása kötelező!";

  if (!isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "" || !isset($_POST["jelszo2"]) || trim($_POST["jelszo2"]) === "")
    $hibak[] = "A 'jelszó' és a 'jelszó ismét' megadása kötelező!";

  if (!isset($_POST["kor"]) || trim($_POST["kor"]) === "")
    $hibak[] = "A korod megadása kötelező!";

  if (!isset($_POST["email"]) || trim($_POST["email"]) === "")
    $hibak[] = "Egy e-mail cím megadása kötelező!";


  if (isset($_POST["haz"]))        
    $haz = $_POST["haz"];
    
  if (isset($_POST["character"]))        
    $karakter = $_POST["character"];
    
  if (isset($_POST["love"]))     
    $love = $_POST["love"];   


  
  foreach ($fiokok as $fiok) {
    if ($fiok["fnev"] === $felhasznalonev) 
      $hibak[] = "A felhasználónév már foglalt!";
  }

  
  foreach ($fiokok as $fiok) {
    if ($fiok["email"] === $email) 
      $hibak[] = "Ezt az e-mail címet már használták egy regisztráció alkalmával!";
  }

  if(!preg_match('/^[A-Za-z0-9]{2,}[@][a-z]{4,}[.][a-z]{2,}$/', $email))
    $hibak[] = "Az e-mail címnek megfelelő formátumúnak kell lennie!";
 
  if (strlen($jelszo) < 6)
    $hibak[] = "A jelszónak legalább 6 karaktert kell tartalmaznia!";

  if(!preg_match('/[A-Z]/', $jelszo) || !preg_match('/[a-z]/', $jelszo) || !preg_match('/[0-9]/', $jelszo))
    $hibak[] = "A jelszónak tartalmaznia kell nagybetűt, kisbetűt és számot is!";

 
  if ($jelszo !== $jelszo2)
    $hibak[] = "A két jelszó nem egyezik meg!";

  if($kor < 6)
    $hibak[] = "Nem regisztrálhatsz az oldalra ilyen fiatalon!";

  if($kor > 120)
    $hibak[] = "Holtak és Mások nem regisztrálhatnak az oldalunkra!";
  
  
  if (count($hibak) === 0) {   
      $fiokok[] = ["fnev" => $felhasznalonev, "jelszo" => $jelszo, "email" => $email, "kor" => $kor, "love" => $love, "character" => $karakter, "haz" => $haz];
      mentes("felhasznaloi_adatok.txt", $fiokok);
      echo "Sikeres regisztráció!";
      header("Location: bejelentkezes.php");
    } else {
      foreach($hibak as $hiba){
          echo $hiba . "<br/>";
      }
    }
} 
include "footer.php";
?>
</body>
</html>