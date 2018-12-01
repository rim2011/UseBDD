<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 28/11/2018
 * Time: 16:15
 */
require '../autoload.php';

// Ouvrir la session
session_start();
// Je dois verifier est ce que j'ai ma variable de session ou pas
//      Si je ne l'ai pas je la redirige vers l'index
/*if (!isset($_SESSION['utilisateur'])){
    header('location:add.php?error=session inexistante');
}else if(!isset($_POST['nom'])||!isset($_POST['prenom'])){
    header('location:add.php?error=parametres invalide');
}
// Sinon (session ok)
//Je vérifie si nom existe deja ou pas
if(isset($_SESSION['utilisateur'][$_POST['nom']])){
    header('location:add.php?error=personne existe deja');}
// S'il existe
// redirection vers index
else
{
   /* $utilisateur = new Utilisateur();
// j appelle la méthode qui ajoute
    $utilisateur->addUser($_POST['cin'],$_POST['name'],$_POST['firstname'],$_POST['age']);
    header('location:add.php?succes=ajout eecute avec succes');
    var_dump($_SESSION['utilisateur']);



}
// s'il n'existe pas je l'ajoute et je le redirige vers index*/



// Je récupére le cin à travers le GET
//if(isset($_POST['cin'])) {
// je crée une personne
    $utilisateur = new Utilisateur();
// j appelle la méthode qui ajoute
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $utilisateur->addUser($cin,$nom,$prenom,$age);
    echo "ajoute";
    //header('location:../main.php');
//}