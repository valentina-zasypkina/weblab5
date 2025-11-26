<?php
require_once 'autoload.php';

$loader = new Twig\Loader\FilesystemLoader('templates');
$twig = new Twig\Environment($loader, [
    'cache' => false,
    'debug' => true
]);

echo $twig->render('page2.html.twig');
?>