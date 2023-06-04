<?php
session_start();
include '../connection.php';

$statusMsg = '';
$place = $_POST['place'];
$loc = $_POST['loc'];
$money = $_POST['price'];
$placeloc = $_POST['placeloc'];
$promo = $_POST['promo'];
$country = $_POST['country'];

$targetDir = "img/";
$fileName = basename($_FILES["img"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["update"]) && !empty($_FILES["img"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array(($fileType), $allowTypes)){
        if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)){
            $insert = $conn->query("UPDATE info SET logoName='$fileName'");
            if($insert){
              header('Location: adminpage.php');
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
?>