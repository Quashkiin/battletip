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
       <h3>Viertelfinale</h3>  
 
        
        <div class="begegnungen-bg">
            <ul class="user_begegnungen">
                <li>06.07.18 16:00 Sieger AF2 : Sieger AF1<input> :<input></li>
                <li>06.07.18 20:00 Sieger AF5 : Sieger AF6<input> : <input></li>
                 <li>07.07.18 16:00 Sieger AF7 : Sieger AF8<input> :<input></li>
                <li>07.07.018 20:00 Sieger AF3 : Sieger AF4<input> : <input></li>
       
            </ul>
              <button>Tipps speichern</button>
        </div>

    </div>


<?php

include_once 'footer.php';
?>
    