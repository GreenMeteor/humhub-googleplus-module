<?php

namespace humhub\modules\googleplus\models;

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
            'serverUrl' => Yii::t('GoogleplusModule.base', 'Google+ Profile URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('GoogleplusModule.base', 'e.g. https://plus.google.com/profileId'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('googleplus')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('googleplus')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
