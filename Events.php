<?php

namespace humhub\modules\googleplus;

use Yii;
use yii\helpers\Url;
use humhub\modules\googleplus\widgets\GoogleplusFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('GoogleplusModule.base', 'Google+ Settings'),
            'url' => Url::toRoute('/googleplus/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-google-plus"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'googleplus' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addGoogleplusFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(GoogleplusFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'googleplus')
        ]);
    }
}
