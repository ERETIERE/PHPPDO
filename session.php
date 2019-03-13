<?php
session_start();

$_SESSION['nom'] = $_POST['identifiant'];
$_SESSION['password']   = $_POST['motdepass'];
$_SESSION['table']   = $_POST['table'];

header('Location: /matieulecon/PHPPDO/page2.php');