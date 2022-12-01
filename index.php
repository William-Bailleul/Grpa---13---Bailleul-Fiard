<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <!--Import materialize.css-->
  <link id="theme-controller" type="text/css" rel="stylesheet" href="css/theme-dark.css">
  <link type="text/css" rel="stylesheet" href="css/materialize.css">
  <link type="text/css" rel="stylesheet" href="css/script.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="icon" href="img/syphon.jpg">
  <title>Syphon Games</title>
</head>
<body>
  <header>
  <?php require "components/navbar.php"?>
  <!-- Carousel -->
  <div class="row">
    <div class="col s12 l8 offset-l2">
      <div class="content">
        <div class="carousel carousel-slider grey-outline">
          <div class="carousel-item" id="terra_carou">
            <img src="img/terraria.jpg" alt="image du projet terraria">
          </div>
          <div class="carousel-item" id="dbd_carou">
            <img src="img/dbd-cards/dbd1.jpg" alt="image du projet dead by daylight">
          </div>
          <div class="carousel-item" id="soom_carou">
            <img src="img/soom.jpeg" alt="image du jeu soom">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- "Le Studio" Premier bloc -->
  <div class="block1">
    <div class="row animate__animated animate__fadeIn wow">
      <div class="col s10 offset-s1 l6 offset-l3 description anim1">
        <div class="center gradient">
          <h2>Le Studio</h2>
        </div>
        <p>Syphon Games est un petit studio étudiant créé en janvier 2022 pour gérer un
          projet de jeu vidéo : Soom.
          <br>
          Les projets étudiants du studio seront présentés sur le site.
          Vous retrouverez alors 2 fan sites de Terraria et Dead By Daylight ansi que le projet Soom.
        </p>
      </div>
    </div>
  </div>
  <!-- "Les membres" Deuxime bloc -->
  <div class="block2">
    <div class="row">
      <div class="col s10 offset-s1 l6 offset-l3 center animate__animated animate__backInUp wow identity">
        <div class="center gradient">
          <h2>Les Membres</h2>
        </div>
        <div class="col s12 l6">
          <div class="anim2">
            <img id="pic1" src="img/clou.jpg" alt="magnifique photo de Fiard Loris">
          </div>
          <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-3">
                <div class="card-content white-text">
                  <span class="card-title">Loris Fiard</span>
                  <p>Né le 6 juillet 2005.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 l6">
          <div class="anim2">
            <img id="pic2" src="img/perceuse.jpg" alt="magnifique photo de Bailleul WIlliam">
          </div>
          <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-3">
                <div class="card-content white-text">
                  <span class="card-title">William Bailleul</span>
                  <p>Né le 18 juillet 2004.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require "components/footer.php" ?>

</body>

</html>
