<?php
namespace humhub\modules\chatwee;

use Yii;
use yii\helpers\Url;
use humhub\modules\chatwee\widgets\ChatweeFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('ChatweeModule.base', 'ChatWee Settings'),
            'url' => Url::toRoute('/Chatwee/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-discord"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'chatwee' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addChatweeFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(ChatweeFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'chatwee')
        ]);
    }
}
