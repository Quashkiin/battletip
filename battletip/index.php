
<?php
//PHP Datei, die Navbar und Sidebar included
include_once 'header.php';
 
?>

     
<!-- Unterscheidung angezeigter HTML ELemente je nachdem ob User oder Admin angemeldet ist-->
    <div class="item2"> 
      <aside>
        <ul>
          <a href="myTipgames.php"><li>Mein Tippspiel</li></a>
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
//PHP Datei die den footer zur Verfügung stellt 
include_once 'footer.php';
?>
    
    
