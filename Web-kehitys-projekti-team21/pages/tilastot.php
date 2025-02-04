<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tilastot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">


<style>

.logo-column{
display: flex;
flex-wrap: wrap;
margin-right: 5px;
margin-bottom: 2px;
}

.logo{
    display: flex;
    width: 10%;
    height:auto;
    max-width: 150px;
    max-height: 150px;
}

body{
    background-color: grey;
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
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Joukkue</th>
                <th scope="col">O</th>
                <th scope="col">V</th>
                <th scope="col">T</th>
                <th scope="col">H</th>
                <th scope="col">LP</th>
                <th scope="col">P</th>
                <th scope="col">P/O</th>
                <th scope="col">TM</th>
                <th scope="col">PM</th>
                <th scope="col">ME</th>
                <th scope="col">YV%</th>
                <th scope="col">AV%</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/Tampereen_Ilveksen_logo.png" alt="Ilves logo">Ilves</td>
                <td>42</td>
                <td>22</td>
                <td>9</td>
                <td>11</td>
                <td>3</td>
                <td>78</td>
                <td>1.857</td>
                <td>130</td>
                <td>110</td>
                <td>20</td>
                <td>26,81%</td>
                <td>77,52%</td>

              </tr>
              <tr>
                <th scope="row">2</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/1200px-Tapparan_logo.svg.png" alt="Tappara logo">Tappara</td>
                <td>38</td>
                <td>20</td>
                <td>10</td>
                <td>8</td>
                <td>6</td>
                <td>76</td>
                <td>2.000</td>
                <td>129</td>
                <td>91</td>
                <td>38</td>
                <td>23,08%</td>
                <td>82,46%</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/HIFK-Jääkiekko.png" alt="HIFK logo">HIFK</td>
                <td>41</td>
                <td>16</td>
                <td>15</td>
                <td>10</td>
                <td>7</td>
                <td>70</td>
                <td>1.707</td>
                <td>123</td>
                <td>95</td>
                <td>28</td>
                <td>19,81%</td>
                <td>87,07%</td>
              </tr>
              <tr>
              <th scope="row">4</th>
              <td class="logo-column"><img class="logo" src="../images/joukkuelogot/Pelicans_logo.png" alt="Pelicans logo">Pelicans</td>
              <td>40</td>
              <td>19</td>
              <td>9</td>
              <td>12</td>
              <td>3</td>
              <td>69</td>
              <td>1.725</td>
              <td>113</td>
              <td>105</td>
              <td>8</td>
              <td>15,62%</td>
              <td>77,98%</td>
              </tr>
              <tr>
              <th scope="row">5</th>
              <td class="logo-column"><img class="logo" src="../images/joukkuelogot/Mikkelin_Jukurit_logo.png" alt="Jukurit logo">Jukurit</td>
              <td>39</td>
              <td>20</td>
              <td>6</td>
              <td>13</td>
              <td>1</td>
              <td>67</td>
              <td>1.718</td>
              <td>125</td>
              <td>94</td>
              <td>31</td>
              <td>27,15%</td>
              <td>80,95%</td>
              </tr>
              <tr>
              <th scope="row">6</th>
              <td class="logo-column"><img class="logo" src="../images/joukkuelogot/kärpät.png" alt="Kärpät logo">Kärpät</td>
              <td>40</td>
              <td>17</td>
              <td>8</td>
              <td>15</td>
              <td>4</td>
              <td>63</td>
              <td>1.575</td>
              <td>111</td>
              <td>104</td>
              <td>7</td>
              <td>24,11%</td>
              <td>80,83%</td>
              </tr>
              <tr>
              <th scope="row">7</th>
              <td class="logo-column"><img class="logo" src="../images/joukkuelogot/KalPa_logo.svg.png" alt="KalPa logo">Kalpa</td>
              <td>37</td>
              <td>17</td>
              <td>7</td>
              <td>13</td>
              <td>4</td>
              <td>62</td>
              <td>1.676</td>
              <td>111</td>
              <td>94</td>
              <td>17</td>
              <td>17,29%</td>
              <td>83,93%</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/Rauman_Lukon_lukko_logo.svg.png" alt="Lukko logo">Lukko</td>
                <td>39</td>
                <td>16</td>
                <td>9</td>
                <td>14</td>
                <td>5</td>
                <td>62</td>
                <td>1.590</td>
                <td>102</td>
                <td>100</td>
                <td>2</td>
                <td>18,42%</td>
                <td>82,30%</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/246px-Ässät_Logo.svg.png" alt="Ässät logo">Ässät</td>
                <td>40</td>
                <td>13</td>
                <td>14</td>
                <td>13</td>
                <td>6</td>
                <td>59</td>
                <td>1.475</td>
                <td>89</td>
                <td>87</td>
                <td>2</td>
                <td>16,67%</td>
                <td>81,20%</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/TPS_logo.png" alt="TPS logo">TPS</td>
                <td>42</td>
                <td>10</td>
                <td>15</td>
                <td>17</td>
                <td>12</td>
                <td>57</td>
                <td>1.357</td>
                <td>105</td>
                <td>116</td>
                <td>-11</td>
                <td>18,46%</td>
                <td>83,08%</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/Vaasan_Sport_logo.svg.png" alt="Sport logo">Sport</td>
                <td>41</td>
                <td>15</td>
                <td>7</td>
                <td>19</td>
                <td>2</td>
                <td>54</td>
                <td>1.317</td>
                <td>102</td>
                <td>114</td>
                <td>-12</td>
                <td>21,05%</td>
                <td>91.65%</td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/1200px-Kookoon.svg.png" alt="KooKoo logo">KooKoo</td>
                <td>40</td>
                <td>11</td>
                <td>12</td>
                <td>17</td>
                <td>8</td>
                <td>53</td>
                <td>1.325</td>
                <td>113</td>
                <td>115</td>
                <td>-2</td>
                <td>21,05%</td>
                <td>73,98%</td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/HPK_logo.png" alt="HPK logo">HPK</td>
                <td>40</td>
                <td>14</td>
                <td>6</td>
                <td>20</td>
                <td>3</td>
                <td>51</td>
                <td>1.275</td>
                <td>84</td>
                <td>112</td>
                <td>-28</td>
                <td>20,97%</td>
                <td>77,27%</td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/JYP_juhlalogo.png" alt="JYP logo">JYP</td>
                <td>39</td>
                <td>12</td>
                <td>8</td>
                <td>19</td>
                <td>5</td>
                <td>49</td>
                <td>1.256</td>
                <td>96</td>
                <td>120</td>
                <td>-24</td>
                <td>26,55%</td>
                <td>71,54%</td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td class="logo-column"><img class="logo" src="../images/joukkuelogot/Saimaan_Pallo_(SaiPa)_logo.svg.png" alt="SaiPa logo">SaiPa</td>
                <td>38</td>
                <td>2</td>
                <td>13</td>
                <td>23</td>
                <td>5</td>
                <td>24</td>
                <td>0.632</td>
                <td>81</td>
                <td>157</td>
                <td>-76</td>
                <td>16,33%</td>
                <td>67,35%</td>
              </tr>
            </tbody>
          </table>
    </main>

    <footer>
      <h3><a href="./contact.php">Contact us</a></h3>
      
      <?php
      if (isset($_SESSION['logged_in'])) {
        echo ("<h3><a href='../php/logout.php'>Kirjaudu ulos</a></h3>");
        echo ("<p>Olet kirjautunut käyttäjällä: {$_SESSION['kayttajanimi']}</p>");
      } else {
        echo ("<h3><a href='./kirjautumis.php'>Kirjaudu sisään</a></h3>");
      }
      
      ?>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>