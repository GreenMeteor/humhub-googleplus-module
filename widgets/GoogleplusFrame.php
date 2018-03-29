<?php

namespace humhub\modules\googleplus\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class GoogleplusFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('googleplus')->getServerUrl() . '/';
        return $this->render('googleplusframe', ['googleplusUrl' => $url]);
    }
}
