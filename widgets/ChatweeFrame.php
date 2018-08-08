<?php

namespace humhub\modules\chatwee\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class ChatweeFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('chatwee')->getServerUrl() . '/script/';
        return $this->render('chatweeframe', ['chatweeUrl' => $url]);
    }
}
