<?php
$hostname="localhost";
$username="root";
$password="";
$database="tpgestion_commande";

$connexion=mysqli_connect($hostname,$username,$password,$database);

if (!$connexion) {
    echo "connexion réussie";
};
?>