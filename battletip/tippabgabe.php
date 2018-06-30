

<?php
include_once 'header.php';
 
?>

   <!-- Seite zum Abgeben von Tipps auf Seiten des Users-->  

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
      

<?php


//Prüfen ob Benutzer angemeldet ist und ob der Benutzer der Admin ist
if (isset($_SESSION['u_id'])){
    
    $usertype = $_SESSION['u_usertype'];
    
    if($usertype=='admin'){
 
//Admin bekommt eine andere Sidebar zu sehen
    echo'
    <div class="item2"> 
      <aside>
        <ul>
          <a href="profile.php"><li>ADMIN Profil</li></a>
          <a href="spielverwaltung.php"><li>Spielverwaltung</li></a>
          <a href="#"><li>Spielregeln bearbeiten</li></a>
        </ul>
      </aside>
    </div>';
    }
}

?>

<!--MAIN-SCREEN-->
    <div class="item3">
             
       <h1>Tippabgabe</h1>  
 
        
     <ul class="spieltage">
          <a href="user_spieltag1.php"><li>Spieltag 1</li></a>
          <a href="user_spieltag2.php"><li>Spieltag 2</li></a>
          <a href="user_spieltag3.php"><li>Spieltag 3</li></a>
          <a href="user_spieltag4.php"><li>Spieltag 4</li></a>
          <a href="user_spieltag5.php"><li>Spieltag 5</li></a>
          <a href="user_spieltag6.php"><li>Spieltag 6</li></a>
          <a href="user_spieltag7.php"><li>Spieltag 7</li></a>
          <a href="user_achtelfinale.php"><li>Achtelfinale</li></a>
          <a href="user_viertelfinale.php"><li>Viertelfinale</li></a>
          <a href="user_halbfinale.php"><li>Halbfinale</li></a>
          <a href="user_finale.php"><li>Finale</li></a>
         
         
     
        
        
        </ul>
        

    </div>


<?php

include_once 'footer.php';
?>
    
    

    
