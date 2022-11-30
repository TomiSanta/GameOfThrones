<?php
    include "elrejtett.php";
?>



<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Tyrell-ház</title>
    <link rel="icon" href="img/tyrellicon.jpg"/>
    <link rel="stylesheet" href="css/mellekoldalak.css"/>
    <style>
        body{
            background-image: url("img/tyrell hatter2.jpg");
            background-position: top;
        }
        p {
            position: absolute;
            top: 150px;
            right: 1200px;
            color: yellow;
        }
        #loras {
            position: absolute;
            top: 50px;
            right: 50px;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0 4px 50px yellow;
        }
        #olenna {
            position: absolute;
            top: 350px;
            right: 200px;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0 4px 50px yellow;
        }
        #margaery {
            position: absolute;
            bottom: 180px;
            right: 20px;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0 4px 50px yellow;
        }
        tr td, tr th, caption {
            color: yellow;
        }
        #tablazatok, #tablazatok th, #tablazatok td {
            border: hidden;
        }
        #tablazatok {
            position: fixed;
            left: 500px;
        }

a[href="Targaryen.php"] {
    position: absolute;
    top: 0;
    left: 1200px;
    text-decoration: none;
}

a[href="Targaryen.php"]:link { color: papayawhip; }
a[href="Targaryen.php"]:visited { color: yellow; }
a[href="Targaryen.php"]:hover { color: orangered; }
a[href="Targaryen.php"]:active { color: red; }

a[href="Stark.php"] {
    position: absolute;
    top: 30px;
    left: 1200px;
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
    left: 1200px;
    text-decoration: none;
}

a[href="Lannister.php"]:link { color: papayawhip; }
a[href="Lannister.php"]:visited { color: yellow; }
a[href="Lannister.php"]:hover { color: orangered; }
a[href="Lannister.php"]:active { color: red; }


a[href="Baratheon.php"] {
    position: absolute;
    top: 90px;
    left: 1200px;
    text-decoration: none;
}

a[href="Baratheon.php"]:link { color: papayawhip; }
a[href="Baratheon.php"]:visited { color: yellow; }
a[href="Baratheon.php"]:hover { color: orangered; }
a[href="Baratheon.php"]:active { color: red; }

a[href="Greyjoy.php"] {
    position: absolute;
    top: 120px;
    left: 1200px;
    text-decoration: none;
}

a[href="Greyjoy.php"]:link { color: papayawhip; }
a[href="Greyjoy.php"]:visited { color: yellow; }
a[href="Greyjoy.php"]:hover { color: orangered; }
a[href="Greyjoy.php"]:active { color: red; }



a[href="Martell.php"] {
    position: absolute;
    top: 150px;
    left: 1200px;
    text-decoration: none;
}

a[href="Martell.php"]:link { color: papayawhip; }
a[href="Martell.php"]:visited { color: yellow; }
a[href="Martell.php"]:hover { color: orangered; }
a[href="Martell.php"]:active { color: red; }



a[id="aktualis"] {
    position: absolute;
    top: 180px;
    left: 1200px;
    text-decoration: none;
}


a[id="aktualis"]:link { color: black; }
a[id="aktualis"]:visited { color: black; }
a[id="aktualis"]:hover { color: orangered; }
a[id="aktualis"]:active { color: red; }
    </style>
</head>
<body>
    <table id="tablazatok">
        <caption>Tyrell-ház</caption>
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
            <td headers="szekhely">Égi kert</td>
            <td headers="jelmondat">Erőssé növünk</td>
            <td id="vonal" headers="egyeb">-</td>
            <td headers="hit">A Hét Isten</td>
            <td headers="cimer">Arany rózsa</td>
            <td headers="ismert">Loras, Margaery, Olenna</td>
        </tr>
        </tbody>
    </table>
    <p>A Síkvidék urai valamint a másik olyan család, mely nem nevezte magát királyságnak.
        Aegon hódítása után ők lettek Dél őrzői. A lovagi kultúra náluk a legvirágzóbb.
        A Tyrell-ház tudhatja magának a legnagyobb haderőt Westeroson,
        vagyonuk pedig majdnem felér a Lannister-ház-ház aranyával. Szövetségesül mindig olyanokat választanak,
        akiktől a legtöbb hasznot remélik hűségükért. Érdekességük, hogy a nők nagy becsben állnak,
        származásukat is a női vérvonal alapján vezetik vissza.</p>
    <img src="img/loras.jpg" alt="Loras Tyrell" title="Ő itt Ser Loras, a viráglovag" width="250" id="loras">
    <img src="img/olenna.jpg" alt="Olenna Tyrell" title="Ő itt Olenna" width="300" id="olenna">
    <img src="img/margerye.jpg" alt="Margaery Tyrell" title="Ő itt Margaery" width="300" id="margaery">
    <a href="Fooldal.php" target="_self" title="Visszaugrás a Főoldalra">Vissza a Főoldalra</a>
    <a href="Targaryen.php" target="_blank" title="Targaryen-ház rövid ismertetése">Targaryen-ház</a><br/>
    <a href="Stark.php" target="_blank" title="Stark-ház rövid ismertetése">Stark-ház</a> <br />
    <a href="Lannister.php" target="_blank" title="Lannister-ház rövid ismertetése">Lannister-ház</a><br/>
    <a href="Baratheon.php" target="_blank" title="Baratheon-ház rövid ismertetése">Baratheon-ház</a><br/>
    <a href="Greyjoy.php" target="_blank" title="Greyjoy-ház rövid ismertetése">Greyjoy-ház</a> <br/>
    <a href="Martell.php" target="_blank" title="Martell-ház rövid ismertetése">Martell-ház</a> <br/>
    <a id="aktualis" href="Tyrell.php" target="_blank" title="Tyrell-ház rövid ismertetése">Tyrell-ház</a> <br/>
    
</body>
</html>