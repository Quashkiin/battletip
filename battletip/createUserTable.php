<?php

//Gibt die Username in einer Tabelle wieder

require_once 'db.php';

$connection = new mysqli($host, $user, $pw, $db);
$connection->query("SET NAMES utf8");
if ($connection->connect_error) die($connection->connect_error);

$sql = "SELECT user_username FROM users";
$result = $connection->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>". $row["user_username"]. "</tr></td>";
    }
}
else{
    echo "Error";
}

$connection->close();





?>