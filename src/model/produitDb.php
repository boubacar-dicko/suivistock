<?php
require_once "bd.php";
//include_once "../entities/Prodiut.php";
 function addProduit($produit){
     $sql = " INSERT INTO produit values(NULL,'".$produit->getRef()."','".$produit->getNom()."','".$produit->getQtStock()."')";
     $con =getConnection();
     
     return $con->exec($sql);
    }

    function recupererIdModif($id){
        $con =getConnection();
        $req ="SELECT * FROM produit WHERE id=$id";
        return $con->query($req)->fetch();

    }
    function listProduit(){
        $con =getConnection();
        $req ="SELECT * FROM produit ";
        return $con->query($req)->fetchAll();
    }

    function deleteProduit($id){
        $con =getConnection();
        $req = "DELETE  FROM produit WHERE id = $id";
        return $con->exec($req);

    }
    
    function updateProduit($produit){
        $con =getConnection();;
    
        return $con->exec("UPDATE  produit SET ref= '".$produit->getRef()."', nom = '".$produit->getNom()."', qtStock = '".$produit->getQtStock()."'");
    }

?>