




<!-- TODO


-FUNKTION EINFÜGEN BEI ADMIN: SPIELERGEBNISSE EINGABE DER DATEN ÜBER INPUTE FELDER

-TEXT EINFÜGEN BEI USERS: SPIELREGELN WERDEN IM MAIN BEREICH DER WEBSITE ANGEZIEGT

-FUNKTIONEN EINFÜGEN BEI USERS: SPIELPAARUNGEN; SPIEL-ERGEBNISSE; TIPPSPIEL(RANGLISTE)


-->







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
          <a href="startTipgame.php"><li>Neues Tippspiel starten</li></a>
        </ul>
      </aside>
    </div>';
    }
}

?>

<!--MAIN-SCREEN-->
    <div class="item3">
             
       <h1>Willkommen bei battletip</h1> 
        <?php
if (isset($_SESSION['u_id'])){
  
    echo "You are now Logged In as $usertype ";
}
?>
        
     <p>Die Fussball-Weltmeisterschaft 2018 findet, 
            wie alle vier Jahre, auch diesmal im Sommer statt. 
            Genauer gesagt vom 14. Juni bis zum 15. Juli 2018. Doch die WM 2018 i
            st eine ganz besonderes WM-Endrunde, denn erstmals in der Geschichte 
            des Turniers findet die Weltmeisterschaft in Russland statt. Insgesamt 
            32 Mannschaften aus fünf Kontinenten werden an der WM 2018 teilnehmen: 
            13 Mannschaften aus Europa, vier oder fünf aus Südamerika, fünf aus Afrika, 
            drei oder vier aus Nord-/Mittelamerika und der Karibik, null bis eine aus 
            Ozeanien sowie vier oder fünf aus Asien.
            Die Vorfreude auf die WM 2018
            ist groß bei den Fussballfans.
            Vor allem die deutschen Fans blicken gebannt
            auf die WM kommendes Jahr, denn die DFB-Elf
            geht gehört als amtierender Weltmeister 
            erneut zum engeren Favoritenkreis bei der
            WM 2018. Es wird spannend zu sehen ob 
            „Jogis Jungs“ den WM-Titeltriumph von 
            2014 wiederholen können. </p>
    </div>


<?php

include_once 'footer.php';
?>
    
    
    <!--section class="main-container">
        <div class="main-wrapper"> 
          
        </div>
    
    </section-->
    

