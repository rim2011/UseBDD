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

//if(isset($_POST['cin'])) {
    $utilisateur = new Utilisateur();
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $utilisateur->addUser($cin,$nom,$prenom,$age);
    echo "ajoute";
    //header('location:../main.php');
//}