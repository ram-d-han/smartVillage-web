<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@Uploads' => 'http://localhost/smartVillage/frontend/web/uploads/',
        '@Uploads2' => 'http://localhost/smartVillage/frontend/web/uploads/pembangunan/',
        '@Uploads3' => 'http://localhost/smartVillage/frontend/web/uploads/progress/',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'StatisticComponent' => [
            'class' => 'frontend\components\StatisticComponent',
            'on save-statistic' => ['frontend\components\StatisticComponent', 'handlerSave'],
        ],
    ],
    'modules' => [
        'API' => [
            'class' => 'common\modules\API\Modules',
        ],
    ],
];