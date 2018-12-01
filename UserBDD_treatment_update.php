<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 30/11/2018
 * Time: 10:49
 */
require '../autoload.php';

//session_start();
//if(isset($_GET['cin'])) {

    $utilisateur = new Utilisateur();
if(isset($_GET['cin'])) {

    $user = $utilisateur->findByCin($_GET['cin']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Formulaire Update</title>
</head>
<body>

<div class="container">
    <h1>Update User</h1>
</div>
<form action="updateDisplay.php" method="post" class="form-inline">
    <!--<input type="hidden" name="action" value="add">-->

    <input type="number" name="cin" class="form-control" placeholder="CIN" value="<?= $user->cin ?>" >
    <input type="text" name="nom" class="form-control" placeholder="Nom" value="<?= $user->nom ?>">
    <input type="text" name="prenom" class="form-control" placeholder="Prenom" value="<?= $user->prenom ?>">
    <input type="number" name="age" class="form-control" placeholder="Age" value="<?= $user->age ?>" >
    <button name="save" class="btn btn-success">Save</button>
</form>

<?php


?>
</body>
</html>