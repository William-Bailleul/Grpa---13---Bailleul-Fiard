<?php
require_once "../cfg/pdo.php";
$sql = "INSERT INTO user_info(email,password,username,country,phone_number,birth_date) VALUES(:email,:password,:username,:country,:phone_number,:birth_date)";
$dataBinded=array(
    ':email'=> $_POST['email'],
    ':password'=> SHA1("cgh8rts67R67RXDRYçDSE5dtgFUYRGsety").$_POST['password'],
    ':username'=> $_POST['username'],
    ':country'=> $_POST['country'],
    ':phone_number'=> $_POST['phone_number'],
    ':birth_date'=> $_POST['birth_date'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('Location:../index.php');//on le redirige sur la page d'accueil du site !
//exit()
?>
