<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8"/>
    <title>Trónok Harca Fanblog Bejelentkezés &copy;</title>
    <meta name="author" content="Pál Krisztián Zoltán & Sánta Tamás"/>
    <meta name="description" content="Ez az oldal a Trónok Harcáról szól. Afféle rövid bemutatás."/>
    <meta name="keywords" content="Targaryen, Trónok harca, Stark, Jon Snow, Daenerys"/>
    <link rel="icon" href="img/logo.jpg"/>
    <style>
        body{
            background: url("img/hatterfooldal5.jpg") top/cover no-repeat;
        }
        #bejelentkezes {
            position: absolute;
            left: 500px;
            right: 500px;
            top: 200px;
            font-size: x-large;
        }
        input {margin: 10px;}
    </style>
</head>
<body>
<form id="bejelentkezes" action="bejelentkezes.php" method="post"
          enctype="application/x-www-form-urlencoded" autocomplete="on">
        <fieldset>
            <legend>Bejelentkezés:</legend>
            <label>Felhasználónév: <input type="text" name="fnev" minlength="5" size="15" required /></label><br/>
            <label>Jelszó: <input type="password" name="jelszo" minlength="6" maxlength="20"
                                  placeholder="*******" size="15" required /></label><br/>
            <input type="submit" name="bejelentkezes" value="Bejelentkezés" />
        </fieldset>
</form>

<?php
    session_start(); 
    include "fuggvenyek.php";             
    $fiokok = betoltes("felhasznaloi_adatok.txt");  

    $felhasznalonev = "";
    $jelszo = "";
    
    if(isset($_POST["bejelentkezes"])){
        $felhasznalonev = $_POST["fnev"];
        $jelszo = $_POST["jelszo"];
 
        $uzenet = "A bejelentkezés invalid!";

        foreach($fiokok as $fiok){
            if($felhasznalonev === $fiok["fnev"] && $jelszo === $fiok["jelszo"]) {
                $uzenet = "A bejelentkezés SIKERES volt!";
                $_SESSION["felhasznalo"] = $fiok; 
                header("Location: Fooldal.php");
                break;
            } elseif(($felhasznalonev === $fiok["fnev"] && $jelszo !== $fiok["jelszo"]) || ($felhasznalonev !== $fiok["fnev"] && $jelszo === $fiok["jelszo"])) {
                $uzenet = "Hibás felhasználónév vagy jelszó!";
            }
        }

        echo $uzenet . "<br/>";

    }
    include "footer.php";
?>
</body>
</html>