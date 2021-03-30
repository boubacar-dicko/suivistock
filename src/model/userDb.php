<?php
require_once 'bd.php';

 function addUser($user){
     $sql = " INSERT INTO user values(NULL,'".$user->getNom()."','".$user->getPrenom()."','".$user->getEmail()."','".$user->getPassword()."','".$user->getEtat()."')";
     $con =getConnection();
     
     return $con->exec($sql);
    }

    function listUser(){
        $con =getConnection();
        $req ="SELECT * FROM user ";
        return $con->query($req)->fetchAll();
    }

    function deleteUser($id){
        $con =getConnection();
        $req = "DELETE  FROM user WHERE id = $id ";
        return $con->exec($req);
    }
    
    function updateUser($nom,$prenom,$email,$password,$etat){
        $con =getConnection();
        return $con->exec("UPDATE   user SET nom = '$nom', prenom = $prenom, email = $email, passwords = $passwords, etat = $etat");
    }


    function verifierConnexion($login, $mdp)
{
    $req = "SELECT * FROM user WHERE email='$login' AND password = '$mdp'";
    $con =getConnection();
    return $con->query($req)->fetch();
}
?>