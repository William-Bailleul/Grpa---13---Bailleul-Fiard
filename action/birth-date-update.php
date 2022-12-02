<?php require_once "../cfg/pdo.php";

$sql = "UPDATE user_info SET birth_date = :birth_date WHERE id = :id";
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':birth_date'=> $_POST['birth_date'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');
exit();
?>
