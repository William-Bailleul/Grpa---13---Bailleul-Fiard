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
  <?php require "components/navbar.php" ?>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="terraria.php">Terraria</a></li>
      <li><a href="dbd.php">Dead By Daylight</a></li>
      <li><a href="soom.php">Soom</a></li>
      <li><a class="waves-effect waves-light btn modal-trigger blue2" href="#modal1">Contact</a></li>
      <li><i class="fa-solid fa-cat" id="nyan"></i></li>
    </ul>
  </header>

  <div class="row">
    <div class="col s12 center gradient">
      <h1>Terraria FanSite</h1>
    </div>
    <div class="intro center">
      <p>Durant 1 semaine, notre intervenant <a id="antoine"
          href="https://www.linkedin.com/in/antoine-di-roberto-8aa93768/" target="_blank">Antoine Di Roberto</a>, nous
        a demandé
        de réaliser un site internet sur notre jeu favoris, en trio. J’ai donc fait un site sur le jeu Terraria
        avec Benjamin Arhancet et Lilian Lafin.</p>
    </div>
  </div>


  <!-- Cards -->
  <div class="col s12 m12 l12">
    <div class="parallax-container">
      <div class="parallax"><img src="img/terraria-cards/terrariabg3.jpg" alt="image de promotion Terraria en parallax">
      </div>
    </div>
  </div>
  <div class='row'>
    <div class="col s12 m9 offset-m2 l8 offset-l3">
      <div class="card horizontal animate__animated animate__backInLeft wow anim1">
        <div class="card-image">
          <img id="pic3" src="img/terraria-cards/terracontent3.jpeg" alt="image du jeu dead by daylight">
        </div>
        <div class="card-content">
          <p>Nous avons commencé par le placement du logo, du titre, sous titre ( référence à Minecraft ) et de la barre
            de navigation. Nous avons mit un dropdown dans la nav, soit un menu déroulant pour se déplacer facilement
            dans le site. Nous avons ensuite raconté l'histoire du jeu et placé un trailer.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l12">
      <div class="parallax-container">
        <div class="parallax"><img src="img/terraria-cards/terrariabg3.jpg"
            alt="image de promotion Terraria en parallax"></div>
      </div>
    </div>
    <div class='row'>
      <div class="col s12 m9 offset-m1 l8 offset-l1">
        <div class="card horizontal animate__animated animate__backInRight wow anim1v2">
          <div class="card-content">
            <p>Nous avons ensuite parlé du contenu divers et varié de Terraria en passant par la phase de construction
              avec des images de construction ainsi que par le gameplay avec des images de contenu ( épées, mobs... )
              pour illustrer et donner une idée du style graphique.</p>
          </div>
          <div class="card-image">
            <img id="pic4" src="img/terraria-cards/terracontent1.jpeg" alt="image du jeu dead by daylight">
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l12">
      <div class="parallax-container">
        <div class="parallax"><img src="img/terraria-cards/terrariabg3.jpg"
            alt="image de promotion Terraria en parallax"></div>
      </div>
    </div>
    <div class='row'>
      <div class="col s12 m9 offset-m2 l8 offset-l3">
        <div class="card horizontal animate__animated animate__backInLeft wow anim1">
          <div class="card-image">
            <img id="pic5" src="img/terraria-cards/terracontent2.jpeg" alt="image du jeu dead by daylight">
          </div>
          <div class="card-content">
            <p>Nous avons également montré quelques boss pour donner un sentiment de challenge avec un bannière pour la
              catégorie à elle seule. Les boss sont aussi mit d'une taille adaptée à ce sentiment</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l12">
      <div class="parallax-container">
        <div class="parallax"><img src="img/terraria-cards/terrariabg3.jpg"
            alt="image de promotion Terraria en parallax"></div>
      </div>
    </div>
    <div class='row'>
      <div class="col s12 m9 offset-m1 l8 offset-l1">
        <div class="card horizontal animate__animated animate__backInRight wow anim1v2">
          <div class="card-content">
            <span class="card-title"></span>
            <p>Pour finir, nous avons mit en place un formulaire de contact ainsi que le lien d'un let's play pour ceux
              qui voudraient un avant-goût. Et enfin, nous avons mit les réseaux de Re-Logic ( créateurs de Terraria )
              dans le footer.</p>
          </div>
          <div class="card-image">
            <img id="pic6" src="img/terraria-cards/terracontent4.jpeg" alt="image du jeu dead by daylight">
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require "components/footer.php" ?>
</body>

</html>
