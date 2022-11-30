<html lang="fr">

<head>
</head>

<?php
  if (isset($_POST['username'])) {
    echo htmlentities($_POST['username']);
  }

  if(strlen($_POST['username']) > 16 )
  {
    echo 'Nom d\'utilisateur trop long';
  }
?>

<body>
</body>


</html>
