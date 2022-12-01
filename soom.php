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
  <div class="row">
    <div class="col s12 center gradient">
      <h1>Soom</h1>
    </div>
    <div class="intro center">
      <p>Soom est un jeu projet étudiant en développement.</p>
    </div>
  </div>
  <!-- Cards -->
  <div class='row'>
    <div class="col s12 m8 offset-m3 l7 offset-l1">
      <div class="card horizontal animate__animated animate__backInLeft wow anim1">
        <div class="card-image">
          <img src="img/soom-cards/soom1.jpeg" alt="image du jeu Soom">
        </div>
        <div class="card-content">
          <span class="card-title gradient">Introduction</span>
          <p>Soom est un jeu qui melange les genres RPG, Sandbox, Roguelike et BulletHell.
            Ce jeu imaginé par Loris Fiard est en cours de developpement. <br> Une première version fut créée en fin
            2021 puis reprise de 0 en 2022 avec un autre développeur, Lever.</p>
        </div>
      </div>
    </div>
  </div>

  <div class='row'>
    <div class="col s12 m9 offset-m2 l8 offset-l3">
      <div class="card horizontal animate__animated animate__backInRight wow anim1v2">
        <div class="card-content">
          <span class="card-title gradient">Synopsis</span>
          <p>Dans ce jeu, vous devrez sauver votre civilisation du roi corrompu par le diable.
            Afin de compléter cette mission, vous serez aider par une fée qui vous ramènera sur votre île lorsque vous
            mourrez.
            Vous utiliserez votre bateau pour explorer l'archipèle pleine de monstres.
            Trouvez des reliques, fabriquez des outils et améliorez vos capacités au fil de votre aventure. Combattez
            des boss, faites vous des alliez, construisez votre village et battez le roi démoniaque !</p>
        </div>
        <div class="card-image">
          <img src="img/soom-cards/soom2.jpeg" alt="image du jeu Soom">
        </div>
      </div>
    </div>
  </div>

  <div class='row'>
    <div class="col s12 m8 offset-m3 l7 offset-l1">
      <div class="card horizontal animate__animated animate__backInLeft wow anim1">
        <div class="card-image">
          <img src="img/soom-cards/soom3.jpeg" alt="image du jeu Soom">
        </div>
        <div class="card-content">
          <span class="card-title gradient">Mechaniques</span>
          <p>
            Creez de l'inercie en faisant tourner votre épée pour des attaques plus puissantes, mais ne cassez pas le
            rythme !
            <br>

            <br>
            Esquivez les attaques punitives de vos adversaires.
            <br>

            <br>
            Construisez et detruisez votre propre monde.
            <br>

            <br>
            Changez facilement d'inventaire pour vous adapter à toute situation.
            <br>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class='row'>
    <div class="col s12 m9 offset-m2 l8 offset-l3">
      <div class="card horizontal animate__animated animate__backInRight wow anim1v2">
        <div class="card-content">
          <span class="card-title gradient">Build</span>
          <p>Le jeu possède une capacité de build développée avec plusieurs blocs posables et 2 couches de hauteur
            différentes. Une grande quandtité de blocs sera à votre disposition, vous pourrez même construire votre
            maison !</p>
        </div>
        <div class="card-image">
          <img src="img/soom-cards/soom4.jpeg" alt="image du jeu Soom">
        </div>
      </div>
    </div>

    <div class='row'>
      <div class="col s12 m8 offset-m3 l7 offset-l1">
        <div class="card horizontal animate__animated animate__backInLeft wow anim1">
          <div class="card-image">
            <img src="img/soom-cards/soom5.jpeg" alt="image du jeu Soom">
          </div>
          <div class="card-content">
            <span class="card-title gradient">Style Graphique</span>
            <p>Nous avons choisi le Pixel Art pour un style plus retro et indé. L'art à été fait par Nyom en premier
              lieu puis nous sommes passé d'une 2D pur à une 3D avec illusion de 2D, nous avons alors fait l'art nous
              même. Cette amélioration nous a permit de rajouter plusieurs features comme des hauteurs différentes</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require "components/footer.php" ?>
</body>

</html>
