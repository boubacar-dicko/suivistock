<?php
require_once 'C:/xampp/htdocs/mescours/suivistock/src/model/userDb.php';
session_start();
if (isset($_POST['btnConnecter'])) {
    extract($_POST);
    $user = verifierConnexion($login, $mdp);

    if ($user != NULL) {
        $_SESSION['id'] = $user['idEmploye'];
        $_SESSION['nom'] = $user['nomEmp'];
        $_SESSION['prenom'] = $user['prenomEmp'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['etat'] = $user['etat'];

        header("location:/mescours/suivistock/accueil.php");
    }
else{
        header("location:/mescours/suivistock/public/template/404.php");
}
}


if (isset($_GET['Decon'])) {
    session_unset();
    header("location:/mescours/suivistock/index.php");
}

?>