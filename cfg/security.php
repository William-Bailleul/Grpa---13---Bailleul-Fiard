<?php require "pdo.php";

 if(isset($_SESSION['user']) && ($_SESSION['user']['admin'] == 1 )){
    }else{
      header('Location:index.php');
      exit();
}
?>
