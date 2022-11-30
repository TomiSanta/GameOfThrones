<?php
    include "elrejtett.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Martell-ház</title>
    <link rel="icon" href="img/martellicon.jpg"/>
    <link rel="stylesheet" href="css/mellekoldalak.css"/>
    <style>
        body{
            background-image: url("img/martell hatter1.jpg");
            background-position: top;
            animation-name: hattervaltas2;
            animation-duration: 30s;
            animation-iteration-count: infinite;
            animation-direction: reverse;
        }
        p {
            position: absolute;
            right: 1100px;
            top: 150px;
            color: darkred;
        }
        #doran {
            position: absolute;
            top: 150px;
            right: 200px;
            border-radius: 10px 10px 10px 10px;
            z-index: 50;
        }
        #oberyn {
            position: absolute;
            bottom: 250px;
            right: 20px;
            border-radius: 10px 10px 10px 10px;
            z-index: 40;
        }
        #tablazatok, #tablazatok th, #tablazatok td {
            border: 3px dashed darkred;
        }
        tr td, tr th, caption {
            color: darkred;
        }
        @keyframes hattervaltas2 {
            0% {
                background-image: url("img/martell hatter1.jpg")
            }
            50% {
                background-image: url("img/martell hatter3.jpg")
            }
            100% {
                background-image: url("img/martell hatter1.jpg")
            }
        }
        video {
            position: absolute;
            left: 75px;
            bottom: 90px;
            width: 340px;
        }

a[href="Targaryen.php"] {
    position: absolute;
    top: 0;
    left: 1500px;
    text-decoration: none;
}

a[href="Targaryen.php"]:link { color: papayawhip; }
a[href="Targaryen.php"]:visited { color: yellow; }
a[href="Targaryen.php"]:hover { color: orangered; }
a[href="Targaryen.php"]:active { color: red; }

a[href="Stark.php"] {
    position: absolute;
    top: 30px;
    left: 1500px;
    text-decoration: none;
}

a[href="Stark.php"]:link { color: papayawhip; }
a[href="Stark.php"]:visited { color: yellow; }
a[href="Stark.php"]:hover { color: orangered; }
a[href="Stark.php"]:active { color:red; }

a[href="Lannister.php"] {
    position: absolute;
    top: 60px;
    left: 1500px;
    text-decoration: none;
}

a[href="Lannister.php"]:link { color: papayawhip; }
a[href="Lannister.php"]:visited { color: yellow; }
a[href="Lannister.php"]:hover { color: orangered; }
a[href="Lannister.php"]:active { color: red; }


a[href="Baratheon.php"] {
    position: absolute;
    top: 90px;
    left: 1500px;
    text-decoration: none;
}

a[href="Baratheon.php"]:link { color: papayawhip; }
a[href="Baratheon.php"]:visited { color: yellow; }
a[href="Baratheon.php"]:hover { color: orangered; }
a[href="Baratheon.php"]:active { color: red; }

a[href="Greyjoy.php"] {
    position: absolute;
    top: 120px;
    left: 1500px;
    text-decoration: none;
}

a[href="Greyjoy.php"]:link { color: papayawhip; }
a[href="Greyjoy.php"]:visited { color: yellow; }
a[href="Greyjoy.php"]:hover { color: orangered; }
a[href="Greyjoy.php"]:active { color: red; }

#aktualis {
    font-size: 25px;}

a[id="aktualis"] {
    position: absolute;
    top: 150px;
    left: 1500px;
    text-decoration: none;
}

a[id="aktualis"]:link { color: black; }
a[id="aktualis"]:visited { color: black; }
a[id="aktualis"]:hover { color: orangered; }
a[id="aktualis"]:active { color: red; }



a[href="Tyrell.php"] {
    position: absolute;
    top: 180px;
    left: 1500px;
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
        <caption>Martell-ház</caption>
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
            <td headers="szekhely">Napföld</td>
            <td headers="jelmondat">Meg nem hajol, meg nem rogy, meg nem törik</td>
            <td id="vonal" headers="egyeb">-</td>
            <td headers="hit">A Hét Isten</td>
            <td headers="cimer">Dárdával átszúrt napkorong</td>
            <td headers="ismert">Doran, Elia, Oberyn, Quentyn, Trystane</td>
        </tr>
        </tbody>
    </table>
    <p>Dorne uralkodó családja. Bár mindig a Vastrónhoz voltak hűségesek, a Targaryenek nem hódították meg őket.
        Népét a vér, szokásaik és történelmük egyaránt megkülönbözteti a többi királyságtól.
        A Martell-ház tagjai ismertek tüzes temperamentumukról és a harci technikájukról.
        Viszonylag elszigetelten élnek a Hét Királyság politikai eseményeitől, de a Lannisterekkel,
        miután a család egyik női tagját, Eliát az ő parancsukra erőszakolták és ölték meg.</p>
    <img src="img/doran.jpg" alt="Doran Martell" title="Ő itt Doran, Dorne uralkodója" width="250" id="doran">
    <img src="img/oberin.jpg" alt="Oberyn Martell" title="Ő itt Oberyn" width="250" id="oberyn">
    <a href="Fooldal.php" target="_self" title="Visszaugrás a Főoldalra">Vissza a Főoldalra</a>
    <a href="Targaryen.php" target="_blank" title="Targaryen-ház rövid ismertetése">Targaryen-ház</a><br/>
    <a href="Stark.php" target="_blank" title="Stark-ház rövid ismertetése">Stark-ház</a> <br />
    <a href="Lannister.php" target="_blank" title="Lannister-ház rövid ismertetése">Lannister-ház</a><br/>
    <a href="Baratheon.php" target="_blank" title="Baratheon-ház rövid ismertetése">Baratheon-ház</a><br/>
    <a href="Greyjoy.php" target="_blank" title="Greyjoy-ház rövid ismertetése">Greyjoy-ház</a> <br/>
    <a id="aktualis" href="Martell.php" target="_blank" title="Martell-ház rövid ismertetése">Martell-ház</a> <br/>
    <a href="Tyrell.php" target="_blank" title="Tyrell-ház rövid ismertetése">Tyrell-ház</a> <br/>
    <video controls>
        <source src="video-audio/Hegy%20vs%20Vipera.mp4" type="video/mp4"/>
    </video>
</body>
</html>