<?php
require_once "../cfg/pdo.php";
$sql = "SELECT * FROM user_info WHERE username=:username AND password=SHA1(:password)";
$dataBinded=array(
    ':username' => $_POST['username'],
    ':password' => "cgh8rts67R67RXDRYçDSE5dtgFUYRGsety".$_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
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
}
?>
