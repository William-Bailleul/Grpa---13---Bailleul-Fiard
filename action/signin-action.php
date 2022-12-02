<?php
require_once "../cfg/pdo.php";
<<<<<<< HEAD
$sql = "SELECT * FROM user_info WHERE username=:username AND password=SHA1(:password)";
$dataBinded=array(
    ':username' => $_POST['username'],
    ':password' => "cgh8rts67R67RXDRYçDSE5dtgFUYRGsety".$_POST['password']
=======

$sql = "SELECT * FROM user_info WHERE username=:username AND password=:password";
$dataBinded=array(
  ':username'=> $_POST['username'],
  ':password'=> SHA1("cgh8rts67R67RXDRYçDSE5dtgFUYRGsety").$_POST['password'],
>>>>>>> 13723df032ad4f177785c9e3aa5679d263384df6
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
<<<<<<< HEAD
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     header('Location:../index.php');//on le redirige sur la page d'accueil du site !
     exit() ;
=======
  $_SESSION['error']="utilisateur ou mot de passe incorrect";
    echo("Mauvais Identifiant");
}
else{
  $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
  if($user['admin']==1) {
    header('Location:../admin.php');
  }
  else{
    header('Location:../index.php');
  }
>>>>>>> 13723df032ad4f177785c9e3aa5679d263384df6
}
?>
