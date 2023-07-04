<?php

session_start();

include '../config/dbconnect.php';

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $fetch = "SELECT * FROM user WHERE user_email = '$email' && user_password ='$password'";
    $fecth_run = mysqli_query($conn, $fetch);

    if(mysqli_num_rows($fecth_run) > 0){
        
        $data =mysqli_fetch_assoc($fecth_run);

        $_SESSION['auth'] = true;

        $username  = $data['name'];
     
        $user_id  = $data['user_id'];

        $email  = $data['user_email'];
       
        $phone = $data['user_phone'];

        $role_as = $data['role_as'];

        $_SESSION['auth_user'] = [
            'name' =>  $username,
            'user_email' =>  $email,
            'user_phone' =>  $phone,
            'user_id'   => $user_id
        ];
        echo $username;

        $_SESSION['role_as'] = $role_as;

        if($role_as == 1){
            $_SESSION['success'] = "Welcome to Dashboard!";
             header('Location:../../admin//dashboard.php');
            exit();
         
            
        }else{
            $_SESSION['success'] = "You are loginned!";
            header('Location:../../index.php');
        }

    }
    else{
        $_SESSION['error'] = "Login Failed!";
        header('Location:../../login.php');
    }
 

}



?>

<a href="../admin//dashboard.php"></a>
