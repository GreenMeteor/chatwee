<?php

namespace humhub\modules\chatwee;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('ChatweeModule.base', 'ChatWee Settings'),
            'url' => Url::toRoute('/chatwee/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-commenting-o"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'chatwee' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    public static function onLayoutAddonsInit(\yii\base\Event $event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }

        $event->sender->addWidget(widgets\ChatweeFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'chatwee')
        ]);
    }
}
