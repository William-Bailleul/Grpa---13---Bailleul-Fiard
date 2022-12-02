<?php require_once "../cfg/pdo.php";
  unset($_SESSION['user']);
  header('Location:../index.php');
  exit();
 ?>
