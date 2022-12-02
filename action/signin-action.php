<?php
require_once "../cfg/pdo.php";
$sql = "SELECT * FROM user_info WHERE username=:username AND password=SHA1(:password)";
$dataBinded=array(
    ':username' => $_POST['username'],
    ':password' => "cgh8rts67R67RXDRYçDSE5dtgFUYRGsety".$_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     header('Location:../index.php');//on le redirige sur la page d'accueil du site !
     exit() ;
}

?>
