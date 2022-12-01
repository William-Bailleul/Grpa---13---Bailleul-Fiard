<?php
require_once "cfg/pdo.php";
$sql = "INSERT INTO user(email,password,login) VALUES(:email,:password,:login)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':username'=> $_POST['username']
    ':country'=> $_POST['country']
    ':phone_number'=> $_POST['phone_number']
    ':birth_date'=> $_POST['birth_date']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>
