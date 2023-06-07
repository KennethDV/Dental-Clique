<?php
session_start();
include '../connection.php';

// $statusMsg = '';

// $placeloc = $_POST['placeloc'];
// $promo = $_POST['promo'];
// $country = $_POST['country'];

// $targetDir = "img/";
// $fileName = basename($_FILES["logoName"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


// if(isset($_POST["update"]) && !empty($_FILES["logoName"]["name"])){
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
//     if(in_array(($fileType), $allowTypes)){
//         if(move_uploaded_file($_FILES["logoName"]["tmp_name"], $targetFilePath)){
//             $insert = $conn->query("UPDATE info SET logoName='$fileName'");
//             if($insert){
//               header('Location: adminpage.php');
//             }else{
//                 $statusMsg = "Sorry, there was an error uploading your file.";
//             }
//         }else{
//             $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//         }
//     }
// }else{
//     $statusMsg = 'Please select a file to upload.';
// }

if (isset($_POST['update'])) {

    $home1 = $_POST['homedesc1'];
    $home2 = $_POST['homedesc2'];
    $abdesc = $_POST['aboutus'];
    $serve1 = $_POST['serve1'];
    $serve2 = $_POST['serve2'];
    $serve3 = $_POST['serve3'];
    $serve4 = $_POST['serve4'];
    $serve5 = $_POST['serve5'];
    $serve6 = $_POST['serve6'];


    $query = "UPDATE info SET homedesc1='$home1', homedesc2='$home2', aboutus='$abdesc', service1='$serve1', service2='$serve2', service3='$serve3', service4='$serve4', service5='$serve5', service6='$serve6' WHERE info_id='1'";
    $query_run = mysqli_query($con, $query);

    if ($query_run){
        echo 'Updated Successfully';
        header("Location: adminpage.php");
    }
}
?>