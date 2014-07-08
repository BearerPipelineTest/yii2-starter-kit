<?php

return [
    'basePath' => dirname(__DIR__),
    'vendorPath'=>dirname(dirname(__DIR__)).'/vendor',
    'extensions' => require(dirname(__DIR__) . '/../vendor/yiisoft/extensions.php'),
    'language'=>'en',
    'components' => [

        'assetsManager'=>[
            'class'=>'yii\web\AssetManager',
            'linkAssets'=>true,
        ],

        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'rbac_auth_item',
            'itemChildTable' => 'rbac_auth_item_child',
            'assignmentTable' => 'rbac_auth_assignment',
            'ruleTable' => 'rbac_auth_rule',
            'defaultRoles' => ['administrator', 'manager', 'user'],
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                    'except'=>['yii\web\HttpException:404'], // todo: DbTarget для 404 и 403
                    'logVars'=>[],
                    'logTable'=>'{{%system_log}}'
                ]
            ],
        ],

        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'sourceMessageTable'=>'{{%i18_source_message}}',
                    'messageTable'=>'{{%i18_message}}',
                    'cachingDuration'=>60
                ],
            ],
        ],

        'urlManager'=>[
            'class'=>'yii\web\UrlManager',
            'enablePrettyUrl'=>true,
            'showScriptName'=>false,
            'rules'=>require('url_rules.php')
        ],
    ],
    'params' => [
        'adminEmail' => 'admin@example.com',
    ],
];
