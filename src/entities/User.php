<?php
class User
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $etat;


    public function __construct()
    {

    }
    
    public function setId($id)
    {
        $this->id =$id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setPrenom($prenom)
    {
        $this->ref =$prenom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($nom)
    {
        $this->nom =$nom;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setEmail($email)
    {
        $this->email =$email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password =$password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setEtat($etat)
    {
        $this->etat =$etat;
    }
    public function getEtat()
    {
        return $this->etat;
    }
}
