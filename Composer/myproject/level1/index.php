<?php

// Инициализируем рабочее пространство: корневой каталог сайта и т.д.
require_once 'iniWorkSpace.php';
$_WORKSPACE=iniWorkSpace();

$SiteRoot     = $_WORKSPACE[wsSiteRoot];     // Корневой каталог сайта
$SiteAbove    = $_WORKSPACE[wsSiteAbove];    // Надсайтовый каталог
$SiteHost     = $_WORKSPACE[wsSiteHost];     // Каталог хостинга
$SiteDevice   = $_WORKSPACE[wsSiteDevice];   // 'Computer' | 'Mobile' | 'Tablet'
$UserAgent    = $_WORKSPACE[wsUserAgent];    // HTTP_USER_AGENT
$TimeRequest  = $_WORKSPACE[wsTimeRequest];  // Время запроса сайта
$RemoteAddr   = $_WORKSPACE[wsRemoteAddr];   // IP-адрес запроса сайта
$SiteName     = $_WORKSPACE[wsSiteName];     // Доменное имя сайта
$PhpVersion   = $_WORKSPACE[wsPhpVersion];   // Версия PHP
$SiteProtocol = $_WORKSPACE[wsSiteProtocol]; // HTTP или HTTPS
$urlHome      = $_WORKSPACE[wsUrlHome];      // Начальная страница сайта 
$RootDir      = $_WORKSPACE[wsRootDir];      // Каталог корня сайта, в котором выполняется текущий скрипт
$RootUrl      = $_WORKSPACE[wsRootUrl];      // Путь и имя выполняемого скрипта
$RemoteHost   = $_WORKSPACE[wsRemoteHost];   // Удаленный хост, с которого пользователь просматривает текущую страницу
$HttpReferer  = $_WORKSPACE[wsHttpReferer];  // Адрес страницы, с которой браузер пользователя перешёл на текущую страницу

echo '$SiteRoot  = '.$SiteRoot.'<br>';
echo '$SiteAbove = '.$SiteAbove.'<br>';
echo '$SiteHost  = '.$SiteHost.'<br>';
echo __DIR__ .'/..' .'/vendor/autoload.php'.'<br>';
echo $SiteAbove.'/vendor/autoload.php'.'<br>';

// Подключаем автоматически сгенерированный загрузчик
// require __DIR__ . '/vendor/autoload.php';
require $SiteAbove.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Создаём логгер
$log = new Logger('my_app');
$log->pushHandler(new StreamHandler($SiteAbove.'/log1/app.log', Logger::DEBUG));

// Используем его!
$log->info('Зависимость Monolog успешно установлена и работает!');
echo "Проверьте файл ".$SiteAbove."/log1/app.log - там должно быть сообщение.\n";
