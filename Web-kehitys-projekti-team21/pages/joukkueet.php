<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokkueet Suomen SM-Liigassa</title>
  
    
    <style>
    
    main{
        display: block;
    }

    .joukkue{
        border: 1px solid #333;
        margin: 3px;
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;  

    }

    .kuva{
        width: 150px;
        height: 150px;
        margin-right: 5px;
        margin-bottom: 2px;
        max-width: 100%;
    }

    p{
        margin: 3px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    .teksti{
        display: flex;
        flex-direction: column;
        flex-basis: min-content;
        flex-grow: 1;
    }
    footer{
        width: auto;
        display: flex;
        justify-content: center;
         }
    #otsikko{
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
    h3{
        display: block;
        margin-right: 7px;
         }
     
    </style>

</head>
<body>

    <header>
        <h1><a href="../index.php">Liiga - Suomen parasta kiekkoa</a></h1>

        <div id="header-links">
        <h2><a href="./uutiset.php">Uutiset</a></h2>
        <h2><a href="./tilastot.php">Tilastot</a></h2>
        <h2><a href="./joukkueet.php">Joukkueet</a></h2>
    </div>
    </header>

    <main>
    <section>
        <div class="joukkue">
        <img class="kuva" src="../images/joukkuelogot/HIFK-Jääkiekko.png" alt="hifk">
            <div class="teksti">
                <p>Joukkueen nimi: HIFK</p>
                <p>Seuran nimi: Idrottsföreningen Kamraterna, Helsingfors</p>
                <p>Kaupunki: Helsinki</p>
                <p>Kotiareena: Helsingin jäähalli</p>
        </div>
    </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/HPK_logo.png" alt="hpk">
            <div class="teksti">
                <p>Joukkueen nimi: HPK</p>
                <p>Seuran nimi: Hämeenlinnan Pallokerho</p>
                <p>Kaupunki: Hämeenlinna</p>
                <p>Kotiareena: Pohjantähti areena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/Tampereen_Ilveksen_logo.png" alt="ilves">
            <div class="teksti">
                <p>Joukkueen nimi: Ilves</p>
                <p>Seuran nimi: Tampereen Ilves</p>
                <p>Kaupunki: Tampere</p>
                <p>Kotiareena: Nokia Arena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/Mikkelin_Jukurit_logo.png" alt="jukurit">
            <div class="teksti">
                <p>Joukkueen nimi: Jukurit</p>
                <p>Seuran nimi: Mikkelin Jukurit</p>
                <p>Kaupunki: Mikkeli</p>
                <p>Kotiareena: Kalevankankaan jäähalli</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/JYP_juhlalogo.png" alt="jyp">
            <div class="teksti">
                <p>Joukkueen nimi: JYP</p>
                <p>Seuran nimi: JYP Jyväskylä</p>
                <p>Kaupunki: Jyväskylä</p>
                <p>Kotiareena: LähiTapiola Areena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/KalPa_logo.svg.png" alt="kalpa">
            <div class="teksti">
                <p>Joukkueen nimi: KalPa</p>
                <p>Seuran nimi: Kalevan Pallo</p>
                <p>Kaupunki: Kuopio</p>
                <p>Kotiareena: Kuopion jäähalli</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/1200px-Kookoon.svg.png" alt="kookoo">
            <div class="teksti">
                <p>Joukkueen nimi: KooKoo</p>
                <p>Seuran nimi: KooKoo Hockey</p>
                <p>Kaupunki: Kouvola</p>
                <p>Kotiareena: Lumon Areena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/kärpät.png" alt="kärpät">
            <div class="teksti">
                <p>Joukkueen nimi: Kärpät</p>
                <p>Seuran nimi: Oulun Kärpät</p>
                <p>Kaupunki: Oulu</p>
                <p>Kotiareena: Oulun Energia-areena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/Rauman_Lukon_lukko_logo.svg.png" alt="lukko">
            <div class="teksti">
                <p>Joukkueen nimi: Lukko</p>
                <p>Seuran nimi: Rauman Lukko</p>
                <p>Kaupunki: Rauma</p>
                <p>Kotiareena: Kivikylän Areena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/Pelicans_logo.png" alt="pelicans">
            <div class="teksti">
                <p>Joukkueen nimi: Pelicans</p>
                <p>Seuran nimi: Lahden Pelicans</p>
                <p>Kaupunki: Lahti</p>
                <p>Kotiareena: Isku Areena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/Saimaan_Pallo_(SaiPa)_logo.svg.png" alt="saipa">
            <div class="teksti">
                <p>Joukkueen nimi: SaiPa</p>
                <p>Seuran nimi: Saimaan Pallo</p>
                <p>Kaupunki: Lappeenranta</p>
                <p>Kotiareena: Lappeenrannan Kisapuiston jäähalli</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/Vaasan_Sport_logo.svg.png" alt="sport">
            <div class="teksti">
                <p>Joukkueen nimi: Sport</p>
                <p>Seuran nimi: Vaasan Sport</p>
                <p>Kaupunki: Vaasa</p>
                <p>Kotiareena: Vaasa Arena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/1200px-Tapparan_logo.svg.png" alt="tappara">
            <div class="teksti">
                <p>Joukkueen nimi: Tappara</p>
                <p>Seuran nimi: Tampereen Tappara</p>
                <p>Kaupunki: Tampere</p>
                <p>Kotiareena: Nokia Areena</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/TPS_logo.png" alt="tps">
            <div class="teksti">
                <p>Joukkueen nimi: TPS</p>
                <p>Seuran nimi: Turun Palloseura</p>
                <p>Kaupunki: Turku</p>
                <p>Kotiareena: Gatorade Center</p>
                </div>
        </div>
        <div class="joukkue">
            <img class="kuva" src="../images/joukkuelogot/246px-Ässät_Logo.svg.png" alt="ässät">
            <div class="teksti">
                <p>Joukkueen nimi: Ässät</p>
                <p>Seuran nimi: Porin Ässät</p>
                <p>Kaupunki: Pori</p>
                <p>Kotiareena: Isomäki Areena</p>
                </div>
        </div>
    </section>
</main>
<footer>
    <h3><a href="./contact.php">Contact us</a></h3>
    
    <!-- Jos käyttäjä kirjautunut sisään näyttää footterissa käyttäjänimen,
         jos ei ole kirjautunut sisään, linkki kirjautumissivustolle -->
    <?php
    if (isset($_SESSION['logged_in'])) {
      echo ("<h3><a href='../php/logout.php'>Kirjaudu ulos</a></h3>");
      echo ("<p>Olet kirjautunut käyttäjällä: {$_SESSION['kayttajanimi']}</p>");
    } else {
      echo ("<h3><a href='./kirjautumis.php'>Kirjaudu sisään</a></h3>");
    }
    
    ?>
</footer>

    
</body>
</html>