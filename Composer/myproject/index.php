<?php
// Подключаем автоматически сгенерированный загрузчик
require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Создаём логгер
$log = new Logger('my_app');
$log->pushHandler(new StreamHandler('logs/app.log', Logger::DEBUG));

// Используем его!
$log->info('Зависимость Monolog успешно установлена и работает!');
echo "Проверьте файл logs/app.log - там должно быть сообщение.\n";
