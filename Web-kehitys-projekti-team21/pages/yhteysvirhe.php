<?php
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-kehitys-projekti-team21/css/styles.css">
    <title>Yhteysvirhe</title>

<style>
        footer{
        width: auto;
        display: flex;
        justify-content: center;
         }

         body, html{
            height: 100%;
         }
         
         main{
            background-image: url('/web-kehitys-projekti-team21/images/patrik.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 150%;
            margin: 0;
            max-width: 100%;
            padding: 0; 
         }

         .section-text {
            color: #000000;;
            font-size:xx-large;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-left: -500px;
            margin-top: -200px;

         }
         

        
</style>
</head>
<body>
    
    <header>
        <h1><a href="/web-kehitys-projekti-team21/index.php">Liiga - Suomen parasta kiekkoa</a></h1>

        <div id="header-links">
        <h2><a href="/web-kehitys-projekti-team21/pages/uutiset.php">Uutiset</a></h2>
        <h2><a href="/web-kehitys-projekti-team21/pages/tilastot.php">Tilastot</a></h2>
        <h2><a href="/web-kehitys-projekti-team21/pages/joukkueet.php">Joukkueet</a></h2>
    </div>
    </header>
<main>

<section>
    <div class=section-text>
    <h2>Hups!</h2>
    <p>Tapahtui odottamaton virhe.</p>
    </div>
</section>

</main>
<footer>
    <h3><a href="/web-kehitys-projekti-team21/pages/contact.php">Contact us</a></h3>
    

</footer>

</body>
</html>