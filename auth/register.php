<?php 
session_start();
include_once('../config/dbconnect.php');

if(isset($_POST['submit'])){ 
    $name= mysqli_real_escape_string($conn, $_POST['name']);
   
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $phone= mysqli_real_escape_string($conn, $_POST['phone']);
    $password= mysqli_real_escape_string($conn , $_POST['password']);
    $Confirm_password= mysqli_real_escape_string($conn , $_POST['confirm_password']);
    


    if($password === $Confirm_password){ 


        $fetch=  "SELECT user_email from user WHERE user_email= '$email'";
        $fetch_run= mysqli_query($conn, $fetch);

        if(mysqli_fetch_row($fetch_run) > 0){ 
            $_SESSION['error']= "Email already exist!";
            header('Location:../../register.php');
            
        }
        else{ 
            $sql = "INSERT INTO user(name, user_email, user_phone, user_password) VALUES ('$name', '$email', '$phone', '$password')";
            $query= mysqli_query($conn, $sql);
            if($query){ 
                $_SESSION['success'] ="Your Account successfully Created";
                header('Location:../../login.php');

            }
            else{ 
                $_SESSION['error'] ="failed, try again";
                header('Location:../../register.php');
            }
        }

        
        
    }
    else{ 
        $_SESSION['error']= "password & confirm password don't match";
        header('Location:../../register.php');
    }



}



?> 