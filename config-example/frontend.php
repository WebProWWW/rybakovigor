<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-19 01:30
 */

return array_merge([
    'id' => 'frontend',
    'controllerNamespace' => 'frontend\controllers',
    'viewPath' => '@frontend/views',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => 'qJHX_PQadaIA6PYPFKMZp2LgJRf6rQ9D',
        ],
        'user' => [
            'identityClass' => \components\User::class,
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern' => '<view:[\w\-]+>',
                    'suffix' => '.html',
                    'route' => 'site/index',
                ],
                '' => 'site/index',
            ],
        ],
    ],
], YII_ENV_DEV ? [
    'bootstrap' => ['debug', 'gii'],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
        ],
    ],
] : []);