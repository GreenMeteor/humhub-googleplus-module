<?php

namespace humhub\modules\googleplus;

return [
    'id' => 'googleplus',
    'class' => 'humhub\modules\googleplus\Module',
    'namespace' => 'humhub\modules\googleplus',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\googleplus\Events',
                'addGoogleplusFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\googleplus\Events',
                'addGoogleplusFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\googleplus\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
