<?php require_once "../cfg/pdo.php";

$sql = "SELECT * FROM user_info WHERE id=:id";
$dataBinded=array(
    ':id'=> $_POST['id'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $user){


if($user['admin']==0){
    $user_info['admin']=1;
}else{
    $user_info['admin']=0;
}

}
header('Location:../admin.php');
exit();
?>
