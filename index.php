<?php
require_once 'autoload.php';

// Настройка Twig
$loader = new Twig\Loader\FilesystemLoader('templates');
$twig = new Twig\Environment($loader, [
    'cache' => false,
    'debug' => true
]);

// Рендеринг шаблона
echo $twig->render('index.html.twig');
?>