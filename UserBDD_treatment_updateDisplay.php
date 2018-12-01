<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 01/12/2018
 * Time: 12:33
 */

require '../autoload.php';

//session_start();

$utilisateur= new Utilisateur();

$cin = $_POST['cin'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];


$utilisateur->updateUser($cin,$nom,$prenom,$age);
//header("location:update.php");
echo 'user updated';


$utilisateurs = $utilisateur->findAll();

echo "<ul>";
foreach ($utilisateurs as $user) {
    echo "<li>";
    echo $user->cin . " " . $user->nom . " " . $user->prenom . " " . $user->age . " ";
    echo "</li>";
}

echo "</ul>";