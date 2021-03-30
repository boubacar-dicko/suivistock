<?php
require_once 'User.php';
class Produit
{
    
    private $ref;
    private $nom;
    private $qtStock;
    private $id;

    public function __construct()
    {
        $this->id = new User();
    }
    
    
    public function setId($id)
    {
        $this->id =$id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setRef($ref)
    {
        $this->ref =$ref;
    }
    public function getRef()
    {
        return $this->ref;
    }

    public function setNom($nom)
    {
        $this->nom =$nom;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setQtStock($qtStock)
    {
        $this->qtStock =$qtStock;
    }
    public function getQtStock()
    {
        return $this->qtStock;
    }
}





?>