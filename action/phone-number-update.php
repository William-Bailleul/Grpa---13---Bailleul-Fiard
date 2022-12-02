<?php require_once "../cfg/pdo.php";

$sql = "UPDATE user_info SET phone_number = :phone_number WHERE id = :id";
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':phone_number'=> $_POST['phone_number'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');
exit();
?>
