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
             <a href="tippuebersicht.php"><li>Tippübersicht</li></a>
            <a href="tippabgabe.php"><li>Tippabgabe</li></a>
            <a href="spielergebnisse.php"><li>Spielergebnisse</li></a>
            <a href="tabelle.php"><li>Tabelle</li></a>
            <li>Spielregeln</li>
            <li>Mein Profil</li>
          
        </ul>
      </aside>
    </div>
      
<!--MAIN-SCREEN-->
    <div class="item3">
        
       <h1>Tabelle WM 2018</h1>  
  
        
<!--Tabelle 1-->
   <table id="table">
  <tr>
    <th>Gruppe A</th>
    <th>Spiele</th> 
    <th>Punkte</th>
      <th>Tore</th>
  </tr>
  <tr>
    <td>1.Uruguay</td>
    <td>3</td>
    <td>9</td>
      <td>5:0</td>
  </tr>
  <tr>
    <td>2.Russland</td>
    <td>3</td>
    <td>6</td>
      <td>8:4</td>
  </tr>
  <tr>
    <td>3.Saudi-Arabien</td>
    <td>3</td>
    <td>3</td>
      <td>2:7</td>
  </tr>
        <tr>
    <td>4.Ägypten</td>
    <td>3</td>
    <td>0</td>
      <td>2:6</td>
  </tr>
</table>
        
        <!--Tabelle 1-->
   <table id="table">
  <tr>
    <th>Gruppe A</th>
    <th>Spiele</th> 
    <th>Punkte</th>
      <th>Tore</th>
  </tr>
  <tr>
    <td>1.Uruguay</td>
    <td>3</td>
    <td>9</td>
      <td>5:0</td>
  </tr>
  <tr>
    <td>2.Russland</td>
    <td>3</td>
    <td>6</td>
      <td>8:4</td>
  </tr>
  <tr>
    <td>3.Saudi-Arabien</td>
    <td>3</td>
    <td>3</td>
      <td>2:7</td>
  </tr>
        <tr>
    <td>4.Ägypten</td>
    <td>3</td>
    <td>0</td>
      <td>2:6</td>
  </tr>
</table>
        
        <!--Tabelle 1-->
   <table id="table">
  <tr>
    <th>Gruppe A</th>
    <th>Spiele</th> 
    <th>Punkte</th>
      <th>Tore</th>
  </tr>
  <tr>
    <td>1.Uruguay</td>
    <td>3</td>
    <td>9</td>
      <td>5:0</td>
  </tr>
  <tr>
    <td>2.Russland</td>
    <td>3</td>
    <td>6</td>
      <td>8:4</td>
  </tr>
  <tr>
    <td>3.Saudi-Arabien</td>
    <td>3</td>
    <td>3</td>
      <td>2:7</td>
  </tr>
        <tr>
    <td>4.Ägypten</td>
    <td>3</td>
    <td>0</td>
      <td>2:6</td>
  </tr>
</table>
        
        <!--Tabelle 1-->
   <table id="table">
  <tr>
    <th>Gruppe A</th>
    <th>Spiele</th> 
    <th>Punkte</th>
      <th>Tore</th>
  </tr>
  <tr>
    <td>1.Uruguay</td>
    <td>3</td>
    <td>9</td>
      <td>5:0</td>
  </tr>
  <tr>
    <td>2.Russland</td>
    <td>3</td>
    <td>6</td>
      <td>8:4</td>
  </tr>
  <tr>
    <td>3.Saudi-Arabien</td>
    <td>3</td>
    <td>3</td>
      <td>2:7</td>
  </tr>
        <tr>
    <td>4.Ägypten</td>
    <td>3</td>
    <td>0</td>
      <td>2:6</td>
  </tr>
</table>
        
        <!--Tabelle 1-->
   <table id="table">
  <tr>
    <th>Gruppe A</th>
    <th>Spiele</th> 
    <th>Punkte</th>
      <th>Tore</th>
  </tr>
  <tr>
    <td>1.Uruguay</td>
    <td>3</td>
    <td>9</td>
      <td>5:0</td>
  </tr>
  <tr>
    <td>2.Russland</td>
    <td>3</td>
    <td>6</td>
      <td>8:4</td>
  </tr>
  <tr>
    <td>3.Saudi-Arabien</td>
    <td>3</td>
    <td>3</td>
      <td>2:7</td>
  </tr>
        <tr>
    <td>4.Ägypten</td>
    <td>3</td>
    <td>0</td>
      <td>2:6</td>
  </tr>
</table>
        
        <!--Tabelle 1-->
   <table id="table">
  <tr>
    <th>Gruppe A</th>
    <th>Spiele</th> 
    <th>Punkte</th>
      <th>Tore</th>
  </tr>
  <tr>
    <td>1.Uruguay</td>
    <td>3</td>
    <td>9</td>
      <td>5:0</td>
  </tr>
  <tr>
    <td>2.Russland</td>
    <td>3</td>
    <td>6</td>
      <td>8:4</td>
  </tr>
  <tr>
    <td>3.Saudi-Arabien</td>
    <td>3</td>
    <td>3</td>
      <td>2:7</td>
  </tr>
        <tr>
    <td>4.Ägypten</td>
    <td>3</td>
    <td>0</td>
      <td>2:6</td>
  </tr>
</table>
        
        <!--Tabelle 1-->
   <table id="table">
  <tr>
    <th>Gruppe A</th>
    <th>Spiele</th> 
    <th>Punkte</th>
      <th>Tore</th>
  </tr>
  <tr>
    <td>1.Uruguay</td>
    <td>3</td>
    <td>9</td>
      <td>5:0</td>
  </tr>
  <tr>
    <td>2.Russland</td>
    <td>3</td>
    <td>6</td>
      <td>8:4</td>
  </tr>
  <tr>
    <td>3.Saudi-Arabien</td>
    <td>3</td>
    <td>3</td>
      <td>2:7</td>
  </tr>
        <tr>
    <td>4.Ägypten</td>
    <td>3</td>
    <td>0</td>
      <td>2:6</td>
  </tr>
</table>
        
        <!--Tabelle 1-->
   <table id="table">
  <tr>
    <th>Gruppe A</th>
    <th>Spiele</th> 
    <th>Punkte</th>
      <th>Tore</th>
  </tr>
  <tr>
    <td>1.Uruguay</td>
    <td>3</td>
    <td>9</td>
      <td>5:0</td>
  </tr>
  <tr>
    <td>2.Russland</td>
    <td>3</td>
    <td>6</td>
      <td>8:4</td>
  </tr>
  <tr>
    <td>3.Saudi-Arabien</td>
    <td>3</td>
    <td>3</td>
      <td>2:7</td>
  </tr>
        <tr>
    <td>4.Ägypten</td>
    <td>3</td>
    <td>0</td>
      <td>2:6</td>
  </tr>
</table>
        
      </div>



<?php

include_once 'footer.php';
?>