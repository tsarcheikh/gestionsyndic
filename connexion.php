<?php
// connexion à la base de données
$db_username = 'root';
$db_password = '';
$db_name     = 'gestion_immobilier';
$db_host     = 'localhost';
$cnx = mysqli_connect($db_host, $db_username, $db_password,$db_name);

if(!$cnx)
{
    die('Please Check Your Conenxion'.mysqli_error());
}
?>