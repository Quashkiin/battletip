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
       <h3>Achtelfinale</h3>  
 
        
        <div class="begegnungen-bg">
            <ul class="user_begegnungen">
                <li>30.06.18 16:00 Sieger Gr C : Zweiter Gr D<input> :<input></li>
                <li>30.06.18 20:00 Sieger Gr A : Zweiter Gr B<input> : <input></li>
                 <li>01.07.18 16:00 Sieger Gr B : Zweiter Gr A<input> :<input></li>
                <li>01.07.18 20:00 Sieger Gr D : Zweiter Gr C<input> : <input></li>
                 <li>02.07.18 16:00 Sieger Gr E : Zweiter Gr F<input> :<input></li>
                <li>02.07.18 20:00 Sieger Gr G : Zweiter Gr H<input> : <input></li>
                <li>03.07.18 16:00 Sieger Gr F : Zweiter Gr E<input> :<input></li>
                <li>03.07.18 20:00 Sieger Gr H : Zweiter Gr G<input> : <input></li>

            </ul>
            
              <button>Tipps speichern</button>
        </div>

    </div>


<?php

include_once 'footer.php';
?>
    