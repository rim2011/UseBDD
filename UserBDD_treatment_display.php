<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 30/11/2018
 * Time: 10:02
 */

require '../autoload.php';

session_start();

$utilisateur = new Utilisateur();
$utilisateurs = $utilisateur->findAll();?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Formulaire</title>
</head>
<body>

<div class="container">
    <h1>Gestion des clients</h1>
</div>


<table class="table table-striped">
    <tr>
        <th>CIN</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
    </tr>
    <?php foreach ($utilisateurs as $user) { ?>
            <tr>
                 <td><?= $user->cin ?></td>
                 <td><?= $user->nom ?></td>
                 <td><?= $user->prenom ?></td>
                 <td><?= $user->age ?></td>
                 <td><a href="delete.php?cin= <?= $user->cin ?>" >delete</a></td>
                 <td><a href="update.php?cin= <?= $user->cin ?>" >update</a></td>
            </tr>
    <?php } ?>

</table>
</body>
</html>