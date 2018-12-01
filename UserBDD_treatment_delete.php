<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 30/11/2018
 * Time: 09:44
 */
require '../autoload.php';
if(isset($_GET['cin'])) {
// je crée une personne
    $utilisateur = new Utilisateur();
// j appelle la méthode qui supprime
    $utilisateur->deleteUser($_GET['cin']);

    $utilisateurs = $utilisateur->findAll();

    echo "<ul>";
    foreach ($utilisateurs as $user) {
        echo "<li>";
        echo $user->cin . " " . $user->nom . " " . $user->prenom . " " . $user->age . " ";
        echo "</li>";
    }

    echo "</ul>";

}