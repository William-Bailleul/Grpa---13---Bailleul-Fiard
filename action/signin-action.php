<?php
require_once "../cfg/pdo.php";
$sql = "INSERT INTO user(username,password) VALUES(:username,:password)";
$dataBinded=array(
    ':username'   => $_POST['username'],
    ':password'=> SHA1("cgh8rts67R67RXDRYçDSE5dtgFUYRGsety".$_POST['password'])
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user[0]; //on enregistre que l'utilisateur est connecté
     header('Location:../index.php');//on le redirige sur la page d'accueil du site !
     exit() ;
}

?>
