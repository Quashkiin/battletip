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
       <h3>Spieltag 4</h3>  
 
        
        <div class="begegnungen-bg">
            <ul class="user_begegnungen">
                <li>21.06.18 14:00 Dänemark : Australien<input> :<input></li>
                <li>21.06.18 17:00 Frankreich : Peru<input> : <input></li>
                 <li>21.06.18 20:00 Argentinien : Kroatien<input> :<input></li>
                <li>22.06.18 14:00 Brasilien : Costa Rica<input> : <input></li>
                 <li>22.06.18 17:00 Nigeria : Island<input> :<input></li>
                <li>22.06.18 20:00 Serbien : Schweiz<input> : <input></li>
    
            </ul>
            
              <button>Tipps speichern</button>
        </div>

    </div>


<?php

include_once 'footer.php';
?>
    