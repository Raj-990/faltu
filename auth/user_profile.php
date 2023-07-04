<?php

session_start();

include '../config/dbconnect.php';

if(isset($_POST['update'])){
   $id = $_POST['user_id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $update  = "UPDATE `user` SET `name`='$name',`user_email`='$email',`user_phone`='$phone' WHERE user_id= '$id'";

  $update_run = mysqli_query($conn, $update);

  if($update_run){
    $_SESSION['message'] ="Profile Updated";
    header('Location:../user_profile.php');
    exit();

  }else{

    $_SESSION['error'] ="Profile not updated";
    header('Location:../user_profile.php');
    exit();

  }


}

?>
