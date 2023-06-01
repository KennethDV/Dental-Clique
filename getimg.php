<?php
include 'connection.php';

  $id = $_GET['id'];
  // do some validation here to ensure id is safe
 
  $query = "SELECT * FROM info WHERE info_id=$id";
  $res = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($res);
  mysqli_close($con);

  header("Content-type: image/jpeg");
  echo $row['navbar_logo'];
?>