<?php

session_start();

?>


<!-- Anzeigen der Spielregeln-->

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
             <a href="tippuebersicht.php"><li>Tippübersicht</li></a>
            <a href="tippabgabe.php"><li>Tippabgabe</li></a>
            <a href="spielergebnisse.php"><li>Spielergebnisse</li></a>
            <a href="tabelle.php"><li>Tabelle</li></a>
            <a href="spielregeln.php"><li>Spielregeln</li></a>
           
          
        </ul>
      </aside>
    </div>              
      
<!--MAIN-SCREEN-->
    <div class="item3">
        <h1>Spielregeln</h1><br><br>
        <ul>
            <li><b>Tippmodus</b>: Es wird das <b>genaue Ergebnis </b>getippt, d.h. <b>"nach Elfmeterschießen"</b>.</li>
            <li><b>Tippabgaberegel</b>: Die Tippzeit <b>endet X Minuten vor</b> dem Start des jeweiligen Ereignisses.</li>
            <li><b>Punkteregel</b>: Sieg/Unentschieden = 2 Pkt., Tordifferenz = 3 Pkt., Ergebnis = 4 Pkt.</li>
        </ul>
    </div>
      
<!--Footer-->
<?php 
include_once 'footer.php';
?>