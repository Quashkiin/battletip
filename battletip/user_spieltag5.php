<?php
include_once 'header.php';
 
?>

     

  <!--SIDE-BAR-->
    <div class="item2"> 
      <aside>
        <ul>
            <li>Tippübersicht</li>
            <a href="tippabgabe.php"><li>Tippabgabe</li></a>
            <li>Spielplan</li>
            <li>Tabelle</li>
            <li>Spielregeln</li>
            <li>Mein Profil</li>
          
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
       <h3>Spieltag 5</h3>  
 
        
        <div class="begegnungen-bg">
            <ul class="user_begegnungen">
                <li>23.06.18 14:00 Belgien : Tunesien<input> :<input></li>
                <li>23.06.18 17:00 Südkorea : Mexiko<input> : <input></li>
                 <li>23.06.18 20:00 Deutschland : Schweden<input> :<input></li>
                <li>24.06.18 14:00 England : Panama<input> : <input></li>
                 <li>24.06.18 17:00 Japan : Senegal<input> :<input></li>
                <li>24.06.18 20:00 Polen : Kolumbien<input> : <input></li>
   
            </ul>
            
              <button>Tipps speichern</button>
        </div>

    </div>


<?php

include_once 'footer.php';
?>
    