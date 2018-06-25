<?php

session_start();

if (isset($_POST['submit'])){
    
    include 'db.php';
    
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $pwd = mysqli_real_escape_string($connection,$_POST['pwd']);
    
    
    //error handlers
    //check if inputs are empty
    if(empty($username)||empty($pwd)){
        header("Location: index.php?login=empty");
        exit();
    } else{
        $sql = "SELECT * FROM users WHERE user_username = '$username'";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: index.php?login=error1");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)){
                // De-hashing password
                $hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
                if($hashedPwdCheck==false){
                    header("Location: index.php?login=error..pw..falsch");
                    exit();
                    //IF user_type = admin ODER IF user_type = user FALLS ADMIN WIR EINE ANDERE SEITE ANGEZEIGT?
                } elseif($hashedPwdCheck==true){
                    //login the user here
                   
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_username'] = $row['user_username'];
                    $_SESSION['u_usertype'] = $row['user_type'];
                    
                    
                    if($_SESSION['u_usertype']==admin){
                    header("Location: index.php?login=success_welcomeAdmin");
                    exit();
                    }
                    
                    elseif($_SESSION['u_usertype']==user){
                    header("Location: index.php?login=success_welcomeUser");
                    exit();   
                    }
                    
                  
                    
                    
                }
            }
        }
        
    }
  
} else{
    header("Location: index.php?login=error");
    exit();
}

?>