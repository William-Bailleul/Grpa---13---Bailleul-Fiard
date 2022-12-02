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
  <title>Profil</title>
</head>
<body>
  <?php require "components/navbar.php" ?>
  <div class="block1">
    <div class="col s10 offset-s1 l6 offset-l3 profile anim1">
      <div class="profileusername center">
        <img class="profilepicture" src="img/soom-cards/soom2.jpeg" alt="image du jeu Soom">

        <h1>
          <?php echo $_SESSION['user']['username']; ?>
        </h1>
      </div>
      <div class="profiledesc center">
        <h3>
          <?php echo "Born in : ".$_SESSION['user']['birth_date']; ?>
        </h3>
      </div>
      <?php if(isset($_SESSION['user']) && $_SESSION['user']['admin']==1){ ?>
        <div class="center admin-btn">
          <a class="waves-effect waves-light btn blue2" href="admin.php">Admin Panel</a>
        </div>
      <?php } ?>
    </div>
  </div>
  <?php require "components/js.php" ?>
</body>
</html>
