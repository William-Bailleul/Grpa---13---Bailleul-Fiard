<?php
require_once "../cfg/pdo.php";
$destination_para1 = "upload/".$_FILES['para1']['name']; //dossier "upload"
move_uploaded_file($_FILES['para1']['tmp_name'],"../".$destination_para1);
$destination_para2 = "upload/".$_FILES['para2']['name']; //dossier "upload"
move_uploaded_file($_FILES['para2']['tmp_name'],"../".$destination_para2);
$destination_para3 = "upload/".$_FILES['para3']['name']; //dossier "upload"
move_uploaded_file($_FILES['para3']['tmp_name'],"../".$destination_para3);
$destination_para4 = "upload/".$_FILES['para4']['name']; //dossier "upload"
move_uploaded_file($_FILES['para4']['tmp_name'],"../".$destination_para4);
$$destination_para5 = "upload/".$_FILES['para5']['name']; //dossier "upload"
move_uploaded_file($_FILES['para5']['tmp_name'],"../".$destination_para5);
$destination_img1 = "upload/".$_FILES['img1']['name']; //dossier "upload"
move_uploaded_file($_FILES['img1']['tmp_name'],"../".$destination_img1);
$destination_img2 = "upload/".$_FILES['img2']['name']; //dossier "upload"
move_uploaded_file($_FILES['img2']['tmp_name'],"../".$destination_img2);
$destination_img3 = "upload/".$_FILES['img3']['name']; //dossier "upload"
move_uploaded_file($_FILES['img3']['tmp_name'],"../".$destination_img3);
$destination_img4 = "upload/".$_FILES['img4']['name']; //dossier "upload"
move_uploaded_file($_FILES['img4']['tmp_name'],"../".$destination_img4);
$destination_img5 = "upload/".$_FILES['img5']['name']; //dossier "upload"
move_uploaded_file($_FILES['img5']['tmp_name'],"../".$destination_img5);

$sql = "SELECT * FROM project WHERE p1=:p1 AND p2=:p2 AND p3=:p3 AND p4=:p4 AND p5=:p5 AND p6=:p6 AND para1=:para1 AND para2=:para2 AND para3=:para3 AND para4=:para4 AND para5=:para5 AND img1=:img1 AND img2=:img2 AND img3=:img3 AND img4=:img4 AND img5=:img5";
$dataBinded=array(
    ':p1' => $_POST['p1'],
    ':p2' => $_POST['p2'],
    ':p3' => $_POST['p3'],
    ':p4' => $_POST['p4'],
    ':p5' => $_POST['p5'],
    ':p6' => $_POST['p6'],
    ':para1' => $destination_para1,
    ':para2' => $destination_para1,
    ':para3' => $destination_para1,
    ':para4' => $destination_para1,
    ':para5' => $destination_para5,
    ':img1' => $_POST['img1'],
    ':img2' => $_POST['img2'],
    ':img3' => $_POST['img3'],
    ':img4' => $_POST['img4'],
    ':img5' => $_POST['img5'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);

//header('Location:../projet.php');
?>
