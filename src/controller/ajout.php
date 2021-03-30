<?php

    
if (isset($_POST['btnSAveP'])) {
    extract($_POST);
  $prod = new Produit();
  if(empty($nom) || empty($libelle) || empty($qt))
  {
      echo 'Please Remplissez tous les champs';
  }else
  {
  $prod->setNom($nom);
  $prod->setRef($libelle);
  $prod->setQtStock($qt);
  addProduit($prod);
  }
}


?>