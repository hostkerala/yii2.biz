<?php
$config = [
    'components' => [
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'linkAssets' => true,
            'appendTimestamp' => YII_ENV_DEV
        ]
    ],
    'as locale' => [
        'class' => 'common\components\behaviors\LocaleBehavior'
    ]
];

if (YII_DEBUG) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.33.1'],
        /*'panels'=>[
            'xhprof'=>[
                'class'=>'\trntv\debug\xhprof\panels\XhprofPanel'
            ]
        ]*/
    ];
}

return $config;
