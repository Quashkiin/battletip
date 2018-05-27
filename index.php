<?php
include_once 'header.php';
?>

      
<!--MAIN-SCREEN-->
    <div class="item3">
        
       <h1>Willkommen bei battletip</h1>  
        
        <?php
if (isset($_SESSION['u_id'])){
    echo 'You are now Logged In';
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
if (isset($_SESSION['u_id'])){
    echo 'You are now Logged In';
}
        
?>


<?php

include_once 'footer.php';
?>
    
    
    <!--section class="main-container">
        <div class="main-wrapper"> 
          
        </div>
    
    </section-->
    

