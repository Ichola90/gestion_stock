<?php
 include "config.php";

 if (isset($_POST['submit'])) {
    $produit=$_POST['produit'];
    $quantite=$_POST['quantite'];

    $prix_unitaire=0;
    $prix_total=0;
    if ($produit=='PC') {
        $prix_unitaire=34876;
        $prix_total=$quantite * $prix_unitaire;
        
    }
    elseif ($produit=='Souris') {
        $prix_unitaire=1200; 
        $prix_total=$quantite * $prix_unitaire; 
    }
    
    elseif ($produit=='Clavier') {
        $prix_unitaire=1000;
        $prix_total=$quantite * $prix_unitaire;  
    }

    
    $requete="INSERT INTO `commande`(`produit`, `prix_unitaire`, `quantite`, `prix_total` ) VALUES ('$produit','$prix_unitaire','$quantite','$prix_total')";
    $execution=mysqli_query($connexion, $requete);
    
    if ($execution) {
        header("location:index.php");
      }
 }
?>