<?php
    include "elrejtett.php";
?>



<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Lannister-ház</title>
    <link rel="icon" href="img/lannistericon.jpg"/>
    <link rel="stylesheet" href="css/mellekoldalak.css"/>
    <style>
        body{
            background-image: url("img/lannister hatter1.jpg");
            background-position: top;
            animation-name: hattervaltas;
            animation-duration: 30s;
            animation-iteration-count: infinite;
            animation-direction: reverse;
        }
        p {
            position: absolute;
            top: 150px;
            left: 1200px;
            color: goldenrod;
        }
        #cersei {
            position: absolute;
            top: 150px;
            left: 20px;
            box-shadow: 0 4px 50px yellow;
            border-radius: 10px 10px 10px 10px;
        }
        #jaime {
            position: absolute;
            top: 250px;
            left: 275px;
            box-shadow: 0 4px 50px yellow;
            border-radius: 10px 10px 10px 10px;
        }
        #tyrion {
            position: absolute;
            bottom: 20px;
            left: 150px;
            box-shadow: 0 4px 50px yellow;
            border-radius: 10px 10px 10px 10px;
        }
        #tywin {
            position: absolute;
            bottom: 225px;
            left: 150px;
            box-shadow: 0 4px 50px yellow;
            border-radius: 10px 10px 10px 10px;
            animation-name: tywinlannister;
            animation-duration: 15s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }
        #tablazatok th, #tablazatok td {
            border: 5px double gold;
        }
        #tablazatok {
            position: absolute;
            left: 400px;

        }
        tr td, tr th, caption {
            color: goldenrod;
        }
        @keyframes hattervaltas {
            0%{ background-image: url("img/lannister hatter1.jpg")}
            50%{ background-image: url("img/lannister hatter2.jpg")}
            100%{ background-image: url("img/lannister hatter1.jpg")}
        }
        a{
            position: absolute;
            bottom: -75px;
        }
        @keyframes tywinlannister {
            from{left: 150px}
            to{left: -250px}
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
    top: 20px;
    left: 1400px;
    text-decoration: none;
}

a[href="Stark.php"]:link { color: papayawhip; }
a[href="Stark.php"]:visited { color: yellow; }
a[href="Stark.php"]:hover { color: orangered; }
a[href="Stark.php"]:active { color:red; }

a[id="aktualis"] {
    position: absolute;
    top: 40px;
    left: 1400px;
    text-decoration: none;
}

a[id="aktualis"]:link { color: black; }
a[id="aktualis"]:visited { color: black; }
a[id="aktualis"]:hover { color: orangered; }
a[id="aktualis"]:active { color: red; }

#aktualis {
    font-size: 20px;}

a[href="Baratheon.php"] {
    position: absolute;
    top: 60px;
    left: 1400px;
    text-decoration: none;
}

a[href="Baratheon.php"]:link { color: papayawhip; }
a[href="Baratheon.php"]:visited { color: yellow; }
a[href="Baratheon.php"]:hover { color: orangered; }
a[href="Baratheon.php"]:active { color: red; }

a[href="Greyjoy.php"] {
    position: absolute;
    top: 80px;
    left: 1400px;
    text-decoration: none;
}

a[href="Greyjoy.php"]:link { color: papayawhip; }
a[href="Greyjoy.php"]:visited { color: yellow; }
a[href="Greyjoy.php"]:hover { color: orangered; }
a[href="Greyjoy.php"]:active { color: red; }



a[href="Martell.php"] {
    position: absolute;
    top: 100px;
    left: 1400px;
    text-decoration: none;
}

a[href="Martell.php"]:link { color: papayawhip; }
a[href="Martell.php"]:visited { color: yellow; }
a[href="Martell.php"]:hover { color: orangered; }
a[href="Martell.php"]:active { color: red; }



a[href="Tyrell.php"] {
    position: absolute;
    top: 120px;
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
        <caption>Lannister-ház</caption>
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
            <td headers="szekhely">Casterly-hegy</td>
            <td headers="jelmondat">Halld üvöltésem</td>
            <td headers="egyeb">Egy Lannister mindig megfizeti az adósságát</td>
            <td headers="hit">A Hét Isten</td>
            <td headers="cimer">Aranyoroszlán</td>
            <td headers="ismert">Tyrion, Jaime, Cersei, Tywin</td>
        </tr>
        </tbody>
    </table>
    <p>Leszármazottai az Andaloknak. Házasságkötéssel lettek kalandorokból a Szikla Királyai.
        Évezredeken át, a Targaryenek hódításáig uralkodtak Casterly- hegyen. Ekkor behódoltak Hódító Aegonnak,
        aki ezért cserébe Nyugat őrzőjének nevezte ki a Lannister-házat.
        Westeros leggazdagabb családjának számítanak, mivel területükön rengeteg aranybánya található.
        Tywin Lannister az utolsó Targaryen király segítője volt,
        míg el nem árulták őket, fia, Jaime saját kezűleg ölte meg a királyt, majd lánya,
        Cersei az új király felesége lett, így székhelyüket gyakorlatilag Királyvárba helyezték át.</p>
    <img src="img/jaime.jpg" alt="Jaime Lannister" title="Ő itt Jaime, a királyölő" width="256" id="jaime">
    <img src="img/tyrion.jpg" alt="Tyrion Lannister" title="Ő Tyrion, az ördögfióka" width="275" id="tyrion">
    <img src="img/cersei.jpg" alt="Cersei Lannister" title="Ő itt Cersei, a királyné" width="220" id="cersei">
    <img src="img/tywin.jpg" alt="Tywin Lannister" title="Ő itt Tywin, Casterly-hegy ura" width="155" id="tywin">
    <a href="Fooldal.php" target="_self" title="Visszaugrás a Főoldalra">Vissza a Főoldalra</a>
    <a href="Targaryen.php" target="_blank" title="Targaryen-ház rövid ismertetése">Targaryen-ház</a><br/>
    <a href="Stark.php" target="_blank" title="Stark-ház rövid ismertetése">Stark-ház</a> <br />
    <a id="aktualis" href="Lannister.php" target="_blank" title="Lannister-ház rövid ismertetése">Lannister-ház</a><br/>
    <a href="Baratheon.php" target="_blank" title="Baratheon-ház rövid ismertetése">Baratheon-ház</a><br/>
    <a href="Greyjoy.php" target="_blank" title="Greyjoy-ház rövid ismertetése">Greyjoy-ház</a> <br/>
    <a href="Martell.php" target="_blank" title="Martell-ház rövid ismertetése">Martell-ház</a> <br/>
    <a href="Tyrell.php" target="_blank" title="Tyrell-ház rövid ismertetése">Tyrell-ház</a> <br/>
</body>
</html>