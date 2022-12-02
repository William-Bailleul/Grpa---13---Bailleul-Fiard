<?php require_once 'action/contentProjet.php' ?>
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
    <?php require "components/navbar_index.php" ?>
    <?php
    require_once "cfg/config.php";
    $sql = "SELECT * FROM project WHERE id=:id";
    $dataBinded=array(
        ':id' => $_GET['id']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $user = $pre->fetch(PDO::FETCH_ASSOC);
    ?>
  <!-- Introduction block-->
  <div class="row">
    <div class="col s12 center gradient">
      <h1><?php echo $user['h1'] ?></h1>
    </div>
    <div class="intro-dbd center">
      <p><?php echo $user['p1'] ?></p>
    </div>
  </div>
  <!-- Cards -->
  <div class="col s12 m12 l12">
    <div class="parallax-container">
      <div class="parallax"><img src="<?php echo$user['para1'] ?>"
          alt="image de <?php echo $user['h1'] ?> en parallax"></div>
    </div>
  </div>
  <div class='row'>
    <div class="col s12 m9 offset-m2 l8 offset-l3">
      <div class="card horizontal animate__animated animate__backInLeft wow anim1">
        <div class="card-image">
          <img src="<?php echo $user['img1'] ?>" alt="image du <?php echo $user['h1'] ?>">
        </div>
        <div class="card-content">
          <p><?php echo $user['p2'] ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m12 l12">
    <div class="parallax-container">
      <div class="parallax"><img src="<?php echo $user['para2'] ?>"
          alt="image de <?php echo $user['h1'] ?> en parallax"></div>
    </div>
  </div>
  <div class='row'>
    <div class="col s12 m9 offset-m1 l8 offset-l1">
      <div class="card horizontal animate__animated animate__backInRight wow anim1v2">
        <div class="card-content">
          <p><?php echo $user['p3'] ?></p>
        </div>
        <div class="card-image">
          <img src="<?php echo $user['img2'] ?>" alt="image du <?php echo $user['h1'] ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m12 l12">
    <div class="parallax-container">
      <div class="parallax"><img src="<?php echo $user['para3'] ?>"
          alt="image <?php echo $user['h1'] ?> en parallax"></div>
    </div>
  </div>
  <div class='row'>
    <div class="col s12 m9 offset-m2 l8 offset-l3">
      <div class="card horizontal animate__animated animate__backInLeft wow anim1">
        <div class="card-image">
          <img src="<?php echo $user['img3'] ?>" alt="<?php echo $user['h1'] ?>">
        </div>
        <div class="card-content">
          <p><?php echo $user['p4'] ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m12 l12">
    <div class="parallax-container">
      <div class="parallax"><img src="<?php echo $user['para4'] ?>"
          alt="image de <?php echo $user['h1'] ?> en parallax"></div>
    </div>
  </div>
  <div class='row'>
    <div class="col s12 m9 offset-m1 l8 offset-l1">
      <div class="card horizontal animate__animated animate__backInRight wow anim1v2">
        <div class="card-content">
          <span class="card-title"></span>
          <p><?php echo $user['p5'] ?></p>
        </div>
        <div class="card-image">
          <img src="<?php echo $user['img4'] ?>" alt="image du <?php echo $user['h1'] ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m12 l12">
    <div class="parallax-container">
      <div class="parallax"><img src="<?php echo $user['para5'] ?>"
          alt="image de <?php echo $user['h1'] ?> en parallax"></div>
    </div>
  </div>
  <div class='row'>
    <div class="col s12 m9 offset-m2 l8 offset-l3">
      <div class="card horizontal animate__animated animate__backInLeft wow anim1">
        <div class="card-image">
          <img src="<?php echo $user['img5'] ?>" alt="image du <?php echo $user['h1'] ?>">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p><?php echo $user['p6'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require "components/footer_index.php" ?>
</body>
</html>
