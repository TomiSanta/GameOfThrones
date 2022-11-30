<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8"/>
    <title>Trónok Harca Fanblog &copy;</title>
    <meta name="author" content="Pál Krisztián Zoltán & Sánta Tamás"/>
    <meta name="description" content="Ez az oldal a Trónok Harcáról szól. Afféle rövid bemutatás."/>
    <meta name="keywords" content="Targaryen, Trónok harca, Stark, Jon Snow, Daenerys"/>
    <link rel="stylesheet" href="css/fooldal.css"/>
    <link rel="icon" href="img/logo.jpg"/>
    <style>
        body {
            background: url("img/hatterfooldal5.jpg") center/cover no-repeat;
        }
        a[id="aktualis"]:link { color: black; }
        a[id="aktualis"]:visited { color: black; }
        a[id="aktualis"]:hover { color: orangered; }
        a[id="aktualis"]:active { color:red; }


        #aktualis {
            font-size: 20px;}
    </style>
</head>
<body>
    <header>
        <h1>Trónok Harca</h1>
    </header>
    <img src="img/tron1.oldalra.jpg" alt="Vastrón" title="Ez itt a Vastrón" width="400" id="vastron" usemap="#wikipedia">
    <map name="wikipedia">
        <area alt="Vastrón" href="https://hu.wikipedia.org/wiki/Tr%C3%B3nok_harca_(telev%C3%ADzi%C3%B3s_sorozat)"
              shape="rect" coords="0,0,400,225">
    </map>

    <?php if (isset($_SESSION["felhasznalo"])) { ?>
        <h2><a href="kijelentkezes.php" target="_self" title="Itt jelentkeztetheted ki a fiókod!">Kijelentkezés</a></h2>
        <h2><a href="profil.php" target="_self" title="Itt nézheted meg a profilod!">Profilom</a></h2>
    <?php } else { ?>
        <h2><a href="regisztracio.php" target="_self" title="Itt tudsz regisztrálni az oldalunkra!">Regisztráció</a></h2>
        <h2><a href="bejelentkezes.php" target="_self" title="Itt tudsz bejelentkezni az oldalunkra!">Bejelentkezés</a></h2>
    <?php } ?>

    <section id="szereplok">
        <h2>Néhány fontos szereplő: </h2>
            <p>Tyrion Lannister (Peter Dinklage): <q class="leiras">Gúnynevén az "Ördögfióka",
                Cersei és Jaime Lannister öccse.</q></p>
            <p>Jaime Lannister (Nikolaj Coster-Waldau): <q class="leiras">A Királyi Testőrség tagja,
                rendkívül tehetséges kardvívó.
                Cersei ikertestvére, s amióta csak az eszüket tudják, vérfertőző kapcsolatban állnak egymással.</q></p>
            <p>Cersei Lannister (Lena Headey): <q class="leiras">Cersei a Hét Királyság királynője,
                Robert Baratheon felesége.</q></p>
            <p>Daenerys Targaryen (Emilia Clarke): <q class="leiras">A Targaryen-dinasztia száműzött hercegnője,
                akit Viharbanszületett Daenerysnek is neveztek. </q></p>
            <p>Havas Jon (Kit Harington): <q class="leiras">Ned Stark fattyú fiaként nevelkedett, valójában azonban ő
                <strong>Aegon Targaryen, hatodik ezen a néven</strong>, Rhaegar Targaryen herceg és Lyanna Stark gyermeke,
                akit Ned megmentett Robert Baratheon bosszúja elől, húgának tett ígérete alapján.</q></p>
    </section> <hr/>
    <main>
        <section id="rovidismerteto">
            <p>A sorozat egy fiktív világ <mark>Westeros és Essos</mark> nevű kontinensein játszódik,
                és a történet szerteágazódása miatt rengeteg szereplője van.
                Három nagy sztoriszál húzódik végig a cselekményen:
                az első a Hét Királyság feletti uralomért csatázó nemesi házak küzdelmeit mutatja be,
                a második a trón tengeren túl szervezkedő törvényes örökösét követi nyomon, a harmadik pedig egy ősi,
                elfeledettnek hitt ellenség közelgő támadását vetíti előre.</p><br/>
        </section> <hr/>
    </main>
    <?php if (isset($_SESSION["felhasznalo"])) { ?>
      <article>
          <h3>A szerzőről:</h3>
          <div>
              <p id="szerzo">A Trónok harca sorozat <em>George R. R. Martin A tűz és jég dala című könyvsorozatán alapszik.</em>
                Az amerikai Tolkienként is emlegetett George Raymond Richard Martin
                1948-ban született a New Jersey államban található Bayonne-ban.
                A képregényrajongó kölyökből a kortárs fantasy óriásává vált szerző rengeteg műfajban alkotott,
                korai sci-fi műveivel rangos díjakat nyert el, a vámpír mítoszt újraértelmező 1982-es Lázálom című
                horrorregényepedig nemzedéke egyik legelismertebb írójává tette.
                Martin nagyon fiatal korában kezdett írni.
                Első művei rémtörténetek voltak: a környékbeli gyerekeknek adta el fillérekért,
                általában ő maga olvasta fel őket. Később rajongója (és gyűjtője) lett a képregényeknek;
                a Fantasztikus Négyes 20. számában megjelentették az akkor középiskolás író levelét.
                Ez volt az első „írása”, amely nyomtatásban megjelent, és nagy hatással volt rá.
                A levél keltette reakciók hatására kezdett különböző rajongói magazinoknak írni.</p>
          </div>
       </article>
    <nav>
        <ul>
            <li> <a id="aktualis" href="Fooldal.php" target="_self" title="Ez a Főoldal">Főoldal</a><br/></li>
            <li> <a href="Targaryen.php" target="_blank" title="Targaryen-ház rövid ismertetése">Targaryen-ház</a><br/></li>
            <li> <a href="Stark.php" target="_blank" title="Stark-ház rövid ismertetése">Stark-ház</a> <br /></li>
            <li> <a href="Lannister.php" target="_blank" title="Lannister-ház rövid ismertetése">Lannister-ház</a><br/></li>
            <li> <a href="Baratheon.php" target="_blank" title="Baratheon-ház rövid ismertetése">Baratheon-ház</a><br/></li>
            <li> <a href="Greyjoy.php" target="_blank" title="Greyjoy-ház rövid ismertetése">Greyjoy-ház</a> <br/></li>
            <li> <a href="Martell.php" target="_blank" title="Martell-ház rövid ismertetése">Martell-ház</a> <br/></li>
            <li> <a href="Tyrell.php" target="_blank" title="Tyrell-ház rövid ismertetése">Tyrell-ház</a> <br/></li>
        </ul>
    </nav>
    <iframe src="https://hu.wikipedia.org/wiki/A_Tr%C3%B3nok_harca_szerepl%C5%91inek_list%C3%A1ja"
            width="400" height="250"></iframe>
    <audio controls>
        <source src="video-audio/focimdal.mp3" type="audio/mpeg"/>
    </audio>
    <?php } 
    include "datum.php"
    ?>
    <footer>
        <address>
            <p>A weboldal szerkesztői: Sánta Tamás & Pál Krisztián Zoltán</p>
            <p>Elérhetőség: <a href="mailto:Valaki@example.com">Valaki@example.com</a>.</p>
        </address>
    </footer>
</body>
</html>