<?php
    include "elrejtett.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Stark-ház</title>
    <link rel="icon" href="img/starkicon.jpg"/>
    <link rel="stylesheet" href="css/mellekoldalak.css"/>
    <style>
        body{
            background: url("img/stark hatter2.jpg") top/cover no-repeat;
        }
        p {
            padding-right: 1000px;
            color: black;
        }
        #ned  {
            position: absolute;
            bottom: 150px;
            left: 90px;
            z-index: 120;

        }
        #arya {
            position: absolute;
            bottom: 150px;
            left: 240px;
            z-index: 100;
        }
        #sansa {
            position: absolute;
            bottom: 150px;
            left: 385px;
            z-index: 80;
        }
        #robb {
            position: absolute;
            bottom: 150px;
            left: 530px;
            z-index: 60;
        }
        #catelyn {
            position: absolute;
            bottom: 240px;
            left: -10px;
            z-index: 50;
        }
        #johnny2 {
            position: absolute;
            bottom: 240px;
            left: 170px;
            z-index: 40;
        }
        #rickon {
            position: absolute;
            bottom: 240px;
            left: 330px;
            z-index: 30;
        }
        #bran {
            position: absolute;
            bottom: 240px;
            left: 495px;
            z-index: 20;

        }
        #ismert, td[headers="ismert"] {
            color: white;
        }
        #tablazatok {
            border: hidden;
        }
        #tablazatok th, #tablazatok td {
            border: 3px solid black;
        }
        a[href="Fooldal.php"] {
            position: absolute;
            bottom: 30px;
        }

        a[href="Fooldal.php"]:link { color: papayawhip; }
        a[href="Fooldal.php"]:visited { color: gray; }
        a[href="Fooldal.php"]:hover { color: orangered; }
        a[href="Fooldal.php"]:active { color: red; }


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

a[id="aktualis"] {
    position: absolute;
    top: 30px;
    left: 1400px;
    text-decoration: none;
}

a[id="aktualis"]:link { color: black; }
a[id="aktualis"]:visited { color: black; }
a[id="aktualis"]:hover { color: orangered; }
a[id="aktualis"]:active { color:red; }

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

        img{
            z-index: auto;
            transition: height 1s linear, width 2s linear, z-index 2s linear;
        }
        img:hover{
            width: 280px;
            height: 300px;
            z-index: 200;
        }

        nav {
            position: absolute;
            top: 10px;
            right: 200px;
          
        }
        nav > li {
            margin: 10px;
        }
    </style>
</head>
<body>
    <table id="tablazatok">
        <caption>Stark-ház</caption>
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
            <td headers="szekhely">Deres</td>
            <td headers="jelmondat">Közeleg a tél</td>
            <td headers="egyeb">Észak nem felejt</td>
            <td headers="hit">Régi Istenek</td>
            <td headers="cimer">Rémfarkas</td>
            <td headers="ismert">Eddard, Arya, Robb, Sansa, Catelyn, Brandon, Rickon, (Jon Snow)</td>
        </tr>
        </tbody>
    </table>
    <p>A Starkok az elsők leszármazottai, akik északról menekültek és a falat építették.
        Westeros legnagyobb, északi részén élnek, ők Észak őrzői. Jellemző tulajdonságaik a hűség és a becsület.
        Hajlamosak viszont azonnal kardot ragadni, ha sérelem éri őket. Harcaikat azonban szemtől szembe vívják.
        Szokásuk, hogy ha valakit bűnei miatt halálra ítélnek, akkor azt az hajtja végre aki az ítéletet kiszabta.</p>
    <img src="img/eddard.jpg" alt="Eddard Stark" title="Ő itt Deres ura" width="152" id="ned">
    <img src="img/sansa.jpg" alt="Sansa Stark" title="Ő itt Sansa" width="148" id="sansa">
    <img src="img/arya.jpg" alt="Arya Stark" title="Ő itt Arya" width="146" id="arya">
    <img src="img/robb.jpg" alt="Robb Stark" title="Ő itt Robb Stark, Deres örököse" width="180" id="robb">
    <img src="img/johnny2.jpg" alt="Jon Snow/Aegon Targaryen"
         title="Ő itt Havas Jon avagy eredeti nevén Aegon Targaryen" width="160" id="johnny2">
    <img src="img/bran.jpg" alt="Brandon Stark" title="Ő itt Bran, a varg fiú" width="162" id="bran">
    <img src="img/rickon.jpg" alt="Rickon Stark" title="Ő itt Rickon" width="162" id="rickon">
    <img src="img/catelyn.jpg" alt="Catelyn Tully" title="Ő itt Catelyn, Ned Stark felesége" width="180" id="catelyn">
    <a href="Fooldal.php" target="_self" title="Visszaugrás a Főoldalra">Vissza a Főoldalra</a>
    <a href="Targaryen.php" target="_blank" title="Targaryen-ház rövid ismertetése">Targaryen-ház</a><br/>
    <a id="aktualis" href="Stark.php" target="_blank" title="Stark-ház rövid ismertetése">Stark-ház</a> <br />
    <a href="Lannister.php" target="_blank" title="Lannister-ház rövid ismertetése">Lannister-ház</a><br/>
    <a href="Baratheon.php" target="_blank" title="Baratheon-ház rövid ismertetése">Baratheon-ház</a><br/>
    <a href="Greyjoy.php" target="_blank" title="Greyjoy-ház rövid ismertetése">Greyjoy-ház</a> <br/>
    <a href="Martell.php" target="_blank" title="Martell-ház rövid ismertetése">Martell-ház</a> <br/>
    <a href="Tyrell.php" target="_blank" title="Tyrell-ház rövid ismertetése">Tyrell-ház</a> <br/>

</body>
</html>