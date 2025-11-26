<?php
// Улучшенный автозагрузчик для Twig
spl_autoload_register(function ($class) {
    // Путь к исходникам Twig
    $base_dir = __DIR__ . '/vendor/twig/twig/src/';
    
    // Заменяем Twig\ на путь к файлу
    $relative_class = str_replace('Twig\\', '', $class);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    // Если файл существует - загружаем
    if (file_exists($file)) {
        require $file;
        return true;
    }
    
    return false;
});

// Проверяем что Twig загружен
if (!class_exists('Twig\Environment')) {
    die('ОШИБКА: Twig не загружен! Проверьте папку vendor/twig/');
}
?>