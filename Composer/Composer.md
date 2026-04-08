## [Composer](https://getcomposer.org/)

***Системные требования.*** Для работы Composer в последней версии требуется PHP 7.2.5. Версия с долгосрочной поддержкой (2.2.x) по-прежнему поддерживает PHP 5.3.2 и выше, если вы используете устаревшую версию PHP. Также требуются некоторые важные настройки PHP и флаги компиляции, но при использовании установщика вы будете предупреждены о возможных несовместимостях.

Для эффективной работы Composer требуется несколько вспомогательных приложений, которые повышают эффективность обработки зависимостей пакетов. Для распаковки файлов Composer использует такие инструменты, как 7z (или 7zz), gzip, tar, unrar, unzip и xz. Что касается систем контроля версий, Composer легко интегрируется с Fossil, Git, Mercurial, Perforce и Subversion, обеспечивая бесперебойную работу приложения и управление библиотечными репозиториями. Прежде чем использовать Composer, убедитесь, что эти зависимости правильно установлены в вашей системе.

Composer — мультиплатформенный инструмент, и мы стремимся к тому, чтобы он одинаково хорошо работал в Windows, Linux и macOS.

***Установка в Windows.*** -+Скачайте и запустите Composer-Setup.exe. Он установит последнюю версию Composer и настроит переменную PATH, чтобы вы могли вызывать composer из любого каталога в командной строке.

Примечание: закройте текущий терминал. Проверьте работу с новым терминалом: это важно, поскольку переменная PATH загружается только при запуске терминала.

### [Composer для PHP: установка, настройка и советы по использованию](https://kurshub.ru/journal/blog/composer-dlya-php-ustanovka-nastrojka-i-sovety-po-effektivnomu-ispolzovaniyu/)

Создаем директорию для нашего блога:

```
mkdir super-puper-blog
cd super-puper-blog
```

Инициализируем наш проект (подготовьтесь отвечать на вопросы, как на допросе):

```
composer init
```
Далее 2026.04.08 было так:

```
Welcome to the Composer config generator

This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [/super-puper-blog]: ProbaComposer

The package name ProbaComposer is invalid, it should be lowercase and have a vendor name, a forward slash, and a package name, matching: [a-z0-9_.-]+/[a-z0-9_.-]+

Package name (<vendor>/<name>) [/super-puper-blog]: vendor/puper
Description []: ProbaComposer

Author [Труфанов Владимир Евгеньевич <44765119+Vladimir-Trufanov@users.noreply.github.com>, n to skip]:

Author [Труфанов Владимир Евгеньевич <44765119+Vladimir-Trufanov@users.noreply.github.com>, n to skip]: n
Minimum Stability []:
Package Type (e.g. library, project, metapackage, composer-plugin) []:

License []: MIT

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]?

Would you like to define your dependencies (require) interactively [yes]?
Search for a package:
Would you like to define your dev dependencies (require-dev) interactively [yes]?
Search for a package: 
Search for a package: n

Found 78 packages matching n

   [0] composer-plugin-api
   [1] composer-runtime-api
   [2] php
   [3] php-64bit
   [4] php-ipv6
   [5] ext-bcmath
   [6] ext-calendar
   [7] ext-ctype
   [8] ext-date
   [9] ext-filter
  [10] ext-hash
  [11] ext-iconv
  [12] ext-json
  [13] ext-spl
  [14] ext-pcre
  [15] ext-readline
  [16] ext-reflection
  [17] ext-session
  [18] ext-mysqlnd
  [19] ext-tokenizer
  [20] ext-zip
  [21] ext-zlib
  [22] ext-libxml
  [23] ext-dom
  [24] ext-pdo
  [25] ext-openssl
  [26] ext-simplexml
  [27] ext-xml
  [28] ext-wddx
  [29] ext-xmlreader
  [30] ext-xmlwriter
  [31] ext-mysqli
  [32] ext-mbstring
  [33] ext-gd
  [34] ext-gettext
  [35] ext-curl
  [36] ext-exif
  [37] ext-xmlrpc
  [38] ext-phar
  [39] ext-soap
  [40] ext-pdo_mysql
  [41] ext-pdo_sqlite
  [42] ext-sqlite3
  [43] ext-sockets
  [44] ext-imap
  [45] ext-tidy
  [46] lib-date-timelib
  [47] lib-date-zoneinfo
  [48] lib-iconv
  [49] lib-pcre-unicode
  [50] lib-mysqlnd-mysqlnd
  [51] lib-libxml
  [52] lib-openssl
  [53] lib-mbstring-libmbfl
  [54] lib-mbstring-oniguruma
  [55] lib-gd-libjpeg
  [56] lib-gd-libpng
  [57] lib-gd-freetype
  [58] lib-gd-libxpm
  [59] lib-curl-openssl
  [60] lib-curl-libssh2
  [61] lib-curl-zlib
  [62] lib-pdo_mysql-mysqlnd
  [63] symfony/polyfill-intl-normalizer
  [64] predis/predis
  [65] barryvdh/laravel-ide-helper
  [66] nunomaduro/collision
  [67] nikic/php-parser
  [68] webmozart/assert
  [69] symfony/deprecation-contracts
  [70] sebastian/version
  [71] sebastian/object-reflector
  [72] phpdocumentor/type-resolver
  [73] dragonmantank/cron-expression
  [74] react/stream
  [75] psr/clock
  [76] openai-php/client
  [77] nette/utils

Enter package # to add, or the complete package name if it is not listed:

Enter package # to add, or the complete package name if it is not listed:
Search for a package: silex/silex "~2.0"
Search for a package: twig/twig "~2.0"
Search for a package:
Add PSR-4 autoload mapping? Maps namespace "Vendor\Puper" to the entered relative path. [src/, n to skip]:

Add PSR-4 autoload mapping? Maps namespace "Vendor\Puper" to the entered relative path. [src/, n to skip]: src/

{
    "name": "vendor/puper",
    "description": "ProbaComposer",
    "license": "MIT",
    "autoload": {
        "psr-4": {
            "Vendor\\Puper\\": "src/"
        }
    },
    "require": {}
}

Do you confirm generation [yes]?
Do you confirm generation [yes]? yes
Generating autoload files
Generated autoload files
PSR-4 autoloading configured. Use "namespace Vendor\Puper;" in src/
Include the Composer autoloader with: require 'vendor/autoload.php';

C:\TMapTools\Composer\super-puper-blog>
```

Теперь самое интересное — добавляем наши зависимости:

```
composer require silex/silex "~2.0"
composer require twig/twig "~2.0"
```

!!! ПО ЭТОЙ СТАТЬЕ НЕ ПОЛУЧИЛОСЬ  2026-04-08

### [Composer:  что нужно знать об управлении зависимостями в PHP](https://skillbox.ru/media/code/composer-vsye-chto-nuzhno-znat-o-sisteme-upravleniya-zavisimostyami-v-php/)

### [Composer для самых маленьких](https://habr.com/ru/articles/439200/)

### [Composer: руководство по управлению зависимостями PHP](https://www.dev-notes.ru/articles/php/dependency-management-with-composer/)

#### [Шаг 1: Установите Composer](#)

Если у вас ещё нет Composer, установите его глобально, следуя официальному руководству. После установки проверьте работу, выполнив в терминале:

```
composer --version
```

Вы должны увидеть номер версии (например, Composer version 2.9.5 2026-01-29 11:40:53).

```
C:\TMapTools\Composer>composer --version
Composer version 2.9.5 2026-01-29 11:40:53
PHP version 7.3.31 (c:\PHP\php.exe)
Run the "diagnose" command to get more detailed diagnostics output.

C:\TMapTools\Composer>
```
#### [Шаг 2: Создайте composer.json](#)

Вместо интерактивного опроса (***composer init***) давайте сразу создадим минимальную рабочую конфигурацию. Перейдите в папку вашего нового проекта и выполните одну команду:

```
composer init --name=myproject/app --no-interaction
```

Эта команда мгновенно создаст файл composer.json с указанным именем и стандартными настройками. Теперь проект готов к добавлению пакетов.

#### [Шаг 3: Добавьте первый пакет](#)

Допустим, нам нужна библиотека для логирования. Вместо ручного скачивания просто выполните:

```
composer require monolog/monolog
```

Что сделает Composer:

Найдёт последнюю стабильную версию пакета monolog/monolog на Packagist.org.
Скачает её и все её зависимости в папку vendor/.

Автоматически добавит запись о пакете и используемой версии в composer.json.
Создаст/обновит файл composer.lock, который фиксирует точные версии всех установленных библиотек.

```
C:\TMapTools\Composer\myproject>composer require monolog/monolog
Cannot use monolog/monolog's latest version 3.10.0 as it requires php >=8.1 which is not satisfied by your platform.
./composer.json has been updated
Running composer update monolog/monolog
Loading composer repositories with package information
Updating dependencies
Lock file operations: 2 installs, 0 updates, 0 removals
  - Locking monolog/monolog (2.11.0)
  - Locking psr/log (1.1.4)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 2 installs, 0 updates, 0 removals
  - Downloading psr/log (1.1.4)
  - Downloading monolog/monolog (2.11.0)
  - Installing psr/log (1.1.4): Extracting archive
  - Installing monolog/monolog (2.11.0): Extracting archive
10 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating autoload files
1 package you are using is looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^2.11 for monolog/monolog

C:\TMapTools\Composer\myproject>
```

#### [Шаг 4: Проверьте установку](#)

Создайте в папке проекта простой тестовый файл test.php:

```
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
```

Запустите скрипт:

```
php test.php
```

Если вы видите сообщение и в папке logs/ появился файл app.log с записью — поздравляем! 

Вы только что установили и использовали свою первую зависимость через Composer.

Итог за 5 минут: У вас есть проект с управляемыми зависимостями, рабочим автозагрузчиком и ключевыми файлами (composer.json, composer.lock).










