<?php require_once "../cfg/pdo.php";

$sql = "UPDATE user_info SET email = :email WHERE id = :id";
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':email'=> $_POST['email'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');
exit();
?>
