<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Lobster|Roboto" rel="stylesheet"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fußball Tippspiel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    

<body>
    
  <div class="grid-container">
      
<!--NAVBAR-->
     <div class="item1">
         
        <nav>
            <div class="main-wrapper">
               <ul>
                   <li><a href="index.php">battletip</a></li>
                </ul>
                <div class="nav-login">
                    <?php
                      if(isset($_SESSION['u_id'])){
                          echo' <form action="logout.php" method="POST">
                          <button type="submit" name="submit">Logout</button>
                          </form>';
                      }else{
                          echo'
                   <form action="login.php" method="POST">
                       <input type="text" name="username" placeholder="Username">
                       <input type="password" name="pwd" placeholder="Password">
                       <button type="submit" name="submit">Login</button>
                    </form>
                    
                    <form action="register.php">
                    <button id="register" type="submit" name="register">Sign-Up</button>
                    </form>';
                      }
                    
                    ?>
                </div>
            
            </div>
        </nav>
    </div>
    
<!--SIDE-BAR-->
    <div class="item2"> 
      <aside>
        <ul>
          <a href="myTipgames.php"><li>Meine Tippspiele</li></a>
          <a href="gameRules.php"><li>Spielregeln</li></a>
        
          
        </ul>
      </aside>
    </div>