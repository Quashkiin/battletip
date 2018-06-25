<?php
include_once 'header.php';
 
?>

     

    <div class="item2"> 
      <aside>
        <ul>
          <a href="profile.php"><li>Mein Profil</li></a>
          <a href="myTipgames.php"><li>Meine Tippspiel</li></a>
          <a href="gameRules.php"><li>Spielregeln</li></a> 
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
        
       <h1>Spielverwaltung</h1>  
    <h3>Eingabe von Spielergebnissen</h3>
        
     <ul class="spieltage-ergebnisse">
          <a href="admin_spieltag1.php"><li>Spieltag 1</li></a>
          <a href="admin_spieltag2.php"><li>Spieltag 2</li></a>
          <a href="admin_spieltag3.php"><li>Spieltag 3</li></a>
          <a href="admin_spieltag4.php"><li>Spieltag 4</li></a>
          <a href="admin_spieltag5.php"><li>Spieltag 5</li></a>
          <a href="admin_spieltag6.php"><li>Spieltag 6</li></a>
          <a href="admin_spieltag7.php"><li>Spieltag 7</li></a>
          <a href="admin_achtelfinale.php"><li>Achtelfinale</li></a>
         <a href="admin_viertelfinale.php"><li>Viertelfinale</li></a>
         <a href="admin_halbfinale.php"><li>Halbfinale</li></a>
         <a href="admin_finale.php"><li>Finale</li></a>
         
         
     
        
        
        </ul>
</div>


<?php
include_once 'footer.php';
?>
    