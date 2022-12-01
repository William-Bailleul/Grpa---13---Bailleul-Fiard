<?php
require_once "../cfg/pdo.php";
$sql = "SELECT * FROM user WHERE username=:username AND password=:password";
$dataBinded=array(
  ':username' => $_POST['username'],
  ':password' => $_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetchall(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
     print_r("oups"); exit() ;
}else{
     $_SESSION['user'] = $user[0]; //on enregistre que l'utilisateur est connecté
     print_r($_SESSION['username']); exit() ;
}

//header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>
