<?php

namespace humhub\modules\chatwee\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('ChatweeModule.base', 'ChatWee Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('ChatweeModule.base', 'e.g. https://chatwee-api.com/v2/script/{id}.js'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('chatwee')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('chatwee')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
