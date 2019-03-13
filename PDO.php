<?php

require_once 'dbconfig.php';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
 
try{
 // create a PostgreSQL database connection
 $conn = new PDO($dsn);
 
 // display a message if connected to the PostgreSQL successfully
 if($conn){
 echo "Connected to the <strong>$db </strong>!";

 }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}
echo 'test2';
if (isset($_POST['table'])) {
    $pdoStat = $conn->prepare('SELECT * FROM cd.'.$_POST['table']);
    require 'page2.php';
    echo 'test3';
} else {
    $pdoStat = $conn->prepare('SELECT * FROM cd.members');
    echo 'test4';
}
$pdoStat = $conn->prepare('SELECT * FROM cd.bookings');

$executeIsOK = $pdoStat->execute();
$NbreData = $pdoStat->rowCount();
$select = $pdoStat->fetchAll();

require 'request.php';

// var_dump($select);

