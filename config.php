<?php

namespace humhub\modules\chatwee;

return [
    'id' => 'chatwee',
    'class' => 'humhub\modules\chatwee\Module',
    'namespace' => 'humhub\modules\chatwee',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\chatwee\Events',
                'addChatweeFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\chatwee\Events',
                'addChatweeFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\chatwee\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
