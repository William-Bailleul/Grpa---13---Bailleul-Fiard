<?php
$sql = "UPDATE project SET p1=:p1, p2=:p2, p3=:p3, p4=:p4, p5=:p5, p6=:p6, para1=:para1, para2=:para2, para3=:para3, para4=:para4, para5=:para5, img1=:img1, img2=:img2, img3=:img3, img4=:img4, img5=:img5 WHERE id=:id";

$destination_para1 = "upload/".$_FILES['para1']['name']; //dossier "upload"
move_uploaded_file($_FILES['para1']['tmp_name'],"../".$destination_para1);
$destination_para2 = "upload/".$_FILES['para2']['name']; //dossier "upload"
move_uploaded_file($_FILES['para2']['tmp_name'],"../".$destination_para2);
$destination_para3 = "upload/".$_FILES['para3']['name']; //dossier "upload"
move_uploaded_file($_FILES['para3']['tmp_name'],"../".$destination_para3);
$destination_para4 = "upload/".$_FILES['para4']['name']; //dossier "upload"
move_uploaded_file($_FILES['para4']['tmp_name'],"../".$destination_para4);
$destination_para5 = "upload/".$_FILES['para5']['name']; //dossier "upload"
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

//pour modifier un projet
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
    ':img1' => $destination_img1,
    ':img2' => $destination_img2,
    ':img3' => $destination_img3,
    ':img4' => $destination_img4,
    ':img5' => $destination_img5,

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');
?>
