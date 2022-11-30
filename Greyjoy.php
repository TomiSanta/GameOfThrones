<?php
    include "elrejtett.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Greyjoy-ház</title>
    <link rel="icon" href="img/greyjoyicon.jpg"/>
    <link rel="stylesheet" href="css/mellekoldalak.css"/>
    <style>
        body{
            background-image: url("img/greyjoy hatter2.jpg");
            background-position: top;
        }
        p {
            color: gold;
            position: absolute;
            bottom: -100px;
            left: 1000px;
        }
        #theon {
            position: absolute;
            top: 200px;
            left: 50px;
            border-radius: 10px 10px 10px 10px;
        }
        #yara {
            position: absolute;
            top: 200px;
            right: 50px;
            border-radius: 10px 10px 10px 10px;
        }
        #baleon {
            position: absolute;
            bottom: -20px;
            left: 150px;
            border-radius: 10px 10px 10px 10px;
        }
        #tablazatok, #tablazatok th, #tablazatok td {
            border: 5px solid goldenrod;
        }
        #tablazatok {
            position: fixed;
            left: 400px;

        }
        tr td, tr th, caption {
            color: gold;
        }

        a[href="Targaryen.php"] {
    position: absolute;
    top: 0;
    left: 1400px;
    text-decoration: none;
}

a[href="Targaryen.php"]:link { color: papayawhip; }
a[href="Targaryen.php"]:visited { color: yellow; }
a[href="Targaryen.php"]:hover { color: orangered; }
a[href="Targaryen.php"]:active { color: red; }

a[href="Stark.php"] {
    position: absolute;
    top: 30px;
    left: 1400px;
    text-decoration: none;
}

a[href="Stark.php"]:link { color: papayawhip; }
a[href="Stark.php"]:visited { color: yellow; }
a[href="Stark.php"]:hover { color: orangered; }
a[href="Stark.php"]:active { color:red; }

#aktualis {
    font-size: 25px;}


a[href="Lannister.php"] {
    position: absolute;
    top: 60px;
    left: 1400px;
    text-decoration: none;
}

a[href="Lannister.php"]:link { color: papayawhip; }
a[href="Lannister.php"]:visited { color: yellow; }
a[href="Lannister.php"]:hover { color: orangered; }
a[href="Lannister.php"]:active { color: red; }


a[href="Baratheon.php"] {
    position: absolute;
    top: 90px;
    left: 1400px;
    text-decoration: none;
}

a[href="Baratheon.php"]:link { color: papayawhip; }
a[href="Baratheon.php"]:visited { color: yellow; }
a[href="Baratheon.php"]:hover { color: orangered; }
a[href="Baratheon.php"]:active { color: red; }

a[id="aktualis"] {
    position: absolute;
    top: 120px;
    left: 1400px;
    text-decoration: none;
}

a[id="aktualis"]:link { color: gray; }
a[id="aktualis"]:visited { color: gray; }
a[id="aktualis"]:hover { color: orangered; }
a[id="aktualis"]:active { color: red; }



a[href="Martell.php"] {
    position: absolute;
    top: 150px;
    left: 1400px;
    text-decoration: none;
}

a[href="Martell.php"]:link { color: papayawhip; }
a[href="Martell.php"]:visited { color: yellow; }
a[href="Martell.php"]:hover { color: orangered; }
a[href="Martell.php"]:active { color: red; }



a[href="Tyrell.php"] {
    position: absolute;
    top: 180px;
    left: 1400px;
    text-decoration: none;
}


a[href="Tyrell.php"]:link { color: papayawhip; }
a[href="Tyrell.php"]:visited { color: yellow; }
a[href="Tyrell.php"]:hover { color: orangered; }
a[href="Tyrell.php"]:active { color: red; }

    </style>
</head>
<body>
    <table id="tablazatok">
        <caption>Greyjoy-ház</caption>
        <thead>
        <tr>
            <th id="szekhely">Székhely</th>
            <th id="jelmondat">Jelmondat</th>
            <th id="egyeb">Egyéb mondás</th>
            <th id="hit">Hit</th>
            <th id="cimer">Címer</th>
            <th id="ismert">Ismertebb karakterek</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td headers="szekhely">Vas szigetek</td>
            <td headers="jelmondat">Mi nem vetünk</td>
            <td headers="egyeb">Ami meghalt, nem halhat meg újra</td>
            <td headers="hit">A Vízbefúlt Isten</td>
            <td headers="cimer">Kraken</td>
            <td headers="ismert">Theon, Yara, Baleon</td>
        </tr>
        </tbody>
    </table>
    <p>A Greyjoy-ok szigetlakók, jellemzően a tengereken erősek. Kereskedelemmel, de főként kalózkodással foglalkoznak.
        Erre utal a kifejezés, hogy a megszerzett javakért sóval vagy vassal fizetnek.
        Jellemző tulajdonságuk, hogy nem kötnek szövetségeket, a maguk feje után mennek, és könyörtelenül kihasználják,
        amikor a háborúzó felek hátországa meggyengül  Balon Greyjoy fellázadt Robert Baratheon ellen,
        a Vas-szigetek uralkodójának nevezte ki magát. Kezdetben a háború sikeresnek bizonyult,
        ám Pyke ostrománál vereséget szenvedtek. Két fia meghalt, a harmadikat,
        Theont pedig túszként Ned Starkhoz kellett adnia, így biztosítva továbbiakban az uralkodó iránti hűségét.</p>
    <img src="img/baleon.jpg" alt="Baleon Greyjoy" title="Ő itt Baleon, a Vas-szigetek ura" width="300" id="baleon">
    <img src="img/theon.jpg" alt="Theon Greyjoy" title="Ő itt Theon" width="300" id="theon">
    <img src="img/yara.jpg" alt="Yara Greyjoy" title="Ő itt Yara" width="300" id="yara">
    <a href="Fooldal.php" target="_self" title="Visszaugrás a Főoldalra">Vissza a Főoldalra</a>
    <a href="Targaryen.php" target="_blank" title="Targaryen-ház rövid ismertetése">Targaryen-ház</a><br/>
    <a href="Stark.php" target="_blank" title="Stark-ház rövid ismertetése">Stark-ház</a> <br />
    <a href="Lannister.php" target="_blank" title="Lannister-ház rövid ismertetése">Lannister-ház</a><br/>
    <a href="Baratheon.php" target="_blank" title="Baratheon-ház rövid ismertetése">Baratheon-ház</a><br/>
    <a id="aktualis" href="Greyjoy.php" target="_blank" title="Greyjoy-ház rövid ismertetése">Greyjoy-ház</a> <br/>
    <a href="Martell.php" target="_blank" title="Martell-ház rövid ismertetése">Martell-ház</a> <br/>
    <a href="Tyrell.php" target="_blank" title="Tyrell-ház rövid ismertetése">Tyrell-ház</a> <br/>
</body>
</html>