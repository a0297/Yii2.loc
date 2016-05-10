<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class'   => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,    #хотим использовать ЧПУ
            'showScriptName' => false,   #скрываем index.php
        ],
    ],
    'modules' => [
        'main' => [
            'class' => 'app\modules\main\Module',
        ],
    ],
];
