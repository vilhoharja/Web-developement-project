<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestit</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1><a href="../index.php">Liiga - Suomen parasta kiekkoa</a></h1>
        <div id="header-links">
            <h2><a href="../pages/uutiset.php">Uutiset</a></h2>
            <h2><a href="../pages/tilastot.php">Tilastot</a></h2>
            <h2><a href="../pages/joukkueet.php">Joukkueet</a></h2>
        </div>
    </header>

    <main>
        <section>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //Avataan tietokanta yhteys
                include('./connect.php');
                //Tarkistetaan onko käyttäjä kirjautuneena
                if(isset($_SESSION['id'])){
                
                    if (isset($_POST['kommentti'])) {
                        //Haetaan lomakkeelta saadut tiedot.
                        $kommentti = $_POST['kommentti'];
                        $email = $_POST['email'];
                        $kayttajatunnus = $_SESSION['kayttajanimi'];

                        //Haetaan käyttäjän id istunnosta.
                        $user_id = $_SESSION['id'];

                        //Valmistellaan lauseke, joka lisää viestin tietokantaan
                        $sql = "INSERT INTO contact (message, user_id, email) VALUES (?, ?, ?)";
                        $stmt = $yhteys->prepare($sql);
                        $stmt->bind_param("sis", $kommentti, $user_id, $email);
                        $stmt->execute();

                        //Tarkistetaan onnistuiko viestin lisääminen.
                        if ($stmt->affected_rows > 0) {
                            print "Viesti lähetetty.";
                        } else {
                            print "Viestin lähetys epäonnistui.";
                        }

                        $stmt->close();
                        $yhteys->close();
                    } else {
                        print "Kaikkia tarvittavia tietoja ei ole annettu.";
                    }
                }else{ //Jos käyttäjä ei ole kirjautunut niin lähdetään tästä

                    if (isset($_POST['kommentti'])) {
                        $kommentti = $_POST['kommentti'];
                        $email = $_POST['email'];
                        
                        //Lisää tietokantaan viesti ja sähköpostiosoite.
                        $sql = "INSERT INTO contact (message, email) VALUES (?, ?)"; 
                        $stmt = $yhteys->prepare($sql);
                        $stmt->bind_param("ss", $kommentti, $email);
                        $stmt->execute();

                        if ($stmt->affected_rows > 0) {
                            print "Viesti lähetetty.";
                        } else {
                            print "Viestin lähetys epäonnistui.";
                        }

                        //Suljetaan yhteys
                        $stmt->close();
                        $yhteys->close();
                    } else {
                        print "Kaikkia tarvittavia tietoja ei ole annettu.";
                    }
                }
            } else {
                print "Lomaketta ei ole lähetetty.";
            }
            ?>
            <meta http-equiv="refresh" content="2; url=../pages/contact.php" />
        </section>
    </main>

</body>
</html>