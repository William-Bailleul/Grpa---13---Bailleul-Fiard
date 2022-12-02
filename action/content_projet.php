<?php
require_once "../cfg/pdo.php";
$sql = "SELECT * FROM project WHERE p1=:p1 AND p2=:p2 AND p3=:p3 AND p4=:p4 AND p5=:p5 AND p6=:p6 AND para1=:para1 AND para2=:para2 AND para3=:para3 AND para4=:para4 AND para5=:para5 AND img1=:img1 AND img2=:img2 AND img3=:img3 AND img4=:img4 AND img5=:img5";
$dataBinded=array(
    ':p1' => $_POST['p1'],
    ':p2' => $_POST['p2'],
    ':p3' => $_POST['p3'],
    ':p4' => $_POST['p4'],
    ':p5' => $_POST['p5'],
    ':p6' => $_POST['p6'],
    ':para1' => $_POST['para1'],
    ':para2' => $_POST['para2'],
    ':para3' => $_POST['para3'],
    ':para4' => $_POST['para4'],
    ':para5' => $_POST['para5'],
    ':img1' => $_POST['img1'],
    ':img2' => $_POST['img2'],
    ':img3' => $_POST['img3'],
    ':img4' => $_POST['img4'],
    ':img5' => $_POST['img5'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);

//header('Location:../admin.php');
?>
