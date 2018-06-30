<?php

// Aufnehmen des Users in die Datenbank und testen der Bedingungen


if(isset($_POST['submit'])){
    
    include_once 'db.php';
    
    $first = mysqli_real_escape_string($connection,$_POST['first']);
    $last = mysqli_real_escape_string($connection,$_POST['last']);
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $pwd = mysqli_real_escape_string($connection,$_POST['pwd']);
    $type = 'user';
    
    //Error handlers
    //Check for empty fields
    
    if(empty($first) || empty($last) || empty($username) || empty($pwd)){
        header("Location: register.php?signup=empty");
        exit();
    }
    else{
        //Check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/" , $first) || !preg_match("/^[a-zA-Z]*$/" , $last)){
            header("Location: register.php?signup=invalid");
            exit();
        }
        else{
            $sql = "SELECT * FROM users WHERE user_username='$username'";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
               header("Location: register.php?signup=usertaken");
               exit();
            }
            
            else{
                //Hashing password
                $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
                //Insert the user into the database
                $sql = "INSERT INTO users (user_first, user_last, user_username, user_pwd, user_type) VALUES ('$first', '$last','$username','$hashed_pwd','$type')";
                mysqli_query($connection, $sql);
                header("Location: register.php?signup=success");
                exit();
            }
        }
    }
    
}
 else{
     header("Location: register.php");
     exit();
 }



?>