<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 28/11/2018
 * Time: 15:24
 */
function load($classe){
$paths = array(
    '',
    'classes/',
    'Model/',
    '../classes/',
    '../Model/',
);
foreach ($paths as $path) {
    $finalPath = $path.$classe.'.php';
    if (file_exists($finalPath)){
        require $finalPath;
        break;
    }
}
}
spl_autoload_register('load');