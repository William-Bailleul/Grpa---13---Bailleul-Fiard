<?php require_once "../cfg/pdo.php";

$sql = "DELETE FROM user_info WHERE id = :id";
$dataBinded=array(
    ':id'=> $_POST['id'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');
exit();

?>
