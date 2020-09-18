<?php

namespace humhub\modules\chatwee;

use humhub\widgets\LayoutAddons;
use humhub\modules\chatwee\Events;
use humhub\modules\chatwee\Module;
use humhub\modules\admin\widgets\AdminMenu;

return [
    'id' => 'chatwee',
    'class' => Module::class,
    'namespace' => 'humhub\modules\chatwee',
    'events' => [
        ['class' => LayoutAddons::class, 'event' => LayoutAddons::EVENT_INIT, 'callback' => [Events::class,'onLayoutAddonsInit']],
        ['class' => AdminMenu::class,'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
?>
