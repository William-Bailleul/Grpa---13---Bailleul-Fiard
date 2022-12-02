<?php require_once "../cfg/pdo.php";

$sql = "UPDATE user_info SET country = :country WHERE id = :id";
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':country'=> $_POST['country'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');
exit();
?>
