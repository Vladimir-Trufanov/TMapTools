<?php

echo 'ProbaSibyx!'.'<br>';
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
echo $SiteAbove.'/vendor/autoload.php'.'<br>';

// ----------------------------------------------------------------------------

// Подключаем автоматически сгенерированный загрузчик
require $SiteAbove.'/vendor/autoload.php';

$mode=0;    // создание файла с нуля
//$mode=1;    // показ статистических данных по файлу GPX
//$mode=2;    // вывод точек трека
//$mode=3;    // вывод точек трека c помощью simplexml_load_file

if ($mode==0)
{
  echo '0. Создание файла с нуля'.'<br>';
  require_once 'CreatingFileFromScratch.php';
}
else if ($mode==1)
{
  echo "<br>1. Показ статистических данных по файлу GPX:".'<br>';
  require_once 'LoadBasicStats.php';
}
else if ($mode==2)
{
  echo "<br>2. Вывод точек трека из файла GPX:".'<br>';
  require_once 'OutputTrackPoints.php';
}
else if ($mode==3)
{
  echo "<br>3. Вывод точек трека c помощью simplexml_load_file:".'<br>';
  require_once 'SimplexmlLoad.php';
}
