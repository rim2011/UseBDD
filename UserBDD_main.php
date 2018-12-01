<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 28/11/2018
 * Time: 15:27
 */
require 'autoload.php';

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <!-- <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
    <title>Formulaire</title>
</head>
<body>

<form action="treatment/add.php" method="post">
    <table>
        <tr>
            <td>CIN</td>
            <td><input type="text" name="cin"></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><input type="text" name="prenom"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Ajouter">
            </td>
        </tr>

    </table>
<!--<input type="text" name="cin" class="form-control">
<input type="text" name="name" class="form-control">
<input type="text" name="firstname" class="form-control">
<input type="text" name="age" class="form-control">
<input type="submit" value="add user"  class="btn btn-primary">-->
</form>

</body>
</html>
