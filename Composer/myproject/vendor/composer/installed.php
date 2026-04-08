<?php return array(
    'root' => array(
        'name' => 'myproject/app',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'bbca8967cfe149657f8bfa4a4a1adef68ebcb931',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'monolog/monolog' => array(
            'pretty_version' => '2.11.0',
            'version' => '2.11.0.0',
            'reference' => '37308608e599f34a1a4845b16440047ec98a172a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'myproject/app' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'bbca8967cfe149657f8bfa4a4a1adef68ebcb931',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '1.1.4',
            'version' => '1.1.4.0',
            'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0 || 2.0.0 || 3.0.0',
            ),
        ),
    ),
);
