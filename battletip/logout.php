<?php

// Ausloggen des Users und zerstören der aktuellen Session

if(isset($_POST['submit'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

