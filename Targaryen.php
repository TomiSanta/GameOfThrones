<?php
    include "elrejtett.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Targaryen-ház</title>
    <link rel="icon" href="img/targaryenicon.png"/>
    <link rel="stylesheet" href="css/mellekoldalak.css"/>
    <style>
        body{
            background: url("img/targaryen hatter 3.jpg") top/cover no-repeat;
        }
        p {
            position: relative;
            top: 200px;
            color: white;
        }
        #dany  {
            position: relative;
            bottom: -150pt;
            left: 1000pt;
            box-shadow: 0 4px 50px red;
            border-radius: 10px 10px 10px 10px;
        }
        #aegon {
            position: relative;
            bottom: -150pt;
            left: 0;
            box-shadow: 0 4px 50px red;
            border-radius: 10px 10px 10px 10px;
        }
        #viserys {
            position: relative;
            bottom: -150pt;
            left: -120pt;
            box-shadow: 0 4px 50px red;
            border-radius: 10px 10px 10px 10px;
        }
        #johnny {
            position: relative;
            bottom: -150pt;
            left: 150pt;
            box-shadow: 0 4px 50px red;
            border-radius: 10px 10px 10px 10px;
        }
        #tablazatok {
            position: absolute;
            color: white;
            left: 400px;
        }
        #tablazatok th, #tablazatok td {
            border: hidden;
        }

a[id="aktualis"] {
    position: absolute;
    top: 0;
    left: 1400px;
    text-decoration: none;
}

a[id="aktualis"]:link { color: white; }
a[id="aktualis"]:visited { color: white; }
a[id="aktualis"]:hover { color: orangered; }
a[id="aktualis"]:active { color: red; }

#aktualis {
    font-size: 25px;}

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

a[href="Greyjoy.php"] {
    position: absolute;
    top: 120px;
    left: 1400px;
    text-decoration: none;
}

a[href="Greyjoy.php"]:link { color: papayawhip; }
a[href="Greyjoy.php"]:visited { color: yellow; }
a[href="Greyjoy.php"]:hover { color: orangered; }
a[href="Greyjoy.php"]:active { color: red; }



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
        <caption>Targaryen-ház</caption>
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
                <td headers="szekhely">Sárkánykő</td>
                <td headers="jelmondat">Tűz és vér</td>
                <td id="vonal" headers="egyeb">-</td>
                <td headers="hit">A Hét Isten</td>
                <td headers="cimer">Háromfejű sárkány</td>
                <td headers="ismert">Daenerys, Aerys, Aegon, Viserys, Aemon, Rhaegar, (Jon Snow)</td>
            </tr>
        </tbody>
    </table>
    <p>Valyriai erdetű család. I. „hódító” Aegon Targaryen három sárkányával és egy kisebb sereggel indult hódító útjára,
        aminek következtében egyesítette a Hét Királyságot.
        Ezt követően közel 300 évig uralkodtak, mielőtt Robert Baratheon legyőzte őket.
        A Targaryenek között gyakori a házon belüli házasság, hogy megőrizzék a vérvonal tisztaságát.
        Valószínűleg a vérfertőzésnek köszönhető, hogy a család tagjai között gyakori az őrültség.
        Úgy tartják, hogy egy Targaryen születésénél az Istenek feldobnak egy pénzérmét,
        és vagy nagyon jó uralkodó vagy őrült lesz. Robert lázadásakor a család csaknem összes tagját megölték,
        mindössze az utolsó király két gyermeke Visery és Daeneris maradt életben,
        ők viszont menekülni és bujkálni kényszerültek.
        Rajtuk kívül az Éjjeli Őrség egyik tagja, a nevét levetett Aemon mester maradt életben.</p>
    <img src="img/daenerys.jpg" alt="Daenerys Targaryen" title="Ő itt Viharbanszületett Daenerys" width="250" id="dany">
    <img src="img/viserys.jpg" alt="Viserys Targaryen" title="Ő itt Viserys, a jogos trónörökös" width="250" id="viserys">
    <img src="img/aegon.jpg" alt="Aegon Targaryen" title="Ő itt Hódító Aegon" width="250" id="aegon">
    <img src="img/jon%20snow.jpg" alt="Jon Snow/Aegon Targaryen"
         title="Ő itt Havas Jon avagy eredeti nevén Aegon Targaryen" width="230" id="johnny">
    <a href="Fooldal.php" target="_self" title="Visszaugrás a Főoldalra">Vissza a Főoldalra</a>
    <a id="aktualis" href="Targaryen.php" target="_blank" title="Targaryen-ház rövid ismertetése">Targaryen-ház</a><br/>
    <a href="Stark.php" target="_blank" title="Stark-ház rövid ismertetése">Stark-ház</a> <br />
    <a href="Lannister.php" target="_blank" title="Lannister-ház rövid ismertetése">Lannister-ház</a><br/>
    <a href="Baratheon.php" target="_blank" title="Baratheon-ház rövid ismertetése">Baratheon-ház</a><br/>
    <a href="Greyjoy.php" target="_blank" title="Greyjoy-ház rövid ismertetése">Greyjoy-ház</a> <br/>
    <a href="Martell.php" target="_blank" title="Martell-ház rövid ismertetése">Martell-ház</a> <br/>
    <a href="Tyrell.php" target="_blank" title="Tyrell-ház rövid ismertetése">Tyrell-ház</a> <br/>
</body>
</html>