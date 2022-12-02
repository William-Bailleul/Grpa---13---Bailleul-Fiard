<?php require_once "cfg/security.php" ?>
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
  <title>Admin Panel</title>
</head>
<body>
  <?php require "components/navbar.php" ?>
  <div class="panel col s10 offset-s1 l6 offset-l3 anim1">
    <h1>Panel Admin</h1>
    <h2>Modifier page D'accueil</h2>
    <h2>Créer page projet</h2>
    <h2>Liste des utilisateurs</h2>
    <?php
    $sql = "SELECT * FROM user_info";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $user){ ?>
    <div class="block1">
      <h3><?php echo $user['username'] ?></h3>
      <form method="post" action="action/username-update.php">
        <input type='username' name='username' placeholder="username"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>
      <h3><?php echo $user['admin'] ?></h3>

      <h3><?php echo $user['email'] ?></h3>
      <form method="post" action="action/mail-update.php">
        <input type='mail' name='email' placeholder="email"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>" />
        <input type='submit' value='Modifier' />
      </form>

      <h3><?php echo $user['country'] ?></h3>
      <form method="post" action="action/country-update.php">
        <input type='country' name='country' placeholder="country"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>

      <h3><?php echo $user['phone_number'] ?></h3>
      <form method="post" action="action/phone-number-update.php">
        <input type='phone_number' name='phone_number' placeholder="phone number"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>

      <h3><?php echo $user['birth_date'] ?></h3>
      <form method="post" action="action/birth-date-update.php">
        <input type='birth_date' name='birth_date' placeholder="birth date"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>

      <form method="post" action="action/delete-user.php" >
      <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
      <input type='submit' value='Supprimer' />
    </form>
      <form method="post" action="action/put-admin.php" >
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='Mettre Admin' />
      </form>
    </div>
    <?php } ?>

  </div>
  <?php require "components/js.php" ?>
</body>
</html>
