<?php
include "config.php";
$id=$_GET['id'];
$requete="SELECT * FROM `commande` ";
$execution=mysqli_query($connexion, $requete);
$produit=$_POST['produit'];
$quantite=$_POST['quantite'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire une commande</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container col-sm-6">
    
    <div class="">
    <form action="treat.php" method="post">
     <div class="text-center text-white bg-success rounded-3 m-2">
      <b>
         <h2>Passez votre commande</h2>
      </b>
     </div>
     <div>
        <input type="hidden" name="id" value="<?=$id;?>">
     </div>
     <div>
         <label class="form-label" for="produit">Produit</label>
         <select class="form-select" name="produit" id="produit">
           <option value="PC">Pc de bureau</option>
           <option value="Souris">Souris</option> 
           <option value="Clavier">Clavier</option>
         </select>
     </div>
     <div>
        <label class="form-label"  for="quantite">Quantité</label>
        <input class="form-control" type="number" name="quantite" id="quantite" min="1">
     </div>
     <button class="btn btn-primary mt-2" type="submit" value="" name="submit">Envoyer</button>
 </div>
    </form>
</body>
</html>