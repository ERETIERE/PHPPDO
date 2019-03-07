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


$pdoStat = $conn->prepare('SELECT * FROM cd.members');

$executeIsOK = $pdoStat->execute();
$NbreData = $pdoStat->rowCount();
$select = $pdoStat->fetchAll();

// var_dump($select);

