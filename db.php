<?php

$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'battletip';

//connect to mysql by creating new object($connection) from mysqli class
$connection = new mysqli($host,$user,$pw,$db) or die($connection->error);

?>

