<?php
    include "elrejtett.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Baratheon-ház</title>
    <link rel="icon" href="img/baratheonicon.jpg"/>
    <link rel="stylesheet" href="css/mellekoldalak.css"/>
    <style>
        body{
            background-image: url("img/baratheon hatter3.jpg");
            background-position: top;
        }
        p {
            color: black;
            position: absolute;
            top: 150px;
            right: 1200px;
        }
        #stannis {
            position: absolute;
            bottom: 5%;
            right: 2%;
            outline-style: solid;
            outline-color: black;
        }
        #robert {
            position: absolute;
            top: 25%;
            right: 5%;
            outline-style: solid;
            outline-color: black;
        }
        #joffrey {
            position: absolute;
            bottom: 1%;
            right: 25%;
            outline-style: solid;
            outline-color: black;
        }
        #tablazatok th, #tablazatok td {
            border: 5px dotted black;
        }
        #tablazatok {
            position: fixed;
            left: 400px;

        }
        tr td, tr th, caption {
            color: black;
        }
        a {
            position: absolute;
            top: 35px;
            left: 0px;
            font-size: 18px;
        }
        a[target="_self"]:link { color: saddlebrown; }
        a[target="_self"]:visited { color: saddlebrown; }
        a[target="_self"]:hover { color: black; }
        a[target="_self"]:active { color: red; }

        a[href="Targaryen.php"] {
    position: absolute;
    top: 0;
    left: 1400px;
    text-decoration: none;
}

a[href="Targaryen.php"]:link { color: papayawhip; }
a[href="Targaryen.php"]:visited { color: blue; }
a[href="Targaryen.php"]:hover { color: orangered; }
a[href="Targaryen.php"]:active { color: red; }

a[href="Stark.php"] {
    position: absolute;
    top: 30px;
    left: 1400px;
    text-decoration: none;
}

a[href="Stark.php"]:link { color: papayawhip; }
a[href="Stark.php"]:visited { color: blue; }
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
a[href="Lannister.php"]:visited { color: blue; }
a[href="Lannister.php"]:hover { color: orangered; }
a[href="Lannister.php"]:active { color: red; }


a[id="aktualis" ] {
    position: absolute;
    top: 90px;
    left: 1400px;
    text-decoration: none;
}

a[id="aktualis" ]:link { color: black; }
a[id="aktualis" ]:visited { color: black; }
a[id="aktualis" ]:hover { color: orangered; }
a[id="aktualis" ]:active { color: red; }

a[href="Greyjoy.php"] {
    position: absolute;
    top: 120px;
    left: 1400px;
    text-decoration: none;
}

a[href="Greyjoy.php"]:link { color: papayawhip; }
a[href="Greyjoy.php"]:visited { color: blue; }
a[href="Greyjoy.php"]:hover { color: orangered; }
a[href="Greyjoy.php"]:active { color: red; }



a[href="Martell.php"] {
    position: absolute;
    top: 150px;
    left: 1400px;
    text-decoration: none;
}

a[href="Martell.php"]:link { color: papayawhip; }
a[href="Martell.php"]:visited { color: blue; }
a[href="Martell.php"]:hover { color: orangered; }
a[href="Martell.php"]:active { color: red; }



a[href="Tyrell.php"] {
    position: absolute;
    top: 180px;
    left: 1400px;
    text-decoration: none;
}


a[href="Tyrell.php"]:link { color: papayawhip; }
a[href="Tyrell.php"]:visited { color: blue; }
a[href="Tyrell.php"]:hover { color: orangered; }
a[href="Tyrell.php"]:active { color: red; }
    </style>
</head>
<body>
    <table id="tablazatok">
        <caption>Baratheon-ház</caption>
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
            <td headers="szekhely">Viharvég</td>
            <td headers="jelmondat">Miénk a harag</td>
            <td id="vonal" headers="egyeb">-</td>
            <td headers="hit">A Hét Isten</td>
            <td headers="cimer">Szarvas</td>
            <td headers="ismert">Joffrey, Robbert, Myrcella, Tommen, Gendry, Renly, Stannis</td>
        </tr>
        </tbody>
    </table>
    <p>A legfiatalabb uralkodóház Westeroson,
        mégis ők hódították el a trónt a Targaryenektől Robert Baratheon vezette a felkelést,
        amely végett vetett a Targaryenek uralkodásának.
        Eztán Robert lett a Hét Királyság uralkodója, így elhagyta Viharvéget.
        Legfiatalabb öccse, Renly maradt Viharvég ura, középső testvérük, Stannis pedig Sárkánykőé,
        ami a ház második számú székhelye.
        A Starkokhoz hasonlóan jellemző rájuk, hogy a konfliktust nem tárgyalással, hanem harccal oldják meg.
        A Baratheonok szélsőséges jellemekkel bírnak, éppúgy jellemző rájuk a kicsapongó életvitel,
        mint a kimért, rideg stílus és a tiszta fejjel való uralkodás. Erényük a szigor és az igazságosság.</p>
    <img src="img/joffrey2.jpg" alt="Joffrey Baratheon" title="Ő itt Joffrey" width="250" id="joffrey">
    <img src="img/robert.jpg" alt="Robert Baratheon" title="Ő itt Robert király" width="250" id="robert">
    <img src="img/stannis.jpg" alt="Stannis Baratheon" title="Ő itt Stannis, a király öccse" width="220" id="stannis">
    <a href="Fooldal.php" target="_self" title="Visszaugrás a Főoldalra">Vissza a Főoldalra</a>
    <a href="Targaryen.php" target="_blank" title="Targaryen-ház rövid ismertetése">Targaryen-ház</a><br/>
    <a href="Stark.php" target="_blank" title="Stark-ház rövid ismertetése">Stark-ház</a> <br />
    <a href="Lannister.php" target="_blank" title="Lannister-ház rövid ismertetése">Lannister-ház</a><br/>
    <a id="aktualis" href="Baratheon.php" target="_blank" title="Baratheon-ház rövid ismertetése">Baratheon-ház</a><br/>
    <a href="Greyjoy.php" target="_blank" title="Greyjoy-ház rövid ismertetése">Greyjoy-ház</a> <br/>
    <a href="Martell.php" target="_blank" title="Martell-ház rövid ismertetése">Martell-ház</a> <br/>
    <a href="Tyrell.php" target="_blank" title="Tyrell-ház rövid ismertetése">Tyrell-ház</a> <br/>
</body>
</html>