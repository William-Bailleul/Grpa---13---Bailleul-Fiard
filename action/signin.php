<!DOCTYPE html>
<html>
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
    <title>Se connecter</title>
  </head>
  <body>
    <?php require "components/navbar.php" ?>
    <?php
      if (isset($_POST['username'])) {
        echo $_POST['username'];
      }
    ?>
    <div class="block1">
      <div class="row animate__animated animate__fadeIn wow">
        <div class="col s10 offset-s1 l6 offset-l3 description anim1">
          <div class="center">
            <form action="action/signin-A.php" method="post" name="signin">
              <div class="gradient">
              <input type='text' name='username' placeholder="nom d'utilisateur" /> <br>
              <input type='password' name='password' placeholder="mot de passe" /> <br>
              </div>
            <div class="center login-btn">
              <button class="btn" type="submit" name="action">Terminer</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require "components/footer.php" ?>
  </body>
</html>
