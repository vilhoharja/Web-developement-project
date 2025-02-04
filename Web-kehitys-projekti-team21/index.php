<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Seuraa SM-liigan tuoreimpia uutisia ja tutustu joukkueiden tilastoihin. Pysy ajan tasalla jääkiekon jännittävimmistä tapahtumista ja pelaajien suorituksista.">

    <title>Liiga - Suomen parasta kiekkoa</title>

    <style>
         main{
            background-image: url('images/hockey.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 85vh;
            width: 100%;
            margin: 0;
            max-width: 100%;
            padding: 0; 
         }

         body, html{
            height: 100%;
         }
         @media (max-width: 720px){
            main{
                height: 80%;
            }
         }
         header{
            width: auto;
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
            display: inline-block;
         }
         
    </style>

</head>
<body>
    <header>
        <h1>Liiga - Suomen parasta kiekkoa</h1>

        <div id="header-links">
        <h2><a href="./pages/uutiset.php">Uutiset</a></h2>
        <h2><a href="./pages/tilastot.php">Tilastot</a></h2>
        <h2><a href="./pages/joukkueet.php">Joukkueet</a></h2>
    </div>
    </header>
    <main>

       

    <section id="index-links">
        <a class="index-link" href="./pages/uutiset.php">Uutiset</a>
        <a class="index-link" href="./pages/tilastot.php">Tilastot</a>
        <a class="index-link" href="./pages/joukkueet.php">Joukkueet</a>
        
    </section>
     
</main>
<footer>
    <h3><a href="./pages/contact.php">Contact us</a></h3>
    
    <?php
    if (isset($_SESSION['logged_in'])) {
      echo ("<h3><a href='./php/logout.php'>Kirjaudu ulos</a></h3>");
      echo ("<p>Olet kirjautunut käyttäjällä: {$_SESSION['kayttajanimi']}</p>");
    } else {
      echo ("<h3><a href='./pages/kirjautumis.php'>Kirjaudu sisään</a></h3>");
    }
    
    ?>
</footer>
    
</body>
</html>