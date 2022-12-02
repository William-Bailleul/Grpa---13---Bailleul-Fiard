<?php
require_once "../cfg/pdo.php";
$sql = "INSERT INTO contact(first_name,last_name,email,message) VALUES(:first_name,:last_name,:email,:message)";
$dataBinded=array(
    ':first_name'=> $_POST['first_name'],
    ':last_name'=> $_POST['last_name'],
    ':email'=> $_POST['email'],
    ':message'=> $_POST['message'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:../index.php');
exit();
?>
