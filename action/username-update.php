<?php require_once "../cfg/pdo.php";

$sql = "UPDATE user_info SET username = :username WHERE id = :id";
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':username'=> $_POST['username'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');
exit();
?>
